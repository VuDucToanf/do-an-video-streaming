@extends('cms.layouts.default')
@section('content-main')

    <section class="wrapper">
        <a href="{{ route('cms.actor') }}" class="btn btn-info" style="margin-bottom: 20px;">Quay lại</a>
        <div class="form-w3layouts">
            <section class="panel">
                <header class="panel-heading">
                    Chỉnh sửa diễn viên
                </header>
                <div class="panel-body">
                    <form class="form-horizontal bucket-form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tên diễn viên</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" value="{{ $data['name'] }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">slug</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="slug" value="{{ $data['slug'] }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Trạng thái hoạt động</label>
                            <div class="col-sm-6">
                                <div class="radio">
                                    <label><input type="radio" name="status" value="1"@if($data['status'] == 1) checked @endif> Hoạt động</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="status" value="0"@if($data['status'] == 0) checked @endif> Không hoạt động</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6 col-sm-offset-2">
                                <button class="btn btn-primary btn-sm" type="submit">
                                    <i class="fa fa-check"></i>
                                    Chỉnh sửa
                                </button>
                                <button class="btn btn-white btn-sm" type="reset">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
@endsection
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>

