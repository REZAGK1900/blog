@extends('Layout.admin')
@section('title')
    داشبورد
@endsection
@section('content')



    @if(Session::has('message'))
        <div class="alert">{{ Session::get('message') }}</div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ردیف</th>
            <th scope="col">عنوان</th>
            <th scope="col">نویسنده</th>
            <th scope="col">اکشن</th>
        </tr>
        </thead>
        <tbody>

            @foreach($posts as $post)
                <tr>
                    <td scope="row">{{ $post->ID }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->auther }}</td>
                    <td><a href="{{ route('delete_post',['id' => $post->ID]) }}" onclick="confirm(Are You sure?)" >حذف</a> &nbsp; <a href="{{ route('show_post', ['id' => $post->ID]) }}">ویرایش</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
