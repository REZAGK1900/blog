@extends('Layout.adminLayout')
@section('title')
    نمایش تمام پیش نویس
@endsection
@section('pageTitle')
    مدیریت پیش نویس
@endsection
@section('content')

    <br><br><br>
    <div class="container">
        <div class="row">
            <a href="{{ route('createPost') }}" class="btn btn-primary">افزودن پست جدید</a>
            <a href="{{ route('draftPost') }}" class="btn btn-default">پیش نویس</a>
        </div>
    </div> <br>
    <!-- /.row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">برای ویرایش پست ها از پنل زیر اقدام کنید</h3>
                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="جستجو">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>شماره</th>
                            <th>عنوان</th>
                            <th>تاریخ</th>
                            <th>وضعیت</th>
                            <th>ایجاد کننده</th>
                            <th>دسته بندی</th>
                            <th>اکشن ها</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>اعزام دانشجو به آلمان</td>
                            <td>۱۶ مرداد ۱۳۹۶</td>
                            <td><span class="label label-danger">غیر فعال</span></td>
                            <td>رضا</td>
                            <td class="btn btn-default">پذیرش تحصیلی</td>
                            <td><a href="" class="btn btn-danger">حذف</a>&nbsp;<a href="" class="btn btn-primary">ویرایش</a>&nbsp;<a href="" class="btn btn-default">وضعیت</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>اعزام دانشجو به آلمان</td>
                            <td>۱۶ مرداد ۱۳۹۶</td>
                            <td><span class="label label-success">فعال</span></td>
                            <td>رضا</td>
                            <td class="btn btn-default">پذیرش تحصیلی</td>
                            <td><a href="" class="btn btn-danger">حذف</a>&nbsp;<a href="" class="btn btn-primary">ویرایش</a>&nbsp;<a href="" class="btn btn-default">وضعیت</a></td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
