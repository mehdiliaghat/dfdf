
@extends('operator.testBase')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">  مدیریت ترم </a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i>  لیست دانشجو </h1>
            <p> نظام جامع آموزش هماهنگ</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"> لیست دانشجوها </h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th> شماره دانشجویی</th>
                            <th> نام خانوادگی</th>
                            <th>نام</th>
                            <th>تصویر</th>
                            <th>ردیف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key=>$user)
                            <tr>
                                <td>
                                    <a class="btn btn-raised btn-primary btn-sm" href="{{route('selectTerm.show', $user->id)}}">مشاهده اطلاعات</a>
                                    <a class="btn btn-raised btn-primary btn-sm" href="{{route('selectTerm.create', $user->id)}}"> ثبت ترم</a>
                                </td>
                                <td>{{$user->post_id}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->first_name}}</td>
                                <td>@if ( $user->photo)
                                        <img src="{{ url('upload_files/users/' . $user->photo) }}" style="width:50px">
                                    @else
                                        <p>No image found</p>
                                    @endif</td>
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
