@extends('operator.base')
@section('page-wrapper')
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <table class="table-hover" style="text-align: left">
                    <thead >
                    <tr >
                        <th>نام خانوادگی</th>
                        <th>نام</th>
                        <th>کد</th>
                        <th> تصویر</th>
                        <th>ردیف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key=>$user)
                        <tr>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->post_id}}</td>
                            <td>@if ( $user->photo)
                                    <img src="upload_files/users/.{{$user->photo}}" style="width:50px">
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
@stop