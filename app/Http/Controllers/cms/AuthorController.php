<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index(Request $request)
    {
        $data = \App\Models\Author::query();
        $filter = [];
        $filter['id'] = $request->get('id', '');
        $filter['name'] = $request->get('name', '');

        if($filter['id']) {
            $data->where(\App\Models\Author::TABLE .'.id',$filter['id']);
        }

        if($filter['name']) {
            $data->where('name', 'like', "%{$filter['name']}%");
        }

        $total = $data->count('id');
        $data = $data->orderBy('id', 'desc')->paginate(10);
        $params = ['total' => $total];
        return view('cms.author.index', compact('data', 'filter', 'params'));
    }

    public function create()
    {
        return view('cms.author.create');
    }

    public function store(Request $request)
    {
        $author = new Author();
        $author->created_time = date('Y-m-d H:i:s');
        $author->updated_time = date('Y-m-d H:i:s');
        $author->created_by_name = $_SESSION['admin']->username;
        $author->updated_by_name = $_SESSION['admin']->username;
        $author->name = $request->get('name');
        $author->slug = $request->get('slug');
        $author->status = $request->get('status', 1);
        $author->save();
        return redirect('/author');
    }

    public function edit($id)
    {
        $odm = Author::query()->find($id);
        $data = $odm->toArray();
        return view('cms.author.edit', compact('data'));
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

        $clone = Author::query()->find($id);
        if (!$clone instanceof Author) {
            abort(404);
        }
        $result = $clone->update($data);
        if ($result == false) {
            return back()->withErrors('Không thể cập nhật đạo diễn, vui lòng liên hệ kỹ thuật');
        }
        return redirect('/author');
    }

    public function delete($id)
    {
        $delete = [
            'deleted' => 1
        ];
        DB::table('author')->where('id',$id)->update($delete);
    }
}
