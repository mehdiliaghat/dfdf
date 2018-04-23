@extends('layouts.homeLayout')
@section('slider')

    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="{{ asset('img/intro-carousel/Web3d.jpg') }}" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>« وب سه بعدی»</h2>
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
                    <h3>  وب سه بعدی</h3>
                    <p style="text-align: center" > امروزه تکنولوژی های سه بعدی آنچنان فراگیر شده اند که کمتری مجموعه ای را می توان یافت که از این فناوری ها بهره نبرد و به دلیل این حجم فراگیر تقاضا و نیاز به قناوری های سه بعدی از یک سو و پیشرفت هر روزه رابط های برنامه نویسی مانند WebGL تعداد محصولات تحت وب سه بعدی هر روز بیشتر و بیشتر می شود،            فناوری Web3D ، تکنولوژی نمایش و پیمایش کامل سایت های سه بعدی جانمایی شده در فایل های Html و فراهم سازی امکان نمایش این صفحات از طریق مرورگرهای رایج است. </p>
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
                                <a href="#"><img src="{{ asset('img/Untitled-2.png') }}"  width="60" height="60"></a>
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
                                <a href="#"><img src="{{ asset('img/pdf.png') }}"  width="60" height="60"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@stop