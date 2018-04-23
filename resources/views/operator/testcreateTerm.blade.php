
@extends('layouts.testLayout')
@section('sidebar')
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"> محمد مهدی لیاقت زاده</p>
            <p class="app-sidebar__user-designation">  مسول سیستم</p>
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


    </ul>
@stop
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">  ثبت ترم </a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i>    ثبت ترم</h1>
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
                <form method="post" action="{{route('selectCourses.store')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                            <input type="hidden" id="" name="user_id" value="{{$user_id}}">
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">واحدگذرانده:</label>
                                <input type="text" style="direction: rtl;"  name="unit_spent"  class="form-control" id="inputWarning" required  {{old('phone')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> واحدنیم سال:</label>
                                <input type="text" style="direction: rtl;" name="unit_term"  class="form-control" id="inputError" required  {{old('edu')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> نیم سال:</label>
                                <input type="text" style="direction: rtl;"  name="term"   class="form-control" id="inputError" required  {{old('national_id')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">   سال ورود:</label>
                                <input type="text" style="direction: rtl;" name="arrival"   class="form-control" id="inputWarning"   {{old('date_birth')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> ترم:</label>
                                <input type="text" style="direction: rtl;" name="num_term"  class="form-control" id="inputSuccess" required  {{old(' first_name')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> معدل کل:</label>
                                <input type="text" style="direction: rtl;" name="ave"   class="form-control" id="inputError" required  {{old(' last_name')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> معدل نیم سال:</label>
                                <input type="text" style="direction: rtl;" name="ave_term"  class="form-control" id="inputSuccess" required  {{old('password')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">واحد اخذ شده:</label>
                                <input type="text" style="direction: rtl;" name="unit_getting"  class="form-control" id="inputError" required  {{old('email')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group " style="direction: rtl;">
                                <label class="pull-right" for="title" style="direction: rtl;">نوع کاربر:</label>
                                <select class="form-control"  name="state_term" >
                                    <option value="normal"> عادی</option>
                                    <option value="Conditional">مشروط</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group " style="direction: rtl;">
                                <label class="pull-right" for="title" style="direction: rtl;">نوع کاربر:</label>
                                <select class="form-control"  name="nighday" >
                                    <option value="day"> روزانه</option>
                                    <option value="night">شبانه</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group " style="direction: rtl;">
                                <label class="pull-right" for="title" style="direction: rtl;">نوع کاربر:</label>
                                <select class="form-control" name="state" >
                                    <option value="Study"> درحال تحصیل</option>
                                    <option value="vacation">مرخصی</option>
                                    <option value="expulsion"> اخراج</option>
                                    <option value="Cancel">انصراف</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop
