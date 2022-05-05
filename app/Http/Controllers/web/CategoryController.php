<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug, Request $request)
    {
        $category = Category::query()->where('slug', $slug)->first();
        $data = Video::query()
            ->join('relations_video_category', 'video.id', '=', 'relations_video_category.video_id')
            ->where('relations_video_category.category_id', '=', $category->id)
            ->where('video.status', 1)
            ->where('video.deleted', 0);
        $order = null;
        if($request->get('order'))
        {
            $order = $request->get('order');
            if($request->get('order') == 'view_desc')
                $data = $data->orderBy('view', 'desc');
            else if($request->get('order') == 'view_asc')
                $data = $data->orderBy('view');
            else if($request->get('order') == 'published_time_desc')
                $data = $data->orderBy('published_time', 'desc');
            else $data = $data->orderBy('updated_time');
        }
        $data = $data->paginate(20);
        return view('web.category.show', compact('category', 'data', 'order'));
    }
}
