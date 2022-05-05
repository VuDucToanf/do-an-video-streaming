<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function index()
    {
        $data = Banner::query()->where('status', 1)->where('deleted', 0);
        $total = $data->count('id');
        $data = $data->orderBy('id', 'desc')->paginate(10);
        $params = ['total' => $total];
        return view('cms.banner.index', compact('data', 'params'));
    }

    public function create()
    {
        return view('cms.banner.create');
    }

    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->created_time = date('Y-m-d H:i:s');
        $banner->updated_time = date('Y-m-d H:i:s');
        $banner->created_by_name = $_SESSION['admin']->username;
        $banner->updated_by_name = $_SESSION['admin']->username;
        $banner->thumb_version = 1;
        $banner->save();
        if($request->hasFile("thumb_version")){
            $fileName = 'image_banner_' . $banner->id . '.jpg';
            $request->file("thumb_version")->move('upload/images/banner',$fileName);
        }
        return redirect('/banner');
    }

    public function edit($id)
    {
        $odm = Banner::query()->find($id);
        $data = $odm->toArray();
        return view('cms.banner.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::query()->where('id', $id)->first();
        if($request->hasFile("thumb_version")){
            $fileName = 'image_banner_' . $id . '.jpg';
            $request->file("thumb_version")->move('upload/images/banner',$fileName);
        }
        $status = $request->get('status')?$request->get('status'):0;
        $data = [
            'status' => $status
        ];
        $banner->update($data);
        return redirect('/banner');
    }

    public function delete($id)
    {
        $delete = [
            'deleted' => 1
        ];
        DB::table('banner')->where('id',$id)->update($delete);
    }
}
