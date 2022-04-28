<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    }

    public function store(Request $request)
    {

    }
}
