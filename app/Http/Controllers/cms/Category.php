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
        $query = \App\Models\Category::query()->with(['child'])->where('deleted', 0);

        if($request->id){
            $query = $query->where('id', $request->id);
        }
        if($request->title){
            $query = $query->where('title', 'like', $request->title);
        }

        if($request->status){
            $query = $query->where('status', $request->status);
        }

        if($request->created_time){
            $query = $query->where('created_time', '>=', $request->created_time . ' 00:00:00')
                            ->where('created_time', '<=', $request->created_time . ' 23:59:59');
        }

        $categories = $query->orderBy('created_time','asc')->paginate(20);
        return view('cms.category.index',compact('breadcrumb','categories'));
    }

    public function create()
    {
        $categories = \App\Models\Category::query()
            ->where('parent_id',0)
            ->where('status', 1)
            ->where('deleted', 0)
            ->get();
        return view('cms.category.create',compact('categories'));
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
            'created_time' => date('Y-m-d H:i:s'),
            'updated_time' => date('Y-m-d H:i:s'),
            'created_by' => $_SESSION['admin']->id,
            'updated_by' => $_SESSION['admin']->id,
        ];
        DB::table('category')->insert($data);
        return redirect('/category');
    }

    public function update(Request $request, $id)
    {
        $category = DB::table('category')->where('id', $id)->first();
        return view('cms.category.update', ['category' => $category]);
    }

    public function save(Request $request, $id)
    {
        $title = $request->get('title');
        $description = $request->get('description');
        $slug = $request->get('slug');
        $thumb_version = 0;
        if($request->hasFile("thumb_version")){
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
            'parent_id' => $parent_id,
            'updated_time' => date('Y-m-d H:i:s'),
            'updated_by' => $_SESSION['admin']->id,
        ];
        DB::table('category')->where('id', $id)->update($data);
        return redirect('/category');
    }

    public function delete($id)
    {
        DB::table("category")->where("id", $id)->delete();
    }
}
