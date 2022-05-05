@extends('cms.layouts.default')
@section('content-main')

    <section class="wrapper">
        <a href="btn btn-info">Quay lại</a>
        <div class="form-w3layouts">
            <section class="panel">
                <header class="panel-heading">
                    Tạo mới video
                </header>
                <div class="panel-body">
                    <form class="form-horizontal bucket-form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tên phim</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Brief</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="brief">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mô tả</label>
                            <div class="col-sm-6">
                                <textarea name="description"></textarea>
                                <script type="text/javascript">CKEDITOR.replace('description');</script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ảnh thumb</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="file" name="thumb_version" accept="image/jpg" onchange="loadFile(event)">
                                <img id="output" style="margin: 5px; max-width: 400px"/>
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
                                    <label><input type="radio" name="status" value="1"> Hoạt động</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="status" value="0"> Không hoạt động</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Thời gian phát hành</label>
                            <div class="col-sm-6">
                                <input type="datetime-local" class="form-control" name="published_time">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Đã hoàn thành</label>
                            <div class="col-sm-6">
                                <div class="radio">
                                    <label><input type="radio" name="is_full" value="1"> Đã hoàn thành</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="is_full" value="0"> Chưa hoàn thành</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phim hot</label>
                            <div class="col-sm-6">
                                <input type="checkbox" name="is_hot">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Bản quyền</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="copyright">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phim cha</label>
                            <div class="col-sm-6">
                                <select class="itemName form-control" name="parent_id">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tập trong seri</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="seri">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6 col-sm-offset-2">
                                <button class="btn btn-primary btn-sm" type="submit">
                                    <i class="fa fa-check"></i>
                                    Tạo mới
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

