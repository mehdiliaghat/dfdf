
@extends('operator.testBase')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">ویرایش اطلاعات کاربر  </a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i>   ویرایش اطلاعات کاربر </h1>
            <p> نظام جامع آموزش هماهنگ</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"> فرم ویرایش</h3>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('userUpdate',$user->id)}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">تلفن:</label>
                                <input type="text" value="{{$user->phone}}" style="direction: rtl;" name="phone"   class="form-control" id="inputWarning" required  {{old('phone')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">تحصیلات:</label>
                                <input type="text" value="{{$user->edu}}" style="direction: rtl;" name="edu"   class="form-control" id="inputError" required  {{old('edu')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">کدملی:</label>
                                <input type="text" value="{{$user->national_id}}" style="direction: rtl;"  name="national_id"   class="form-control" id="inputError" required  {{old('national_id')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">تاریخ تولد:</label>
                                <input type="text" value="{{$user->date_birth}}" style="direction: rtl;" name="date_birth"   class="form-control" id="inputWarning"   {{old('date_birth')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group ">
                                <label class="pull-right" for="title" style="direction: rtl;">جنسیت:</label>
                                <select class="form-control"  name="sex" style="direction: rtl;">
                                    <option value="male"  @if($user->sex=='male') selected @endif>مرد</option>
                                    <option value="female"  @if($user->sex=='female') selected @endif> زن</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> آدرس:</label>
                                <input type="text" value="{{$user->address}}" style="direction: rtl;" name="address"  class="form-control" id="inputWarning" required {{old('address')}} >
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">نام:</label>
                                <input type="text" value="{{$user->first_name}}" style="direction: rtl;" name="first_name"  class="form-control" id="inputSuccess" required  {{old(' first_name')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">نام خانوادگی:</label>
                                <input type="text" value="{{$user->last_name}}" style="direction: rtl;" name="last_name"   class="form-control" id="inputError" required  {{old(' last_name')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group " style="direction: rtl;">
                                <label class="pull-right" for="title" style="direction: rtl;">نوع کاربر:</label>
                                <select class="form-control" name="type" >
                                    <option value="Student" @if($user->type=='Student') selected @endif>دانشجو</option>
                                    <option value="Prof"  @if($user->type=='Prof') selected @endif>استاد</option>
                                    <option value="Manager "  @if($user->type=='Manager') selected @endif> مدیرگروه</option>
                                    <option value="Operator" @if($user->type=='Operator') selected @endif>مسول سیستم</option>
                                    <option value="Employee" @if($user->type=='Employee') selected @endif>مسول آموزش</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">کلمه عبور:</label>
                                <input type="text" value="{{$user->post_id}}" style="direction: rtl;" name="post_id"   class="form-control" id="inputWarning" required  {{old('post_id')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">رمز عبور:</label>
                                <input type="text" value="{{$user->password}}" style="direction: rtl;" name="password"   class="form-control" id="inputSuccess" required  {{old('password')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">ایمیل:</label>
                                <input type="text" value="{{$user->email}}" style="direction: rtl;" name="email"   class="form-control" id="inputError" required  {{old('email')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group  ">
                                <label class="pull-right" for="title" style="direction: rtl;">تصویر:</label>
                                <input class="form-control"  name="photo" type="file" style="direction: rtl;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group  ">
                                @if ( $user->photo)
                                    <img src="{{ url('upload_files/users/' . $user->photo) }}" style="width:50px">
                                @else
                                    <p>No image found</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="tile-footer">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop
