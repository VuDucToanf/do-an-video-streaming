<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actor;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    public function index(Request $request)
    {
        $data = \App\Models\Actor::query();
        $filter = [];
        $filter['id'] = $request->get('id', '');
        $filter['name'] = $request->get('name', '');

        if($filter['id']) {
            $data->where(\App\Models\Actor::TABLE .'.id',$filter['id']);
        }

        if($filter['name']) {
            $data->where('name', 'like', "%{$filter['name']}%");
        }

        $total = $data->count('id');
        $data = $data->orderBy('id', 'desc')->paginate(10);
        $params = ['total' => $total];
        return view('cms.actor.index', compact('data', 'filter', 'params'));
    }

    public function create()
    {
        return view('cms.actor.create');
    }

    public function store(Request $request)
    {
        $actor = new Actor();
        $actor->created_time = date('Y-m-d H:i:s');
        $actor->updated_time = date('Y-m-d H:i:s');
        $actor->created_by_name = $_SESSION['admin']->username;
        $actor->updated_by_name = $_SESSION['admin']->username;
        $actor->name = $request->get('name');
        $actor->slug = $request->get('slug');
        $actor->status = $request->get('status', 1);
        $actor->save();
        return redirect('/actor');
    }

    public function edit($id)
    {
        $odm = Actor::query()->find($id);
        $data = $odm->toArray();
        return view('cms.actor.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $name = $request->get('name');
        $slug = $request->get('slug');
        $status = $request->get('status', 1);

        $data = [
            'name' => $name,
            'slug' => $slug,
            'status' => $status,
            'updated_time' => date('Y-m-d H:i:s'),
            'updated_by_name' => $_SESSION['admin']->username,
        ];

        $clone = Actor::query()->find($id);
        if (!$clone instanceof Actor) {
            abort(404);
        }
        $result = $clone->update($data);
        if ($result == false) {
            return back()->withErrors('Không thể cập nhật diễn viên, vui lòng liên hệ kỹ thuật');
        }
        return redirect('/actor');
    }

    public function delete($id)
    {
        $delete = [
            'deleted' => 1
        ];
        DB::table('actor')->where('id',$id)->update($delete);
    }
}
