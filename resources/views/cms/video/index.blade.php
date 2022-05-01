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
                            <th class="text-center">ID</th>
                            <th class="text-center">Tên film</th>
                            <th class="text-center">Ảnh</th>
                            <th class="text-center">Lượt xem</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Ngày tạo</th>
                            <th class="text-center">Người tạo</th>
                            <th class="text-center">Ngày phát hành</th>
                            <th class="text-center">Full film</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                        <tr>
                            <form action="{{ route('cms.video') }}" method="get" id="search_form">
                                <td class="text-center">
                                    <input name="id" type="text" value="" style="width: 50px;">
                                </td>
                                <td class="text-center">
                                    <input type="text" name="name">
                                </td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <select name="status" id="" class="custom-select" style="padding: 4px">
                                        <option value=""></option>
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Không hoạt động</option>
                                    </select>
                                </td>
                                <td class="text-center">
                                    <input type="date" name="created_time">
                                </td>
                                <td></td>
                                <td class="text-center">
                                    <input type="date" name="published_time">
                                </td>
                                <td class="text-center">
                                    <select name="is_full" id="" class="custom-select" style="padding: 4px">
                                        <option value=""></option>
                                        <option value="1">Đã hoàn thành</option>
                                        <option value="0">Chưa hoàn thành</option>
                                    </select>
                                </td>
                                <td class="text-center">
                                    <button type="submit" class="btn btn-info">Tìm kiếm</button>
                                </td>
                            </form>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td class="text-center">{!! $item->id !!}</td>
                                <td class="text-center">{!! $item->name !!}</td>
                                <td class="text-center">
                                    <img src="{{ asset('/upload/images/video/image_video_' . $item->brief . '.jpg') }}" alt="" width="100">
                                </td>
                                <td class="text-center">{!! $item->view !!}</td>
                                <td class="text-center"><?php if($item->status == 0) echo 'Không hoạt động'; else echo 'Hoạt động' ?></td>
                                <td class="text-center">{{ $item->created_time }}</td>
                                <td class="text-center">{{ $item->created_by_name }}</td>
                                <td class="text-center">{{ $item->published_time }}</td>
                                <td class="text-center"><?php if($item->is_full == 0) echo 'Chưa hoàn thành'; else echo 'Đã hoàn thành' ?></td>
                                <td class="text-center">
                                    <a href="{{ route('cms.video.show', $item->id) }}" class="btn btn-primary"><i class="fa fa-sticky-note" aria-hidden="true"></i> Xem</a>
                                    <a href="{{ route('cms.video.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
                                    <a href="{{ route('cms.video.delete', $item->id) }}" class="btn btn-danger" onclick="return confirm('Xóa bản ghi này?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
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
