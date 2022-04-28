<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use File;

class Video extends Controller
{
    public function index(Request $request)
    {
        $breadcrumb = [
            'title' => 'Quản lý Video',
            'params' => [
                ['title' => 'Quản lý Video', 'url' => '/video'],
            ]
        ];
        $video = \App\Models\Video::query()->with('categories');
        $filter = [];
        $filter['status'] = $request->get('status', '');
        $filter['id'] = $request->get('id', '');
        $filter['name'] = $request->get('name', '');
        $filter['created_time'] = $request->get('created_time', '');

        if($filter['status']) {
            $video->where('status',$filter['status']);
        }
        if($filter['id']) {
            $video->where(\App\Models\Video::TABLE .'.id',$filter['id']);
        }
        if($filter['created_time']) {
            $video->where(\App\Models\Video::TABLE .'.created_time',$filter['created_time']);
        }
        if($filter['name']) {
            $video->where('name', 'like', "%{$filter['name']}%");
        }

        $video->distinct();
        $categories = DB::table('category')->select(['id', 'title']);
        $video = $video->orderBy(\App\Models\Video::TABLE . '.created_time', 'desc')->paginate(20);
        return view('cms.video.index', compact('breadcrumb', 'video', 'filter', 'categories'));
    }

    public function create(Request $request)
    {
        return view('cms.video.create',compact());
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        $brief = $request->get('brief');
        $description = $request->get('description');
        $status = $request->get('status');
        $published_time = $request->get('pulished_time');
        $is_full = $request->get('is_full');
        $is_hot = $request->get('is_hot');
        $copyright = $request->get('copyright');
        $thumb_version = 0;
        if($request->hasFile("thumb_version")){
            $thumb_version = 1;
            $fileName = 'image_video_' . $brief . '.jpg';
            $request->file("thumb_version")->move('upload/images/video',$fileName);
            $fileData = File::get(public_path('upload/images/video/'.$fileName));
            Storage::cloud()->put($fileName, $fileData);
        }
        if($request->hasFile("file_upload")){
            $fileName = 'film_video_' . $brief . '.mp4';
            $request->file('file_upload')->move('upload/video/film',$fileName);
            $fileData = File::get(public_path('upload/video/film/'.$fileName));
            Storage::cloud()->put($fileName, $fileData);
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
            'thumb_version' => $thumb_version,
            'created_time' => date('Y-m-d H:i:s'),
            'updated_time' => date('Y-m-d H:i:s'),
            'created_by' => $_SESSION['admin']->id,
            'updated_by' => $_SESSION['admin']->id,
        ];
        DB::table('video')->insert($data);
        return redirect('/video');
    }
}
