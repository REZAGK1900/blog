@extends('Layout.adminLayout')
@section('title')
    دیدگاه ها
@endsection

@section('pageTitle')
    مدیریت دیدگاه ها
@endsection

@section('content')

    <style>
        .user_name{
            font-size:14px;
            font-weight: bold;
        }
        .comments-list .media{
            border-bottom: 1px dotted #ccc;
        }
        .media-left img{
            width: 50px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>دیدگاه ها</h1>
                </div>
                <form action="" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p>فیلتر کردن کامنت ها <small> به زودی... </small></p>
                </form>
                <br> <br>
                <div class="comments-list">
                    <div class="media">
                        <p class="pull-right"><small>5 روز پیش</small></p>
                        <a class="media-left" href="#">
                            <img src="/img/avatar.png">
                        </a>
                        <div class="media-body">

                            <h4 class="media-heading user_name">مرتضی احمدی</h4>
                            <span>سایت خوبی دارید</span><br><br>
                            <a href=""><button class="btn btn-success">تایید کردن دیدگاه</button></a> <br><br>
                            <a href=""><button class="btn btn-primary">پاسخ</button></a>
                            <a href=""><button class="btn btn-danger">حذف</button></a>
                        </div>
                    </div>
                    <div class="media">
                        <p class="pull-right"><small>6 روز پیش</small></p>
                        <a class="media-left" href="#">
                            <img src="/img/avatar.png">
                        </a>
                        <div class="media-body">

                            <h4 class="media-heading user_name">سامان قدوس</h4>
                            <span>سایت خوبی دارید</span><br><br>
                            <a href=""><button class="btn btn-success">تایید کردن دیدگاه</button></a> <br><br>
                            <a href=""><button class="btn btn-primary">پاسخ</button></a>
                            <a href=""><button class="btn btn-danger">حذف</button></a>
                        </div>
                    </div>
                    <div class="media">
                        <p class="pull-right"><small>7 روز پیش</small></p>
                        <a class="media-left" href="#">
                            <img src="/img/avatar.png">
                        </a>
                        <div class="media-body">

                            <h4 class="media-heading user_name">حسین احدی</h4>
                            <span>سایت خوبی دارید</span><br><br>
                            <a href=""><button class="btn btn-success">تایید کردن دیدگاه</button></a> <br><br>
                            <a href=""><button class="btn btn-primary">پاسخ</button></a>
                            <a href=""><button class="btn btn-danger">حذف</button></a>
                        </div>
                    </div>
                    <div class="media">
                        <p class="pull-right"><small>8 روز پیش</small></p>
                        <a class="media-left" href="#">
                            <img src="/img/avatar.png">
                        </a>
                        <div class="media-body">

                            <h4 class="media-heading user_name">Baltej Singh</h4>
                            <span>سایت خوبی دارید</span><br><br>
                            <a href=""><button class="btn btn-success">تایید کردن دیدگاه</button></a> <br><br>
                            <a href=""><button class="btn btn-primary">پاسخ</button></a>
                            <a href=""><button class="btn btn-danger">حذف</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
