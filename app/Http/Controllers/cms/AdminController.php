<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $data = Admin::query();
        $filter = [];
        $filter['phone'] = $request->get('phone', '');
        $filter['id'] = $request->get('id', '');
        $filter['username'] = $request->get('username', '');
        $filter['created_time'] = $request->get('created_time', '');

        if($filter['phone']) {
            $data->where('phone', 'like',"%{$filter['phone']}%");
        }
        if($filter['id']) {
            $data->where(\App\Models\Video::TABLE .'.id',$filter['id']);
        }
        if($filter['created_time']) {
            $data->where(\App\Models\Video::TABLE .'.created_time',$filter['created_time']);
        }
        if($filter['username']) {
            $data->where('username', 'like', "%{$filter['username']}%");
        }

        $total = $data->count('id');
        $data = $data->orderBy('id', 'desc')->paginate(10);
        $params = ['total' => $total];
        return view('cms.admin.index', compact('data', 'filter', 'params'));
    }

    public function show($id)
    {
        $data = Admin::query()->find($id);
        if(!$data){
            abort(404);
        }
        return view('cms.admin.show', compact('data','id'));
    }

    public function create()
    {}

    public function store(Request $request)
    {}

    public function edit($id)
    {
        $odm = Admin::query()->find($id);
        $data = $odm->toArray();
        return view('cms.admin.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $status = $request->get('status', 1);
        $password = $request->get('password', '-1');
        if($password != '-1'){
            $data = [
                'password' => $password,
                'status' => $status
            ];
        }else {
            $data = [
                'status' => $status
            ];
        }
        $clone = Admin::query()->find($id);
        if (!$clone instanceof Admin) {
            abort(404);
        }
        $result = $clone->update($data);
        if ($result == false) {
            return back()->withErrors('Không thể cập nhật người dùng này, vui lòng liên hệ kỹ thuật');
        }
        return redirect('/admin');
    }

    public function delete($id)
    {
        $delete = [
            'deleted' => 1
        ];
        DB::table('admin')->where('id',$id)->update($delete);
    }
}
