<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\AccessLog;
use App\Models\Video;

class AccessLogController extends Controller
{
    public function detail($id)
    {
        $data = AccessLog::query()
            ->where('video_id', $id)->paginate(20);
        $name = Video::query()->select('name')->where('id', $id)->first();
        $name = $name->name;
        return view('cms.access_log.index', compact('data', 'name'));
    }
}
