@extends('cms.layouts.default')
@section('content-main')

    <section class="wrapper">
        <div class="form-w3layouts">
            <section class="panel">
                <header class="panel-heading">
                    Chỉnh sửa video
                </header>
                <div class="panel-body">
                    <form class="form-horizontal bucket-form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tên phim</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" value="<?php echo isset($data['name'])?$data['name']:'';?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Brief</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="brief" value="<?php echo isset($data['brief'])?$data['brief']:'';?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mô tả</label>
                            <div class="col-sm-6">
                                <textarea name="description"><?php echo isset($data['description'])?$data['description']:'';?></textarea>
                                <script type="text/javascript">CKEDITOR.replace('description');</script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ảnh thumb</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="file" name="thumb_version" accept="image/jpg" onchange="loadFile(event)">
                                <img src="
                                        <?php
                                            if($data['thumb_version'] == 1 && isset($data['brief']))
                                                echo asset('/upload/images/video/image_video_' . $data['brief'] . '.jpg');
                                        ?>
                                    " id="output" style="margin: 5px; max-width: 400px;"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Upload video</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="file" name="file_upload" accept="video/mp4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Thể loại</label>
                            <div class="col-sm-6">
                                @include('cms.elements.form.choose_multi_item_category',['name'=>'categorys', 'text_hint' => 'Chọn thể loại', 'datas'=> $categories, 'selected'=>isset($categories_id_selected)?$categories_id_selected:[]])
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
                            <label class="col-sm-3 control-label">Thời gian phát hành</label>
                            <div class="col-sm-6">
                                <input type="datetime-local" class="form-control" name="published_time" value="<?php echo isset($data['published_time'])?$data['published_time']:'';?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Đã hoàn thành</label>
                            <div class="col-sm-6">
                                <div class="radio">
                                    <label><input type="radio" name="is_full" value="1" @if($data['is_full'] == 1) checked @endif> Đã hoàn thành</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="is_full" value="0" @if($data['is_full'] == 0) checked @endif> Chưa hoàn thành</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phim hot</label>
                            <div class="col-sm-6">
                                <input type="checkbox" name="is_hot" @if($data['is_hot'] == 1) checked @endif>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Bản quyền</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="copyright" value="<?php echo isset($data['copyright'])?$data['copyright']:'';?>">
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

