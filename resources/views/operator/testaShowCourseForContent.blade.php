
@extends('layouts.testLayout')
@section('sidebar')
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"> محمد مهدی لیاقت زاده</p>
            <p class="app-sidebar__user-designation"> مسسول سیستم</p>
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
            <li class="breadcrumb-item"><a href="#"> مشاهده محتوا </a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i>   مشاهده محتوا  </h1>
            <p> نظام جامع آموزش هماهنگ</p>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"> لیست دروس </h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>نوع</th>
                            <th>  واحد</th>
                            <th>  گروه</th>
                            <th>کد درس</th>
                            <th>نام درس</th>
                            <th>ردیف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($assignedcourses as $key=>$assignedcourse)
                            <tr>
                                <td>
                                    <a class="btn btn-raised btn-danger btn-sm" href="{{route('content.showContentTitle',$assignedcourse->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>

                                <td> @if($assignedcourse->type=='action')  عملی @else  تئوری  @endif</td>
                                <td>{{$assignedcourse->unit}}</td>
                                <td>{{$assignedcourse->course_gp}}</td>
                                <td>{{$assignedcourse->course_id}}</td>
                                <td>{{$assignedcourse->name}}</td>
                                <td>{{ ($key+1) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
