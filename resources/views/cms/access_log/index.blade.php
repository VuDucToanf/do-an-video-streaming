@extends('cms.layouts.default')
@section('content-main')
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông tin chi tiết truy cập xem phim
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
                            <th class="text-center">Tên user</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td class="text-center">{{ $item->log_time }}</td>
                                <td class="text-center">{{ $name }}</td>
                                <td class="text-center">
                                    <?php
                                        $user = \App\Models\User::query()->select('username')->where('id', $item->user_id)->first();
                                        echo $user->username;
                                    ?>
                                </td>
                            </tr>
                        @endforeach
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
