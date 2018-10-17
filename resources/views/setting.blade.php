@extends('Layout.adminLayout')
@section('title')
    تنظیمات سایت
@endsection
@section('content')

    {{-- Show Alert --}}
    @if (Session::has('message'))
    <div class="alert alert-primary" role="alert">
        <p>
                {{ Session::get('message') }}
        </p>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    @foreach($settings as $setting)
    <div class="col-md-8 col-md-push-2">
        <form id="change-profile" action="{{ route('updateSetting' ) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{--FOR UPDATE RECORD--}}
            <input type="hidden" name="id" value="{{ $setting->ID }}">
            <div class="form-group">
                <label for="exampleInputEmail1">نام سایت:</label>
                <input value="{{ $setting->name }}" required  name="name" type="text" class="form-control">
                <span></span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان صفحه اصلی:</label>
                <input value="{{ $setting->title }}" required  name="title" type="text" class="form-control">
                <span></span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">متاتگ:</label>
                <textarea rows="7" required name="keywords" class="form-control">{{ $setting->keyword }}</textarea>
                <span></span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحات:</label>
                <textarea rows="7" required  name="description" class="form-control">{{ $setting->description }}</textarea>
                <small>توضیحات سایت نباید بیشتر از 150 کاراکتر باشد.</small>
                <span></span>
            </div>
            <div class="form-group">
                @if ($setting->status == 1)
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">وضعیت سایت :
                            <input type="checkbox" checked autocomplete="off"> فعال
                        </label>
                    </div>
                @else
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">وضعیت سایت :
                            <input type="checkbox" checked autocomplete="off"> غیر فعال
                        </label>
                    </div>
                @endif
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" name="submit" value="ذخیره اطلاعات">
                <span></span>
            </div>
            @endforeach
        </form>
@endsection
