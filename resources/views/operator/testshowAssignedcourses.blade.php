
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
            <li class="breadcrumb-item"><a href="#">  مدیریت دروس </a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i>   مدیریت دروس </h1>
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
                            <th>مرجع</th>
                            <th>مکان وزمان</th>
                            <th> پیشنیاز</th>
                            <th>همنیاز </th>
                            <th>تاریخ امتحان</th>
                            <th>ترم</th>
                            <th>ظرفیت</th>
                            <th>استاد</th>
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
                                    <form method="post" id="delete-form-{{$assignedcourse->id}}" action="{{route('assignedcourses.delete',$assignedcourse->id)}}" style="display: none ;">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                    </form>
                                    <button onclick="if(confirm(' آیا می خواهید کاربر مورد نظر را حذف کنید؟')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$assignedcourse->id}}').submit();
                                            }else{
                                            event.preventDefault();
                                            }" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    <a class="btn btn-raised btn-danger btn-sm" href="{{route('assignedcourses.edit',$assignedcourse->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td>{{$assignedcourse->pdf_path}}</td>
                                <td>{{$assignedcourse->prerequisite}}</td>
                                <td>{{$assignedcourse->need}}</td>
                                <td>
                                    {{$assignedcourse->day}}
                                    {{$assignedcourse->location}}
                                    {{$assignedcourse->time}}
                                </td>
                                <td>{{$assignedcourse->date}}</td>
                                <td>{{$assignedcourse->term}}</td>
                                <td>{{$assignedcourse->capacity}}</td>
                                <td>{{$assignedcourse->prof}}</td>
                                <td>{{$assignedcourse->type}}</td>
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
