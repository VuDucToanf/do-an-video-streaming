<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Author;
use App\Models\Category;
use App\Models\RelationsCategoryVideo;
use App\Models\RelationsVideoActor;
use App\Models\RelationsVideoAuthor;
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
        $authors = Author::query()->where('status', 1)->where('deleted', 0)->get();
        $actors = Actor::query()->where('status', 1)->where('deleted', 0)->get();
        $categories = Category::query()->where('status', 1)->where('deleted', 0)->get();
        return view('cms.video.create', compact('categories', 'authors', 'actors'));
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        $brief = $request->get('brief');
        $description = $request->get('description');
        $status = $request->get('status') ? 1 : 0;
        $published_time = $request->get('published_time');
        $actors = $request->get('actors', []);
        $authors = $request->get('authors', []);
        $is_full = $request->get('is_full') ? 1 : 0;
        $is_hot = $request->get('is_hot') ? 1 : 0;
        $copyright = $request->get('copyright');
        $is_recommend = $request->get('is_recommend') ? $request->get('is_recommend') : 0;
        $categorys = $request->get('categorys', []);
        $parent_id = $request->get('parent_id') ? $request->get('parent_id') : 0;
        $seri_order = $request->get('seri_order') ? $request->get('seri_order') : 0;
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
            'parent_id' => $parent_id,
            'seri_order' => $seri_order,
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
        RelationsVideoAuthor::relateFromAuthor($clone->id, $authors);
        RelationsVideoActor::relateFromActor($clone->id, $actors);
        return redirect('/video');
    }

    public function edit($id)
    {
        $odm = Video::query()->find($id);
        $data = $odm->toArray();

        $categories = Category::query()->where('status', 1)->where('deleted', 0)->get();
        $categories_id_selected = RelationsCategoryVideo::query()->where('video_id', '=', $id)->pluck('category_id')->toArray();


        $authors = Author::query()->where('status', 1)->where('deleted', 0)->get();
        $authors_selected = RelationsVideoAuthor::query()->where('video_id', '=', $id)->pluck('author_id')->toArray();


        $actors = Actor::query()->where('status', 1)->where('deleted', 0)->get();
        $actors_selected = RelationsVideoActor::query()->where('video_id', '=', $id)->pluck('actor_id')->toArray();

        return view('cms.video.edit', compact('data', 'categories', 'categories_id_selected', 'authors', 'authors_selected', 'actors', 'actors_selected'));
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
        $actors = $request->get('actors', []);
        $authors = $request->get('authors', []);
        $parent_id = $request->get('parent_id') ? $request->get('parent_id') : 0;
        $seri_order = $request->get('seri_order') ? $request->get('seri_order') : 0;
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
            'parent_id' => $parent_id,
            'seri_order' => $seri_order,
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
            return back()->withErrors('Không thể cập nhật video, vui lòng liên hệ kỹ thuật');
        }
        RelationsCategoryVideo::relateFromCategory($clone->id, $categorys);
        RelationsVideoAuthor::relateFromAuthor($clone->id, $authors);
        RelationsVideoActor::relateFromActor($clone->id, $actors);
        return redirect('/video');
    }

    public function delete($id)
    {
        $delete = [
            'deleted' => 1
        ];
        DB::table('video')->where('id',$id)->update($delete);
    }

    public function searchFilm(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data =\App\Models\Video::select("id","name")
                ->where('name','LIKE',"%$search%")
                ->where('status',1)
                ->where('deleted',0)
                ->get();
        }
        return response()->json($data);
    }

    public function show($id)
    {
        $data = Video::query()->find($id);
        if(!$data){
            abort(404);
        }
        $parent = Video::query()->where('id', $data->parent_id)->first();
        return view('cms.video.show', compact('data','parent'));
    }
}
