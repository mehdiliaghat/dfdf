@extends('layouts.homeLayout')
@section('slider')

    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="{{ asset('img/intro-carousel/VR.jpg') }}" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>«واقعیت مجازی»</h2>
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
                    <h3>واقعیت مجازی</h3>
                    <p style="text-align: center" >واقعیت مجازی (Virtual Reality) یا به صورت مخفف : VR عبارت است از تکنولوژی که سعی دارد تا کاربر را از محیط حقیقی به محیط مجازی انتقال دهد و شخص با استفاده از این فناوری حس کند که به عنوان اول شخص یا سوم شخص در محیط سناریو قرارگرفته است.
                        تکنولوژی واقعیت مجازی بر اساس ارائه یک تصویر مخصوص برای هر چشم انسان عمل می کند و در واقع تصویری است که از یک محیط با دو دوربین (یا دو نمای) متفاوت برداشته می شود و به این صورت کاربر را از محیط واقعی به محیط مجازی می برد.</p>
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
                                <a href="{{url('upload_files/home/VR/VRinfo.jpg')}}" data-lightbox="portfolio" data-title=" واقعیت مجازی" class="link-preview" title="Preview"><img src="{{ asset('img/Untitled-2.png') }}"  width="60" height="60"></a>
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
                                <a href="{{url('upload_files/home/VR/VR.pdf')}}"><img src="{{ asset('img/pdf.png') }}"  width="60" height="60"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@stop