
@extends('operator.testBase')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-edit fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">ویرایش درس</a></li>
        </ul>

        <div>
            <h1><i class="fa fa-edit"></i>ویرایش درس</h1>
            <p> نظام جامع آموزش هماهنگ</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('assignedCoursesUpdate',$assignedcourse->id)}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">نام درس:</label>
                                <input value="{{ $assignedcourse->name}}" type="text" style="direction: rtl;"  name="name"  class="form-control" id="inputWarning" required  {{old('phone')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">  کددرس:</label>
                                <input value="{{ $assignedcourse->course_id}}" type="text" style="direction: rtl;"  name="course_id"   class="form-control" id="inputError" required  {{old('edu')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">  گروه:</label>
                                <input  value="{{ $assignedcourse->course_gp}}" type="text" style="direction: rtl;"   name="course_gp"  class="form-control" id="inputError" required  {{old('national_id')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">    واحد:</label>
                                <input value="{{ $assignedcourse->unit}}" type="text" style="direction: rtl;"  name="unit"   class="form-control" id="inputWarning"   {{old('date_birth')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> نام استاد:</label>
                                <input value="{{ $assignedcourse->prof}}" type="text" style="direction: rtl;"  name="prof" class="form-control" id="inputSuccess" required  {{old(' first_name')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">  کد استاد:</label>
                                <input value="{{ $assignedcourse->post_id}}" type="text" style="direction: rtl;" name="post_id"   class="form-control" id="inputError" required  {{old(' last_name')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">  ظرفیت:</label>
                                <input value="{{ $assignedcourse->capacity}}" type="text" style="direction: rtl;" name="capacity"   class="form-control" id="inputSuccess" required  {{old('password')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> ترم:</label>
                                <input value="{{ $assignedcourse->term}}" type="text" style="direction: rtl;" name="term"   class="form-control" id="inputError" required  {{old('email')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> تاریخ امتحان:</label>
                                <input value="{{ $assignedcourse->date}}" type="text" style="direction: rtl;" name="date"  class="form-control" id="inputSuccess" required  {{old('password')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> مکان برگذاری کلاس:</label>
                                <input value="{{ $assignedcourse->location}}" type="text" style="direction: rtl;" name="location"   class="form-control" id="inputError" required  {{old('email')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> زمان برگذاری کلاس:</label>
                                <input value="{{ $assignedcourse->time}}" type="text" style="direction: rtl;" name="time"  class="form-control" id="inputSuccess" required  {{old('password')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> روز برگذاری کلاس:</label>
                                <input value="{{ $assignedcourse->day}}" type="text" style="direction: rtl;" name="day"  class="form-control" id="inputError" required  {{old('email')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">  همنیاز:</label>
                                <input value="{{ $assignedcourse->need}}" type="text" style="direction: rtl;" name="need"  class="form-control" id="inputSuccess" required  {{old('password')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> پیش نیاز:</label>
                                <input value="{{ $assignedcourse->prerequisite}}" type="text" style="direction: rtl;" name="prerequisite"  class="form-control" id="inputError" required  {{old('email')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group " style="direction: rtl;">
                                <label class="pull-right" for="title" style="direction: rtl;">نوع درس:</label>
                                <select class="form-control" name="type" >
                                    <option value="action"  @if($assignedcourse->type=='action') selected @endif>  عملی</option>
                                    <option value="theory" @if($assignedcourse->type=='theory') selected @endif>تئوری</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group " style="direction: rtl;">
                                <label class="pull-right" for="title" style="direction: rtl;">فایل کتاب:</label>
                                <input value="{{ $assignedcourse->pdf_path}}" class="form-control"  name="pdf_path" type="file" style="direction: rtl;">
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

@stop
