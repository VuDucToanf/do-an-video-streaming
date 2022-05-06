@extends('cms.layouts.default')
@section('content-main')
    <section class="wrapper">
        <a href="{{ route('cms.video') }}" class="btn btn-info" style="margin-bottom: 20px;">Quay lại</a>
        <div class="form-w3layouts">
            <section class="panel">
                <header class="panel-heading">
                    Thông tin chi tiết Video
                </header>
                <div class="panel-body">
                    <form class="form-horizontal bucket-form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tên</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['name'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Brief</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['brief'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Trạng thái</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                @if($data['status'] == 1) Hoạt động @else Không hoạt động @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mô tả</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {!! $data['description'] !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Lượt xem</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['view'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ngày tạo</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['created_time'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Người tạo</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['created_by_name'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ngày phát hành</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['published_time'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Hoàn thành</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                @if($data['is_full'] == 1) Hoàn thành @else Chưa hoàn thành @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Bản quyền</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['copyright'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Số like</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['like'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Video gốc</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ isset($parent->name) ? $parent->name : "Không có" }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tập</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                @if($data['seri_order'] == 0) Video gốc @else {{ $data['seri_order'] }} @endif
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
@endsection
