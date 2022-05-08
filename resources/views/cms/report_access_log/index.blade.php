@extends('cms.layouts.default')
@section('content-main')
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thống kê lượng truy cập
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
                            <th class="text-center">Ngày</th>
                            <th class="text-center">Tên film</th>
                            <th class="text-center">Lượt xem trong ngày</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                        <tr>
                            <form action="{{ route('cms.report_access_log') }}" method="get" id="search_form">
                                <td class="text-center">
                                    <input name="date" type="date" value="">
                                </td>
                                <td class="text-center">
                                </td>
                                <td></td>
                                <td class="text-center">
                                    <button type="submit" class="btn btn-info">Tìm kiếm</button>
                                </td>
                            </form>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $total = 0 ?>
                            @foreach($data_show as $key => $value)
                                @foreach($value as $k => $v)
                                    <?php $total += $v[array_key_first($v)];?>
                                    <tr>
                                        <td class="text-center">{!! $key !!}</td>
                                        <td class="text-center">{{ array_key_first($v) }}</td>
                                        <td class="text-center">{{ $v[array_key_first($v)] }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('cms.access_log', $v['video_id']) }}" class="btn btn-primary"><i class="fa fa-sticky-note" aria-hidden="true"></i> Chi tiết</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                            <tr>
                                <td></td>
                                <td class="text-center">Tổng số lượt xem</td>
                                <td class="text-center">{!! $total !!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
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
