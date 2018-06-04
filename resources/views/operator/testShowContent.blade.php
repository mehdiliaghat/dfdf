
@extends('operator.testBase')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-list fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">   نمایش محتوا </a></li>
        </ul>

        <div>
            <h1><i class="fa fa-list"></i>   نمایش محتوا  </h1>
            <p> نظام جامع آموزش هماهنگ</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">  لیست محتوا ها </h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>دوره</th>
                            <th> کاربر مربوطه</th>
                            <th> هزینه</th>
                            <th>نام محتوا</th>
                            <th>لینک</th>
                            <th>نوع محتوا</th>
                            <th>ردیف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contents as $key=>$content)
                            <tr>
                                <td>
                                    <form method="post" id="delete-form-{{$content->id}}" action="" style="display: none ;">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                    </form>
                                    <button onclick="if(confirm(' آیا می خواهید کاربر مورد نظر را حذف کنید؟')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$content->id}}').submit();
                                            }else{
                                            event.preventDefault();
                                            }" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    <a class="btn btn-raised btn-danger btn-sm" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td> @if( $content->term == 'short' )
                                         دوره فناوری و بازار
                                    @elseif( $content->term  == 'medium'  )
                                         دوره تکنیک
                                    @else
                                           دوره تکنولوژی
                                    @endif</td>
                                <td> @if($content->user=='student')  دانشجو @else  استاد  @endif</td>
                                <td>{{$content->price}}</td>
                                <td>{{$content->contentName}}</td>
                                <td>
                                    @if( $content->type_id == 1 )
                                        <a class="btn btn-raised btn-primary btn-sm" href="{{url('/upload_files/contents/'.$content->link)}}">
                                            <i class="fa fa-book" aria-hidden="true"></i></a>

                                    @elseif( $content->type_id == 2)
                                        <a class="btn btn-raised btn-primary btn-sm" href="{{url('/upload_files/contents/'.$content->link)}}">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i></a>

                                    @elseif( $content->type_id == 3)
                                        <a class="btn btn-raised btn-primary btn-sm" href="{{url('/upload_files/contents/'.$content->link)}}">
                                            <i class="fa fa-film" aria-hidden="true"></i></a>

                                    @elseif( $content->type_id == 4)
                                        <a class="btn btn-raised btn-primary btn-sm" href="{{url('/upload_files/contents/'.$content->link)}}">
                                            <i class="fa fa-file-powerpoint" aria-hidden="true"></i></a>

                                    @elseif( $content->type_id == 5)
                                        <a class="btn btn-raised btn-primary btn-sm" href="{{url('/upload_files/contents/'.$content->link)}}">
                                            <i class="fa fa-volume-up" aria-hidden="true"></i></a>

                                    @elseif( $content->type_id == 6)
                                        <a class="btn btn-raised btn-primary btn-sm" href="{{url('/upload_files/contents/'.$content->link)}}">
                                            <i class="fa fa-code" aria-hidden="true"></i></a>

                                    @elseif( $content->type_id == 7)
                                        <a class="btn btn-raised btn-primary btn-sm" href="{{url('/upload_files/contents/'.$content->link)}}">
                                            <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                    @elseif( $content->type_id == 8)
                                        <a class="btn btn-raised btn-primary btn-sm" href="{{url('/upload_files/contents/'.$content->link)}}">
                                            <i class="fa fa-calendar" aria-hidden="true"></i></a>

                                    @else
                                        <a class="btn btn-raised btn-primary btn-sm" href="{{url('/upload_files/contents/'.$content->link)}}">
                                            <i class="fa fa-address-card" aria-hidden="true"></i></a>
                                    @endif
                                </td>
                                <td>
                                    @if( $content->type_id == 1 )
                                         کتاب
                                    @elseif( $content->type_id == 2)
                                         اینفوگرافی
                                    @elseif( $content->type_id == 3)
                                        ویدئو
                                    @elseif( $content->type_id == 4)
                                        پاورپوینت
                                    @elseif( $content->type_id == 5)
                                        صوت
                                    @elseif( $content->type_id == 6)
                                        کد
                                    @elseif( $content->type_id == 7)
                                        نرم افزار
                                    @elseif( $content->type_id == 8)
                                        تقویم
                                    @else
                                         فلش کارت
                                    @endif
                                </td>
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
