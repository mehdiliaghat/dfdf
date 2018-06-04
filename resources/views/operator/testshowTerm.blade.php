
@extends('operator.testBase')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">  مدیریت ترم </a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i>   اطلاعات ترم </h1>
            <p> نظام جامع آموزش هماهنگ</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">  اطلاعات ترم </h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th> معدل کل</th>
                            <th> معدل ترم</th>
                            <th> واحد اخذ شده</th>
                            <th> واحدگذرانده</th>
                            <th> واحد اخذ شده ترم</th>
                            <th> وضعیت ترم</th>
                            <th> وضعیت تحصیلی </th>
                            <th> نیم سال</th>
                            <th>سال ورود</th>
                            <th>نوع پذیرش</th>
                            <th> ترم</th>
                            <th>ردیف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $key=>$student)
                            <tr>
                                <td>

                                    <form method="post" id="delete-form-{{$student->id}}" action="{{route('selectTerm.delete',$student->id)}}" style="display: none ;">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                    </form>
                                    <button onclick="if(confirm(' آیا می خواهید کاربر مورد نظر را حذف کنید؟')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$student->id}}').submit();
                                            }else{
                                            event.preventDefault();
                                            }" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    <a class="btn btn-raised btn-danger btn-sm" href="{{route('selectTerm.edit', $student->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td>{{$student->ave}}</td>
                                <td>{{$student->ave_term}}</td>
                                <td>{{$student->unit_getting}}</td>
                                <td>{{$student->unit_spent}}</td>
                                <td>{{$student->unit_term}}</td>
                                <td>{{$student->state_term}}</td>
                                <td>{{$student->state}}</td>
                                <td>{{$student->term}}</td>
                                <td>{{$student->arrival}}</td>
                                <td>{{$student->nighday}}</td>
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
