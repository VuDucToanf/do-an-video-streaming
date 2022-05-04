<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\RelationsCategoryVideo;
use App\Models\Video;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $breadcrumb = [
            'title' => 'Quản lý Video',
            'params' => [
                ['title' => 'Quản lý Video', 'url' => '/video'],
            ]
        ];
        $data = \App\Models\Video::query()->with('categories');
        $filter = [];
        $filter['status'] = $request->get('status', '');
        $filter['id'] = $request->get('id', '');
        $filter['name'] = $request->get('name', '');
        $filter['created_time'] = $request->get('created_time', '');

        if($filter['status']) {
            $data->where('status',$filter['status']);
        }
        if($filter['id']) {
            $data->where(\App\Models\Video::TABLE .'.id',$filter['id']);
        }
        if($filter['created_time']) {
            $data->where(\App\Models\Video::TABLE .'.created_time',$filter['created_time']);
        }
        if($filter['name']) {
            $data->where('name', 'like', "%{$filter['name']}%");
        }

        $total = $data->count('id');
        $data = $data->orderBy('id', 'desc')->paginate(10);
        $params = ['total' => $total];
        return view('cms.video.index', compact('breadcrumb', 'data', 'filter', 'params'));
    }

    public function create()
    {
        $categories = Category::query()->where('status', 1)->where('deleted', 0)->get();
        return view('cms.video.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        $brief = $request->get('brief');
        $description = $request->get('description');
        $status = $request->get('status') ? 1 : 0;
        $published_time = $request->get('published_time');
        $is_full = $request->get('is_full') ? 1 : 0;
        $is_hot = $request->get('is_hot') ? 1 : 0;
        $copyright = $request->get('copyright');
        $is_recommend = $request->get('is_recommend') ? $request->get('is_recommend') : 0;
        $categorys = $request->get('categorys', []);
        $thumb_version = 1;
        if($request->hasFile("thumb_version")){
            $fileName = 'image_video_' . $brief . '.jpg';
            $request->file("thumb_version")->move('upload/images/video',$fileName);
        }
        if($request->hasFile("file_upload")){
            $fileName = 'film_video_' . $brief . '.mp4';
            $request->file('file_upload')->move('upload/video/film',$fileName);
        }
        $data = [
            'name' => $name,
            'brief' => $brief,
            'description' => $description,
            'status' => $status,
            'published_time' => $published_time,
            'is_full' => $is_full,
            'is_hot' => $is_hot,
            'copyright' => $copyright,
            'is_recommend' => $is_recommend,
            'thumb_version' => $thumb_version,
            'created_time' => date('Y-m-d H:i:s'),
            'updated_time' => date('Y-m-d H:i:s'),
            'created_by_name' => $_SESSION['admin']->username,
            'updated_by_name' => $_SESSION['admin']->username,
        ];
        $odm = new Video();
        $clone = $odm->create($data);
        if(!$clone || !$clone instanceof Video) {
            return redirect()->back()->withErrors('Dữ liệu cập nhật không hợp lệ');
        }
        RelationsCategoryVideo::relateFromCategory($clone->id, $categorys);
        return redirect('/video');
    }

    public function edit($id)
    {
        $odm = Video::query()->find($id);
        $data = $odm->toArray();
        $categories = Category::query()->where('status', 1)->where('deleted', 0)->get();
        $categories_id_selected = RelationsCategoryVideo::query()->where('video_id', '=', $id)->pluck('category_id')->toArray();
        return view('cms.video.edit', compact('data', 'categories', 'categories_id_selected'));
    }

    public function update(Request $request, $id)
    {
        $name = $request->get('name');
        $brief = $request->get('brief');
        $description = $request->get('description');
        $status = $request->get('status') ? 1 : 0;
        $published_time = $request->get('published_time');
        $is_full = $request->get('is_full') ? 1 : 0;
        $is_hot = $request->get('is_hot') ? 1 : 0;
        $is_recommend = $request->get('is_recommend') ? $request->get('is_recommend') : 0;
        $copyright = $request->get('copyright');
        $categorys = $request->get('categorys', []);
        if($request->hasFile("thumb_version")){
            $fileName = 'image_video_' . $brief . '.jpg';
            $request->file("thumb_version")->move('upload/images/video',$fileName);
        }
        if($request->hasFile("file_upload")){
            $fileName = 'film_video_' . $brief . '.mp4';
            $request->file('file_upload')->move('upload/video/film',$fileName);
        }
        $data = [
            'name' => $name,
            'brief' => $brief,
            'description' => $description,
            'status' => $status,
            'published_time' => $published_time,
            'is_full' => $is_full,
            'is_hot' => $is_hot,
            'copyright' => $copyright,
            'is_recommend' => $is_recommend,
            'created_time' => date('Y-m-d H:i:s'),
            'updated_time' => date('Y-m-d H:i:s'),
            'created_by_name' => $_SESSION['admin']->username,
            'updated_by_name' => $_SESSION['admin']->username,
        ];
        $clone = Video::query()->find($id);
        if (!$clone instanceof Video) {
            abort(404);
        }
        $result = $clone->update($data);
        if ($result == false) {
            return back()->withErrors('Không thể cập nhật nghệ sỹ, vui lòng liên hệ kỹ thuật');
        }
        RelationsCategoryVideo::relateFromCategory($clone->id, $categorys);
        return redirect('/video');
    }

    public function delete($id)
    {
        $delete = [
            'deleted' => 1
        ];
        DB::table('video')->where('id',$id)->update($delete);
    }
}
