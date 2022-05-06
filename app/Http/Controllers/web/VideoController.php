<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Author;
use App\Models\Category;
use App\Models\RelationsCategoryVideo;
use App\Models\RelationsVideoActor;
use App\Models\RelationsVideoAuthor;
use App\Models\Video;

class VideoController extends Controller
{
    public function show($brief)
    {
        if(auth()->guest())
        {
            return redirect('/login');
        }
        $video = Video::query()->where('brief', $brief)->first();
        $view = [
            'view' => $video->view
        ];
        $video->update($view);
        return view('web.video.index', compact('video', 'brief'));
    }

    public function search($name)
    {
        $data = Video::query()->where('name', 'like', "%{$name}%")->paginate(20);
        return view('web.video.search', compact('data', 'name'));
    }

    public function qSearch($name)
    {
        $data = Video::query()->where('name', 'like', "%{$name}%")->get();
        $strResult = "";
        foreach($data as $rows){
            $strResult = $strResult."<li><img src=" . asset('upload/images/video/image_video_') . $rows->brief . '.jpg' . "> <a href=" . request()->root() . '/video/detail/' . $rows->brief . ">{$rows->name}</a></li>";
        }
        echo $strResult;
    }

    public function like()
    {
        $user = auth()->user();
        $data = Video::query()
            ->join('like', 'video.id', '=', 'like.video_id')
            ->where('like.user_id', '=', $user->id)
            ->where('video.status', 1)
            ->where('video.deleted', 0)
            ->paginate(20);
        return view('web.video.like', compact('data', 'user'));
    }

    public function recommend()
    {
        $data = Video::query()->where('status', 1)->where('deleted', 0)->where('is_recommend', 1)->paginate(20);
        return view('web.video.recommend', compact('data'));
    }

    public function info($brief)
    {
        $video = Video::query()->where('brief', $brief)->first();

        $categories_selected = RelationsCategoryVideo::query()->where('video_id', '=', $video->id)->pluck('category_id')->toArray();
        $categories = Category::query()->whereIn('id', $categories_selected)->get();

        $authors_selected = RelationsVideoAuthor::query()->where('video_id', '=', $video->id)->pluck('author_id')->toArray();
        $authors = Author::query()->whereIn('id', $authors_selected)->get();

        $actors_selected = RelationsVideoActor::query()->where('video_id', '=', $video->id)->pluck('actor_id')->toArray();
        $actors = Actor::query()->whereIn('id', $actors_selected)->get();

        $video_id_relate = RelationsCategoryVideo::query()->select('video_id')->whereIn('category_id', $categories_selected)->inRandomOrder()->limit(10)->get()->toArray();
        $video_relate = Video::query()->whereIn('id', $video_id_relate)->limit(5)->get();
        return view('web.video.info', compact('video', 'brief', 'categories', 'authors', 'actors', 'video_relate'));
    }

    public function searchWithActor($slug)
    {
        $actor = Actor::query()->where('slug', 'like', "%{$slug}%")->first();
        $data = Video::query()
            ->join('relations_video_actor', 'video.id', '=', 'relations_video_actor.video_id')
            ->where('relations_video_actor.actor_id', '=', $actor->id)
            ->where('video.status', 1)
            ->where('video.deleted', 0)
            ->paginate(20);
        return view('web.video.actor', compact('data', 'actor'));
    }

    public function searchWithAuthor($slug)
    {
        $author = Author::query()->where('slug', 'like', "%{$slug}%")->first();
        $data = Video::query()
            ->join('relations_video_author', 'video.id', '=', 'relations_video_author.video_id')
            ->where('relations_video_author.author_id', '=', $author->id)
            ->where('video.status', 1)
            ->where('video.deleted', 0)
            ->paginate(20);
        return view('web.video.author', compact('data', 'author'));
    }
}
