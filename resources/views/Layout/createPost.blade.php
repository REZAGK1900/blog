@extends('Layout.admin')
@section('title')
    افزودن پست
@endsection
@section('content')



    <form action="{{ route('create_post') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="عنوان پست">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">اسلاگ</label>
            <input type="text" class="form-control" name="slug" placeholder="اسلاگ پست را وارد کنید">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">دسته بندی ها</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category">
                @foreach($categorie as $category)
                <option value="{{ $category->ID }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">محتوا را وارد کنید</label>
            <textarea class="form-control" name="article" rows="3" placeholder="محتوا را وارد کنید"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">تگ ها را وارد کنید</label>
            <textarea name="tags" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="افزودن پست">
        </div>
    </form>

@endsection
