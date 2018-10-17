@extends('Layout.adminLayout')
@section('title')
    آپلود فایل
@endsection
@section('pageTitle')
    آپلود فایل
@endsection
@section('content')

    @if (Session::has('message'))
      {{ Session::get('message') }}
    @endif

    @if($errors->any())
    <div class="alert alert-primary" role="alert">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
    <form action="{{ route('fileUpload') }}" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="image">انتخاب فایل</label>
            <input type="file" required class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="submit" value="آپلود عکس">
        </div>
    </form>

    @if (isset($_POST['submit']))
        <img src="{{ $lastImage->filePath }}" alt="">
    @endif

@endsection
