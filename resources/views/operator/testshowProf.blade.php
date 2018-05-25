
@extends('operator.testBase')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">  اساتید </a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i>   اساتید   </h1>
            <p> نظام جامع آموزش هماهنگ</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"> لیست  اساتید </h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th> کد استاد</th>
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
                                    <form method="post" id="delete-form-{{$user->id}}" action="{{route('users.deleteOperator',$user->id)}}" style="display: none ;">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                    </form>
                                    <button onclick="if(confirm(' آیا می خواهید کاربر مورد نظر را حذف کنید؟')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$user->id}}').submit();
                                            }else{
                                            event.preventDefault();
                                            }" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    <a class="btn btn-raised btn-danger btn-sm" href="{{route('userEdit', $user->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
