@extends('cms.layouts.default')
@section('content-main')
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quản lý Người dùng
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
                            <th class="text-center">Username</th>
                            <th class="text-center">Ảnh</th>
                            <th class="text-center">Fullname</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Điện thoại</th>
                            <th class="text-center">Ngày tạo</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                        <tr>
                            <form action="{{ route('user.create') }}" method="get" id="search_form">
                                <td class="text-center">
                                    <input name="id" type="text" value="" style="width: 50px;">
                                </td>
                                <td class="text-center">
                                    <input type="text" name="username">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                </td>
                                <td class="text-center">
                                    <input type="text" name="mobile">
                                </td>
                                <td class="text-center">
                                    <input type="date" name="created_at">
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
                                <td class="text-center">{!! $item->username !!}</td>
                                <td class="text-center">
{{--                                    <img src="{{ asset('/upload/images/video/image_video_' . $item->brief . '.jpg') }}" alt="" width="100">--}}
                                </td>
                                <td class="text-center">{!! $item->fullname !!}</td>
                                <td class="text-center">{{ $item->email }}</td>
                                <td class="text-center"><?php if($item->status == 0) echo 'Không hoạt động'; else echo 'Hoạt động' ?></td>
                                <td class="text-center">{{ $item->mobile }}</td>
                                <td class="text-center">{{ $item->created_at }}</td>
                                <td class="text-center">
                                    <a href="{!! route('user.show', $item->id) !!}" class="btn btn-primary"><i class="fa fa-sticky-note" aria-hidden="true"></i> Xem</a>
                                    <a href="{!! route('user.edit', $item->id) !!}" class="btn btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
                                    <a href="{{ route('cms.user.delete', $item->id) }}" class="btn btn-danger" onclick="return confirm('Xóa bản ghi này?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="editable_info" role="status" aria-live="polite">
                            Hiển thị từ 1 đến {!! isset($data)?count($data):0 !!} trong tổng số {!! isset($params['total'])?$params['total']:0 !!} kết quả
                        </div>
                    </div>
                    <div class="col-sm-5 text-right">
                        {!! $data->render() !!}
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
