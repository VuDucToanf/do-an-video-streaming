@extends('cms.layouts.default')
@section('content-main')
    <section class="wrapper">
        <a href="{{ route('cms.banner.create') }}" class="btn btn-success" style="margin-bottom: 20px;">Thêm mới</a>
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quản lý Banner
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
                            <th class="text-center">Ảnh</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Ngày tạo</th>
                            <th class="text-center">Người tạo</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td class="text-center">{!! $item->id !!}</td>
                                <td class="text-center">
                                    <img src="{{ asset('/upload/images/banner/image_banner_' . $item->id . '.jpg') }}" alt="" width="100">
                                </td>
                                <td class="text-center"><?php if($item->status == 0) echo 'Không hoạt động'; else echo 'Hoạt động' ?></td>
                                <td class="text-center">{{ $item->created_time }}</td>
                                <td class="text-center">{{ $item->created_by_name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('cms.banner.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
                                    <a href="{{ route('cms.banner.delete', $item->id) }}" class="btn btn-danger" onclick="return confirm('Xóa bản ghi này?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
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
