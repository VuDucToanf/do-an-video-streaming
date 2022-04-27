@extends('cms.layouts.default')
@section('content-main')

<section class="wrapper">
    <div class="form-w3layouts">
        <section class="panel">
        <header class="panel-heading">
            Tạo mới thể loại
        </header>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">Tên thể loại</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Slug</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="slug">
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
                        <input class="form-control" type="file" name="thumb_version" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Chọn thể loại cha</label>
                    <div class="col-lg-6">
                        <select name="parent_id" class="form-control input-lg m-bot15">
                            @if(!empty($categories))
                                @foreach($categories as $d)
                                    <option @if(isset($data['parent_id']) && $d->id == $data['parent_id']) selected @endif value="{!! $d->id !!}">{!! $d->name !!}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6 col-sm-offset-2">
                        <button class="btn btn-primary btn-sm" type="submit">
                            <i class="fa fa-check"></i>
                                Tạo mới
                        </button>
                        <button class="btn btn-white btn-sm" type="reset">Làm lại</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </div>
</section>
@endsection
