
@extends('operator.testBase')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">   ویرایش ترم   </a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i>ویرایش ترم </h1>
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
                <form method="post" action="{{route('selectTerm.update',$student->id)}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                            <input type="hidden" id="" name="user_id" value="{{$student->user_id}}">
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">واحدگذرانده:</label>
                                <input value="{{ $student->unit_spent}}" type="text" style="direction: rtl;"  name="unit_spent"  class="form-control" id="inputWarning" required  {{old('phone')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> واحدنیم سال:</label>
                                <input value="{{ $student->unit_term}}" type="text" style="direction: rtl;" name="unit_term"  class="form-control" id="inputError" required  {{old('edu')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> نیم سال:</label>
                                <input value="{{ $student->term}}" type="text" style="direction: rtl;"  name="term"   class="form-control" id="inputError" required  {{old('national_id')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">   سال ورود:</label>
                                <input value="{{ $student->arrival}}" type="text" style="direction: rtl;" name="arrival"   class="form-control" id="inputWarning"   {{old('date_birth')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> ترم:</label>
                                <input value="{{ $student->num_term}}" type="text" style="direction: rtl;" name="num_term"  class="form-control" id="inputSuccess" required  {{old(' first_name')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> معدل کل:</label>
                                <input value="{{ $student->ave}}" type="text" style="direction: rtl;" name="ave"   class="form-control" id="inputError" required  {{old(' last_name')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;"> معدل نیم سال:</label>
                                <input value="{{ $student->ave_term}}" type="text" style="direction: rtl;" name="ave_term"  class="form-control" id="inputSuccess" required  {{old('password')}}>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="pull-right" for="title" style="direction: rtl;">واحد اخذ شده:</label>
                                <input value="{{ $student->unit_getting}}" type="text" style="direction: rtl;" name="unit_getting"  class="form-control" id="inputError" required  {{old('email')}}>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group " style="direction: rtl;">
                                <label class="pull-right" for="title" style="direction: rtl;">نوع کاربر:</label>
                                <select class="form-control"  name="state_term" >
                                    <option value="normal"  @if($student->state_term=='normal') selected @endif> عادی</option>
                                    <option value="Conditional" @if($student->state_term=='Conditional') selected @endif>مشروط</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group " style="direction: rtl;">
                                <label class="pull-right" for="title" style="direction: rtl;">نوع کاربر:</label>
                                <select class="form-control"  name="nighday" >
                                    <option value="day" @if($student->nighday=='day') selected @endif> روزانه</option>
                                    <option value="night" @if($student->nighday=='night') selected @endif>شبانه</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group " style="direction: rtl;">
                                <label class="pull-right" for="title" style="direction: rtl;">نوع کاربر:</label>
                                <select class="form-control" name="state" >
                                    <option value="Study" @if($student->state=='Study') selected @endif> درحال تحصیل</option>
                                    <option value="vacation" @if($student->state=='vacation') selected @endif>مرخصی</option>
                                    <option value="expulsion" @if($student->state=='expulsion') selected @endif> اخراج</option>
                                    <option value="Cancel" @if($student->state=='Cancel') selected @endif>انصراف</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                    </div>
                    <button class="btn btn-primary" type="submit">ثبت ترم</button>
                </form>
            </div>
        </div>
    </div>
@stop
