@extends('operator.base')
@section('page-wrapper')
    <br>
    <div class="page-wraper">
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <div class="navbar-right col-sm-10">
                        <form action="{{route('listClass.getPost_id')}}" class="navbar-form row" method="post" role="form">
                            {!! csrf_field() !!}
                            <div class="col-sm-3">
                                <div class="form-group">

                                    <input class="form-control" name="" placeholder="نام خانوادگی" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">

                                    <input class="form-control" name="term" placeholder="ترم" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3 ">
                                <div class="form-group">

                                    <input class="form-control" name="post_id" placeholder="کد استاد">
                                </div>

                            </div>
                            <div class="col-sm-1 col-sm-offset-1">
                                <button class="btn btn-success  btn-group-lg" type="submit">جستوجو</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <table class="table-hover" style="text-align: left">
                    <thead >
                    <tr >
                        <th></th>
                        <th>مرجع</th>
                        <th> پیش نیاز</th>
                        <th> همنیاز</th>
                        <th> مکان وزمان کلاس</th>
                        <th>  تاریخ امتحان</th>
                        <th>ترم</th>
                        <th> ظرفیت</th>
                        <th>استاد</th>
                        <th>نوع</th>
                        <th> واحد</th>
                        <th>گروه</th>
                        <th>کد</th>
                        <th> نام درس</th>
                        <th>ردیف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($assignedcourses as $key=>$assignedcourse)
                        <tr>
                            <td>
                                <a class="btn btn-raised btn-danger btn-sm" href="{{route('listClass.Students' , $assignedcourse->id)}}"><i class="fal fa-list" aria-hidden="true"></i></a>
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

@stop
