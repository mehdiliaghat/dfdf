
@extends('layouts.testLayout')
@section('sidebar')
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"> محمد مهدی لیاقت زاده</p>
            <p class="app-sidebar__user-designation"> مسول سیستم</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">خانه</span></a></li>

        <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">  کاربران </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('users.create')}}"><i class="icon fa fa-circle-o"></i>  ثبت کاربر</a></li>
                <li><a class="treeview-item" href="{{route('users.indexprof')}}"><i class="icon fa fa-circle-o"></i> استاد</a></li>
                <li><a class="treeview-item" href="{{route('users.indexstudent')}}"><i class="icon fa fa-circle-o"></i> دانشجو</a></li>
                <li><a class="treeview-item" href="{{route('users.indexemployee')}}"><i class="icon fa fa-circle-o"></i> مدیر آموزش</a></li>
                <li><a class="treeview-item" href="{{route('users.indexmanager')}}"><i class="icon fa fa-circle-o"></i> مدیرگروه</a></li>
                <li><a class="treeview-item" href="{{route('users.indexoperator')}}"><i class="icon fa fa-circle-o"></i> مسول سیستم</a></li>

            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label"> درس</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('assignedcourses.create')}}"><i class="icon fa fa-circle-o"></i>   تخصیص درس</a></li>
                <li><a class="treeview-item" href="{{route('assignedcourses.index')}}"><i class="icon fa fa-circle-o"></i>  مشاهده درس تخصیص داده  </a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> انتخاب واحد</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('selectCourseIndex')}}"><i class="icon fa fa-circle-o"></i>  انتخاب واحد</a></li>
                <li><a class="treeview-item" href="{{route('assignedcourses.index')}}"><i class="icon fa fa-circle-o"></i> تاییدیه انتخاب واحد</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">   ترم</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('selectCourses.index')}}"><i class="icon fa fa-circle-o"></i> ثبت ترم</a></li>
                <li><a class="treeview-item" href="{{route('selectCourses.indexShow')}}"><i class="icon fa fa-circle-o"></i>  مشاهده ترم</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">  کلاس</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('listClass.index')}}"><i class="icon fa fa-circle-o"></i>  لیست کلاس ها</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> محتوا</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('listClass.index')}}"><i class="icon fa fa-circle-o"></i>  ثبت مختوا</a></li>
                <li><a class="treeview-item" href="{{route('content.show')}}"><i class="icon fa fa-circle-o"></i>  نمایش محتوا</a></li>
            </ul>
        </li>


    </ul>
@stop
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
                                <input type="text" style="direction: rtl;" name="course_id"   class="form-control" id="inputWarning" required  {{old('phone')}}>
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
