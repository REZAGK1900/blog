@extends('Layout.admin')
@section('title')
ویرایش پست
@endsection
@section('content')

    @if (Session::has('message'))
        <div class="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="{{ route('update_post', ['id' => $post->ID]) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="slug" value="{{ $post->slug }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1"></label>
            <select class="form-control" id="exampleFormControlSelect1" name="category">
                @foreach($categories as $category)
                <option value="{{ $category->ID }}"
                @if($post->category_id == $category->ID)
                    selected
                @endif
                >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">تگ ها</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
                @foreach($tags as $tag)
                    <option value="{{ $tag->title }}" name="tag">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">محتوا</label>
            <textarea class="form-control" name="article" rows="3">{{ $post->content }}</textarea>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="ذخیره اصلاعات">
        </div>
    </form>

@stop
