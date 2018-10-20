@extends('Layout.adminLayout')
@section('title')
    افزودن پست
@endsection
@section('pageTitle')
    افزودن پست
@endsection
@section('content')
    <script>
        $document.ready(function () {
            $('#editor').ckeditor({
                language: 'fa'
            });
        });
    </script>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('insertPost') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="title">عنوان</label>
            <input type="text" required class="form-control" id="title" name="title" placeholder="عنوان را وارد کنید">
        </div>
        <div class="form-group">
            <label for="title">اسلاگ</label>
            <input type="text" required class="form-control" id="slug" name="slug" placeholder="اسلاگ را وارد کنید">
        </div>
        <div class="form-group">
            <label for="category">دسته بندی ها</label>
            <select class="form-control" required name="category" id="category">
                @foreach($categories as $category)
                    <option value="{{ $category->ID }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">وضعیت:</label>
            <div class="col-sm-3">
                <select name="status" class="form-control valid" aria-invalid="false">
                    <option selected value="1">فعال</option>
                    <option value="0">غیر فعال</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="selectImage">انتخاب تصویر</label>
            <input type="file" name="image" class="form-control-file" id="selectImage">
        </div>

        <div class="box box-info collapsed-box">
            <div class="box-header">
                <h3 class="box-title">محتوا</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-plus"></i></button>
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                    <textarea dir="rtl" name="content" id="editor" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="tags">برچسب</label>
            <input type="text" required name="tags" class="form-control" id="tags" placeholder="برچسب را وارد کنید">
        </div>
        <div class="form-group">
            <label for="description">توضیحات پست</label>
            <input type="text" required name="description" class="form-control" id="description" placeholder="توضیحات را وارد کنید">
            <small>توضیحات بیشتر از 150 کاراکتر نباشید | توضیحات در سئو سایت تاثیر گذار است</small>
        </div>

        <input type="submit" class="btn btn-primary btn-lg btn-block" value="ذخیره اصلاعات">
    </form>

@endsection

