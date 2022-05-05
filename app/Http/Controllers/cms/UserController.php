<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data = User::query();

        $filter = [];
        $filter['mobile'] = $request->get('mobile', '');
        $filter['id'] = $request->get('id', '');
        $filter['username'] = $request->get('username', '');
        $filter['created_at'] = $request->get('created_at', '');

        if($filter['mobile']) {
            $data->where('mobile', 'like',"%{$filter['mobile']}%");
        }
        if($filter['id']) {
            $data->where(\App\Models\Video::TABLE .'.id',$filter['id']);
        }
        if($filter['created_at']) {
            $data->where(\App\Models\Video::TABLE .'.created_at',$filter['created_at']);
        }
        if($filter['username']) {
            $data->where('username', 'like', "%{$filter['username']}%");
        }

        $total = $data->count('id');
        $data = $data->orderBy('id', 'desc')->paginate(10);
        $params = ['total' => $total];
        return view('cms.user.index', compact('data', 'filter', 'params'));
    }

    public function edit($id)
    {
        $odm = User::query()->find($id);
        $data = $odm->toArray();
        return view('cms.video.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $status = $request->get('status', 1);
        $password = $request->get('password', '-1');
        if($password != '-1'){
            $password = Hash::make($password);
            $data = [
                'password' => $password,
                'status' => $status
            ];
        }else {
            $data = [
                'status' => $status
            ];
        }
        $clone = User::query()->find($id);
        if (!$clone instanceof User) {
            abort(404);
        }
        $result = $clone->update($data);
        if ($result == false) {
            return back()->withErrors('Không thể cập nhật người dùng này, vui lòng liên hệ kỹ thuật');
        }
        return redirect('/user');
    }

    public function delete($id)
    {
        $delete = [
            'deleted' => 1
        ];
        DB::table('users')->where('id',$id)->update($delete);
    }

    public function show()
    {}
}
