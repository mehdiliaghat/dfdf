
@extends('operator.testBase')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">   انتخاب واحد </a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i>   انتخاب واحد </h1>
            <p> نظام جامع آموزش هماهنگ</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">  انتخاب واحد </h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>

                            <th> وضعیت ترم</th>
                            <th> وضعیت تحصیلی </th>
                            <th> نیم سال</th>
                            <th> ترم</th>
                            <th>ردیف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $key=>$student)
                            <tr>
                                <td>
                                    <a class="btn btn-raised btn-primary btn-sm" href="{{route('selectCourse.term_id', $student->id)}}"> انتخاب واحد</a>
                                </td>

                                <td>{{$student->state_term}}</td>
                                <td>{{$student->state}}</td>
                                <td>{{$student->term}}</td>
                                <td>{{$student->num_term }}</td>
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
