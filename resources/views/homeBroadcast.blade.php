@extends('layouts.homeLayout')
@section('slider')

    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="{{ asset('img/intro-carousel/Broadcast.jpg') }}" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>«برودکست»</h2>
                            <p> </p>
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
                    <h3> برودکست و برودبند</h3>
                    <p style="text-align: center" > تلویزیون با دو فناوری متفاوت می تواند در منازل مردم حضور داشته باشد، یا با موج رادیویی و یا با IP کهدر هر دو نیز خدماتی مانند زیر نویس، تبلیغات و .... در دسترس عوم قرار می گیرد که از خدمات مبتنی بر انتقال با موج به عنوان Broadcast و از خدمات انتقال مبتنی بر IP به عنوان Broadband یاد می کنیم که این فناوری ها زیرمجموعه های جذابی چون محصولات سینمایی، شبکه های اجتماعی و استودیو مجازی را در نظر می گیرند.</p>
                </div>
            </section>
            <section id="contact" class="section-bg wow fadeInUp">
                <div class="container">

                    <div class="section-header">
                        <h3>نمونه محتوا </h3>
                        <p></p>
                    </div>


                    <div class="row contact-info">
                        <div class="col-md-4">
                            <h3> اینفوگرافی</h3>
                            <div class="contact-email">
                                <a href="{{url('upload_files/home/Broadcast/BroadcastInfo.jpg')}}" data-lightbox="portfolio" data-title=" برودکست" class="link-preview" title="Preview"><img src="{{ asset('img/Untitled-2.png') }}"  width="60" height="60"></a>
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
                                <a href="{{url('upload_files/home/Broadcast/Broadcast.pdf')}}"><img src="{{ asset('img/pdf.png') }}"  width="60" height="60"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@stop