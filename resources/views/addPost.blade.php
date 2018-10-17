@extends('Layout.adminLayout')
@section('title')
    افزودن پست
@endsection
@section('pageTitle')
    افزودن پست
@endsection
@section('content')
    <script>
        window.onload=function(){
            $("#editor").ckeditor();
        };

    </script>

    <form action="{{ route('insertPost') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="title">عنوان</label>
            <input type="text" required class="form-control" id="title" name="" placeholder="عنوان را وارد کنید">
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
                <form>
                    <textarea dir="rtl" name="content" id="editor" cols="30" rows="10"></textarea>
                </form>
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

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->




@endsection

