@extends('cms.layouts.default')
@section('content-main')
    <section class="wrapper">
        <a href="{{ route('cms.video.create') }}" class="btn btn-success" style="margin-bottom: 20px;">Thêm mới</a>
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quản lý Video
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
                            <th>ID</th>
                            <th>Tên film</th>
                            <th>Brief</th>
                            <th>Ảnh</th>
                            <th>Lượt xem</th>
                            <th>Trạng thái hoạt động</th>
                            <th>Ngày tạo</th>
                            <th>Ngày phát hành</th>
                            <th>Full film</th>
                            <th>Thao tác</th>
                        </tr>
                        <tr>
                            <form action="{{ route('cms.category') }}" method="get" id="search_form">
                                <td>
                                    <input name="id" type="text" value="">
                                </td>
                                <td>
                                    <input type="text" name="name">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <select name="status" id="" class="custom-select" style="padding: 4px">
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Không hoạt động</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="date" name="created_time">
                                </td>
                                <td>
                                    <input type="date" name="published_time">
                                </td>
                                <td>
                                    <select name="is_full" id="" class="custom-select" style="padding: 4px">
                                        <option value="1">Đã hoàn thành</option>
                                        <option value="0">Chưa hoàn thành</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-info">Tìm kiếm</button>
                                </td>
                            </form>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($video as $item)
                            <tr>
                                <td>{!! $item->id !!}</td>
                                <td>{!! $item->name !!}</td>
                                <td>{!! $item->brief !!}</td>
                                <td></td>
                                <td>{!! $item->view !!}</td>
                                <td><?php if($item->status == 0) echo 'Không hoạt động'; else echo 'Hoạt động' ?></td>
                                <td>{{ $item->created_time }}</td>
                                <td>{{ $item->published_time }}</td>
                                <td><?php if($item->is_full == 0) echo 'Chưa hoàn thành'; else echo 'Đã hoàn thành' ?></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
