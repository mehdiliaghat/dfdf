
@extends('operator.testBase')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">  ثبت محتوا</a></li>
        </ul>

        <div>
            <h1><i class="fa fa-home"></i> ثبت محتوا</h1>
            <p> نظام جامع آموزش هماهنگ</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('content.store')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">قیمت محتوا:</label>
                                <input type="text" style="direction: rtl;" name="price"   class="form-control" id="inputError" required  {{old('edu')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> نام محتوا</label>
                                <input type="text" style="direction: rtl;" name="contentName"   class="form-control" id="inputWarning" required  {{old('phone')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group ">
                                <label class="pull-right" for="title" style="direction: rtl;">نوع محتوا:</label>
                                <select class="form-control"  name="type_id" style="direction: rtl;">
                                    <option value="1"> کتاب</option>
                                    <option value="4">  اینفوگرافی</option>
                                    <option value="2">  ویدئو</option>
                                    <option value="3">  پاورپوینت</option>
                                    <option value="5"> صوت</option>
                                    <option value="6">  کد</option>
                                    <option value="7">   نرم افزار</option>
                                    <option value="8">  تقویم</option>
                                    <option value="9">  فلش کارت</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group ">
                                <label class="pull-right" for="title" style="direction: rtl;">مخاطب محتوا:</label>
                                <select class="form-control"  name="user" style="direction: rtl;">
                                    <option value="student"> دانشجو</option>
                                    <option value="prof">  استاد</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group " style="direction: rtl;">
                                <label class="pull-right" for="title" style="direction: rtl;">نوع دوره </label>
                                <select class="form-control" name="term" >
                                    <option value="short"> فناوری و بازار</option>
                                    <option value="medium">تکنیک</option>
                                    <option value="long">  تکنولوژی</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group  ">
                                <label class="pull-right" for="title" style="direction: rtl;">فایل:</label>
                                <input class="form-control"  name="link" type="file" style="direction: rtl;">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">  شناسه درس:</label>
                                <input type="text" style="direction: rtl;" name="assignedcourse_id"   class="form-control" id="inputWarning" required  {{old('phone')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="tile-footer">
                    </div>
                    <button class="btn btn-primary" type="submit"> ثبت محتوا</button>
                </form>
            </div>
        </div>
    </div>

@stop
