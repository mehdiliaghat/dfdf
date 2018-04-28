@extends('layouts.homeLayout')
@section('slider')

    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="{{ asset('img/intro-carousel/AR.jpg') }}" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>«واقعیت افزوده»</h2>
                            <p style="text-align: justify"></p>
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
                    <h3>واقعیت افزوده </h3>
                    <p style="text-align: center" >فناوری واقعیت افزوده یا Augmented Reality  فناوری است که به موازات واقعیت مجازی در حال رشد و نمو است اما نگاه اصلی آن دقیقا بر خلاف واقعیت مجازی است، به این معنا که واقعیت مجازی کاربر را از واقعیت به فضای مجازی می برد اما واقعیت افزوده، مَجاز را به دنیای حقیقی می آورد و از این نظر کاملا با هم متفاوت اند.
                        تکنولوژی واقعیت افزوده در قالب تلفن های همراه یا دستگاه های پوشیدنی عرضه می گردد و در آنها شخص مجموعه ای از اِلِمان ها را به صورت هوشمند در محیط پیرامونی خود می بیند، در حالی که بدون این دستگاه ها ، این  اِلِمان ها قابل مشاهده نیستند و به عبارتی دیگر مجموعه ای از اشکال ، داده ها و ... به محیط پیرامونی افزوده می شود. </p>
                 </div>
            </section>
            <section id="contact" class="section-bg wow fadeInUp">
                <div class="container">

                    <div class="section-header">
                        <h3>نمونه محتوا</h3>
                        <p></p>
                    </div>


                    <div class="row contact-info">
                        <div class="col-md-4">
                            <h3> اینفوگرافی</h3>
                            <div class="contact-email">
                                <a href="{{url('upload_files/home/AR/ARInfo.jpg')}}" data-lightbox="portfolio" data-title=" واقعیت افزوده" class="link-preview" title="Preview"><img src="{{ asset('img/Untitled-2.png') }}"  width="60" height="60"></a>
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
                                <a href="{{url('upload_files/home/AR/AR.pdf')}}"><img src="{{ asset('img/pdf.png') }}"  width="60" height="60"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@stop