@extends('cms.layouts.default')
@section('content-main')
    <section class="wrapper">
        <a href="{{ route('cms.category.create') }}" class="btn btn-success" style="margin-bottom: 20px;">Thêm mới</a>
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quản lý thể loại
                </div>
                <div>
                    <table class="table" ui-jq="footable" ui-options='{
                        "paging": {
                          "enabled": true
                        },
                        "filtering": {
                          "enabled": true
                        },
                        "sorting": {
                          "enabled": true
                        }}'
                    >
                        <thead>
                        <tr>
                            <th data-breakpoints="xs">ID</th>
                            <th>Title</th>
                            <th>Trạng thái</th>
                            <th data-breakpoints="xs">Thể loại cha</th>
                            <th data-breakpoints="xs sm md" data-title="DOB">Ngày tạo</th>
                            <th>Thao tác</th>
                        </tr>
                        <tr>
                            <form action="{{ route('cms.category') }}" method="get" id="search_form">
                                <td>
                                    <input name="id" type="text" value="">
                                </td>
                                <td>
                                    <input type="text" name="title">
                                </td>
                                <td>
                                    <select name="status" id="" class="custom-select" style="padding: 4px">
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Không hoạt động</option>
                                    </select>
                                </td>
                                <td></td>
                                <td>
                                    <input type="date" name="created_time">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-info">Tìm kiếm</button>
                                </td>
                            </form>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $item)
                            <tr>
                                <td>{!! $item->id !!}</td>
                                <td>{!! $item->title !!}</td>
                                <td><?php if($item->status == 0) echo 'Không hoạt động'; else echo 'Hoạt động' ?></td>
                                <td>{!! $item->parent_id !!}</td>
                                <td>{{ $item->created_time }}</td>
                                <td>
                                    <a href="{{ route('cms.category.view', $item->id) }}" class="btn btn-primary"><i class="fa fa-sticky-note" aria-hidden="true"></i> Xem</a>
                                    <a href="{{ route('cms.category.update', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
                                    <a href="{{ route('cms.category.delete', $item->id) }}" class="btn btn-danger" onclick="return confirm('Xóa bản ghi này?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
