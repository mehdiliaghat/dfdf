@extends('layouts.homeLayout')
@section('slider')

        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="{{ asset('img/intro-carousel/printer.jpg') }}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>« پرینترو اسکنر سه بعدی»</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
@stop
@section('content')
    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <h3>پرینت سه بعدی</h3>
            <p style="text-align: center" >به طور خلاصه اگر بخواهیم پرینتر سه بعدی را معرفی کنیم باید بگوییم یک پرینتر سه بعدی دستگاهی است که مدل گرافیکی رایانه ای را به یک شیء جامد با ابعاد تعریف شده با مواد سازنده  مشخص تبدیل می کند و به این صورت رویای چاپ فوری را برای متخصصان کامپیوتر زنده شد.
                این فناوری در کنار معکوس خود یعنی پرینتر سه بعدی امروزه در بخش های زیادی از زندگی انسان ها وارد شده است و توسعه و پیاده سازی دانش های مرتبط با آن می تواند بازار خوبی را برای مجموعه های دانش بنیان در حوزه تولید دستگاه، محصول و یا نرم افزارها و خدمات رقم بزند.</p>
        </div>
    </section>
     <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>نمونه کار</h3>
                <p></p>
            </div>


            <div class="row contact-info">
                <div class="col-md-4">
                    <h3> اینفوگرافی</h3>
                    <div class="contact-email">
                        <a href="{{url('upload_files/home/Scan3d/Scan3dInfo.jpg')}}" data-lightbox="portfolio" data-title="پرینتر و اسکنر سه بعدی" class="link-preview" title="Preview"><img src="{{ asset('img/Untitled-2.png') }}"  width="60" height="60"></a>
                        <p><a href=""></a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>مستند</h3>
                    <div class="contact-phone">
                        <a href="#"><img src="{{ asset('img/video-icon.png') }}"  width="60" height="60"></a>
                        <p><a href=""></a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>pdf</h3>
                    <div class="contact-address">
                        <a href="{{url('upload_files/home/Scan3d/Scan3d.pdf')}}"><img src="{{ asset('img/pdf.png') }}"  width="60" height="60"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop