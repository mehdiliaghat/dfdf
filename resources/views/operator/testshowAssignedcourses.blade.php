
@extends('operator.testBase')
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
