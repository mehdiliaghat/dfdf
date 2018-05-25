
@extends('operator.testBase')
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
