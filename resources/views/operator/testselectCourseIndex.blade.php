
@extends('operator.testBase')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">  انتخاب واحد</a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i> انتخاب واحد   </h1>
            <p> نظام جامع آموزش هماهنگ</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"> فرم انتخاب واحد</h3>
                <div class="tile-body">
                    <form class="row" method="post" action="{{route('selectCourse.store')}}" enctype="multipart/form-data"  >
                        {!! csrf_field() !!}
                        <div class="form-group col-md-4 align-self-end">
                            <button class="btn btn-primary" type="submit" >  ثبت درس</button>
                        </div>
                        <div class="form-group">
                            <input type="hidden" id="" name="student_id" value="{{$student_id}}">
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label"> کد درس</label>
                            <input class="form-control" name="course_id" type="text" >
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">گروه درس</label>
                            <input class="form-control"  name="course_gp" type="text" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <center>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title"> دروس انتخابی</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th> گروه درس</th>
                            <th> کد درس</th>
                            <th> نام درس</th>
                            <th> ردیف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($assignedcourses as$key=>$assignedcourse)
                            <tr>
                                <td>
                                    <form method="post" id="delete-form-{{$assignedcourse->id}}" action="{{route('selectCourse.delete'
                                    ,[$assignedcourse->id ,$student_id])}}" style="display: none ;">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                    </form>
                                    <button onclick="if(confirm(' آیا می خواهید کاربر مورد نظر را حذف کنید؟')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$assignedcourse->id}}').submit();
                                            }else{
                                            event.preventDefault();
                                            }" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>

                                </td>
                                <td>{{$assignedcourse->course_gp}}</td>
                                <td>{{$assignedcourse->course_id}}</td>
                                <td>{{$assignedcourse->name }}</td>
                                <td>{{ ($key+1) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <table >
                        <thead>
                        <tr>
                            <strong > جمع واحد ها: </strong>{{$unit_count}}
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </center>
        </div>

    </div>







@stop
