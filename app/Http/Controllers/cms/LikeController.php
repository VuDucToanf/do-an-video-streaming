<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Like;

class LikeController extends Controller
{
    public function index()
    {
        $data = Like::query();
        $total = $data->count('id');
        $data = $data->orderBy('id', 'desc')->paginate(20);
        $params = ['total' => $total];
        return view('cms.like.index', compact('data', 'params'));
    }
}
