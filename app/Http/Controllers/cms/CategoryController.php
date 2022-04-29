<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use File;

class CategoryController extends Controller
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
        $data = \App\Models\Category::query()->where('deleted', 0);

        if($request->id){
            $query = $data->where('id', $request->id);
        }
        if($request->title){
            $query = $data->where('title', 'like', $request->title);
        }

        if($request->status){
            $query = $data->where('status', $request->status);
        }

        if($request->created_time){
            $query = $query->where('created_time', '>=', $request->created_time . ' 00:00:00')
                            ->where('created_time', '<=', $request->created_time . ' 23:59:59');
        }

        $total = $data->count('id');
        $data = $data->orderBy('id', 'desc')->paginate(10);
        $params = ['total' => $total];
        return view('cms.category.index',compact('breadcrumb','data', 'params'));
    }

    public function create()
    {
        return view('cms.category.create');
    }

    public function store(Request $request)
    {
        $title = $request->get('title');
        $description = $request->get('description');
        $slug = $request->get('slug');
        $status = $request->get('status', 1);
        $deleted = 0;
        $thumb_version = 0;
        $data = [
            'title' => $title,
            'slug' => $slug,
            'description' => $description,
            'thumb_version' => $thumb_version,
            'status' => $status,
            'deleted' => $deleted,
            'created_time' => date('Y-m-d H:i:s'),
            'updated_time' => date('Y-m-d H:i:s'),
            'created_by_name' => $_SESSION['admin']->username,
            'updated_by_name' => $_SESSION['admin']->username,
        ];
        DB::table('category')->insert($data);
        return redirect('/category');
    }

    public function update($id)
    {
        $category = DB::table('category')->where('id', $id)->first();
        return view('cms.category.update', compact('category'));
    }

    public function save(Request $request, $id)
    {
        $title = $request->get('title');
        $description = $request->get('description');
        $slug = $request->get('slug');
        $status = $request->get('status');
        $thumb_version = 0;
        $data = [
            'title' => $title,
            'slug' => $slug,
            'status' => $status,
            'description' => $description,
            'thumb_version' => $thumb_version,
            'updated_time' => date('Y-m-d H:i:s'),
            'updated_by_name' => $_SESSION['admin']->username,
        ];
        DB::table('category')->where('id', $id)->update($data);
        return redirect('/category');
    }

    public function delete($id)
    {
        $delete = [
            'deleted' => 1
        ];
        DB::table('category')->where('id',$id)->update($delete);
    }
}
