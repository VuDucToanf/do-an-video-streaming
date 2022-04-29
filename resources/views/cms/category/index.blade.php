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
                            <th class="text-center" data-breakpoints="xs">ID</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center" data-breakpoints="xs">Người tạo</th>
                            <th class="text-center" data-breakpoints="xs sm md" data-title="DOB">Ngày tạo</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                        <tr>
                            <form action="{{ route('cms.category') }}" method="get" id="search_form">
                                <td class="text-center">
                                    <input name="id" type="text" value="">
                                </td>
                                <td class="text-center">
                                    <input type="text" name="title">
                                </td>
                                <td class="text-center">
                                    <select name="status" id="" class="custom-select" style="padding: 4px">
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Không hoạt động</option>
                                    </select>
                                </td>
                                <td class="text-center"></td>
                                <td class="text-center">
                                    <input type="date" name="created_time">
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
                                <td class="text-center">{!! $item->title !!}</td>
                                <td class="text-center"><?php if($item->status == 0) echo 'Không hoạt động'; else echo 'Hoạt động' ?></td>
                                <td class="text-center">{!! $item->created_by_name !!}</td>
                                <td class="text-center">{{ $item->created_time }}</td>
                                <td class="text-center">
                                    <a href="{{ route('cms.category.view', $item->id) }}" class="btn btn-primary"><i class="fa fa-sticky-note" aria-hidden="true"></i> Xem</a>
                                    <a href="{{ route('cms.category.update', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
                                    <a href="{{ route('cms.category.delete', $item->id) }}" class="btn btn-danger" onclick="return confirm('Xóa bản ghi này?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
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
