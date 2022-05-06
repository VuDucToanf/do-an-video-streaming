@extends('cms.layouts.default')
@section('content-main')
    <section class="wrapper">
        <a href="{{ route('user.index') }}" class="btn btn-info">Quay lại</a>
        <div class="form-w3layouts">
            <section class="panel">
                <header class="panel-heading">
                    Thông tin chi tiết User
                </header>
                <div class="panel-body">
                    <form class="form-horizontal bucket-form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Username</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['username'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Email</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['email'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Trạng thái</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                @if($data['status'] == 1) Hoạt động @else Không hoạt động @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Tên đầy đủ</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['fullname'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Điện thoại</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['mobile'] }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Ngày tạo</label>
                            <div class="col-sm-6 control-label" style="text-align: left">
                                {{ $data['created_at'] }}
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
@endsection
