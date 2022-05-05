@extends('cms.layouts.default')
@section('content-main')

    <section class="wrapper">
        <a href="btn btn-info">Quay lại</a>
        <div class="form-w3layouts">
            <section class="panel">
                <header class="panel-heading">
                    Chỉnh sửa banner
                </header>
                <div class="panel-body">
                    <form class="form-horizontal bucket-form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ảnh banner</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="file" name="thumb_version" accept="image/jpg" onchange="loadFile(event)">
                                <img src="
                                        <?php
                                if($data['thumb_version'] == 1)
                                    echo asset('/upload/images/banner/image_banner_' . $data['id'] . '.jpg');
                                ?>
                                    " id="output" style="margin: 5px; max-width: 400px;"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Trạng thái hoạt động</label>
                            <div class="col-sm-6">
                                <div class="radio">
                                    <label><input type="radio" name="status" value="1" @if($data['status'] == 1) checked @endif> Hoạt động</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="status" value="0" @if($data['status'] == 0) checked @endif> Không hoạt động</label>
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
