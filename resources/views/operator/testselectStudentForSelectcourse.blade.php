
@extends('operator.testBase')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#"> ورود به صفحه انتخاب واحد </a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i>   ورود به صفحه انتخاب واحد</h1>
            <p> نظام جامع آموزش هماهنگ</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">  انتخاب دانشجو </h3>
                <form method="post" action="{{route('selectCourse.post_id')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-lg-3" >
                            <div class="form-group">
                                <input type="text" style="direction: rtl;" name="phone" placeholder="شماره دانشجویی"  class="form-control" id="inputWarning" required  {{old('phone')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="tile-footer">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop
