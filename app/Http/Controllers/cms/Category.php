<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use File;

class Category extends Controller
{
    public function index(Request $request)
    {
        if(!isset($_SESSION['admin'])){
            return redirect('/login');
        }
        $breadcrumb = [
            'title'=>'Quản lý thể loại',
            'params'=>[
                ['title'=>'Quản lý thể loại','url'=>route('cms.category')],
            ]
        ];
        $query = \App\Models\Category::query()->with(['child'])->where('parent_id',0)->where('deleted', 0);
        $categories = $query->orderBy('created_time','asc')->paginate(20);
        $total = $categories->total();
        $params = ['total'=>$total];
        return view('cms.category.index',compact('breadcrumb','categories','params'));
    }

    public function create()
    {
        $form_option = [
            'action'=>'category.store',
            'method'=>'post',
        ];
        $categories = \App\Models\Category::query()
            ->where('parent_id',0)
            ->where('status', 1)
            ->where('deleted', 0)
            ->get();
        return view('cms.category.create',compact('form_option', 'categories'));
    }

    public function store(Request $request)
    {
        $title = $request->get('title');
        $description = $request->get('description');
        $slug = $request->get('slug');
        $status = 1;
        $deleted = 0;
        $thumb_version = 0;
        if($request->hasFile("thumb_version")){
            $thumb_version = 1;
            //lấy tên file
            $photo = time()."_".$request->file("thumb_version")->getClientOriginalName();
            //thực hiện upload ảnh
            $request->file("thumb_version")->move('upload/images/category',$photo);
        }
        $parent_id = $request->get('parent_id') !== null ? $request->get('parent_id') : 0;
        $data = [
            'title' => $title,
            'slug' => $slug,
            'description' => $description,
            'thumb_version' => $thumb_version,
            'status' => $status,
            'deleted' => $deleted,
            'parent_id' => $parent_id,
        ];
        DB::table('category')->insert($data);
        return redirect('/category');
    }
}
