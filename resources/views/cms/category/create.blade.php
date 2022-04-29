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
                    <label for="" class="col-sm-3 control-label">Trạng thái</label>
                    <div class="col-sm-6">
                        <input type="radio" value="1" name="status" checked> Hoạt động
                        <br>
                        <input type="radio" value="0" name="status"> Không hoạt động
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
