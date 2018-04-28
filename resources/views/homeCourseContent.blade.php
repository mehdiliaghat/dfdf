@extends('layouts.homeLayout')
@section('slider')

    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="{{ asset('img/intro-carousel/courseContent.jpg') }}" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>«  معرفی دوره ها»</h2>
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
                    <h3> محتوای دوره</h3>
                    <p style="text-align: center" >
                        نجاه (نظام جامع آموزش هماهنگ) یک ساز و کار آموزشی در حوزه فناوری های گرافیک رایانه ای است که کاربر با طی دوره های آموزشی ذیل آن می تواند به یک خبره متخصص در حوزه مورد نظر خود تبدیل شود و بر خلاف بسیاری از دوره های آنلاین و یا حوری دیگر که همگی بر وجه فنی کار تمرکز دارند، این دوره علاوه بر مباحث فنی جریان شناسی، آینده پژوهشی و اطلاعات فنی کافی را نیز در حوزه کسب و کار در اختیار دانش پژوه قرار می دهد تا با یک دید جامع آماده نقش آفرینی در حوزه کسب و کار های نوین شود.
                        دوره ها در 3 فضای متفاوت اما به هم پیوسته تدارک دیده شده اند که در ادامه هر یک از آنها به طور خلاصه بیان می شوند اما شایان ذکر است که با توجه به روند و اهداف هر دوره منابع این دوره ها به صورت کاملا اختصاصی از روزآمدترین منابع دنیا تهیه و همگی ترجمه شده اند و به فراخور پیشرفت کاربر در اختیار وی قرار می گیرند.

                    </p>
                </div>
            </section>
            <section id="contact" class="section-bg wow fadeInUp">
                <div class="container">
                    <div class="row contact-info">
                        <div class="col-md-4">
                            <h3> اینفوگرافی</h3>
                            <div class="contact-email">
                                <a href="#" data-lightbox="portfolio" data-title="  " class="link-preview" title="Preview"><img src="{{ asset('img/Untitled-2.png') }}"  width="60" height="60"></a>
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
                                <a href=" #"><img src="{{ asset('img/pdf.png') }}"  width="60" height="60"></a>
                            </div>
                        </div>
                    </div>

                    <div class="section-header">
                        <h3>دوره ها </h3>
                        <p></p>
                    </div>
                    <div class="row contact-info" style="direction: rtl" >
                        <h4 class="title" ><a href=""> 1.	دوره فناوری و بازار :	</a></h4>

                    </div>
                    <div class="row contact-info" style="direction: rtl" >
                        <p class="description">
                            در این دوره دانش پژوه با استفاده از منابع تدارک دیده شده با فناوری های اساسی حوزه گرافیک رایانه ای آشنا شده شده و اساس هر یک از آنها، فناوری های تابعه،زمینه های اشتغال، شرکت های فعال و آینده هر یک را در قالب متن های استنادی، سایت ها، مستند، تقویم و پاورپوینت فرا می گیرد تا پیش از آموزش کار با ابزار، تصور دقیقی از محصول نهایی داشته باشند تا با علاقمندی بیشتر و البته دقیق تر به سوی هدف خود حرکت کنند.
                        </p>
                    </div>
                    <div class="row contact-info" style="direction: rtl" >
                        <h4 class="title" ><a href="">  2.	دوره تکنیک :	</a></h4>
                        <br>
                        <p class="description">
                            در این دوره کاربران با استفاده از نرم افزارهای کدباز اصلی و توسعه یافته توسط توسط شرکت کسب و کارهای آتریاد اقدام به تولید محصولاتی از قبیل :
                        </p>
                        <ul style="text-align: right">
                            <li >1. انیمیشن 2 بعدی.</li>
                            <li>2. انیمیشن 3 بعدی.</li>
                            <li>3. محصولات استودیو مجازی.</li>
                            <li>4. بازی های رایانه ای ساده.</li>
                            <li>5. وب سه بعدی.</li>
                            <li>6. چاپ سه بعدی.</li>
                            <li>7. کامپوزیت و تدوین.</li>
                        </ul>
                    </div>
                    <div class="row contact-info" style="direction: rtl" >

                        <p class="description">
                            می نمایند.
                        </p>
                    </div>
                    <div class="row contact-info" style="direction: rtl" >

                        <p class="description">
                            منابع آموزشی این دوره مواردی از قبیل : کتاب، جزوه، فیلم آموزشی، فایل های تمرین، مجموعه ای از Asset های مورد نیاز و نرم افزارهای اختصاصی توسعه یافته برای این کار را شامل می شود.
                        </p>
                    </div>
                    <div class="row contact-info" style="direction: rtl" >
                        <h4 class="title" ><a href="">  3.	دوره تکنولوژی : 	</a></h4>
                        <p class="description">
                            در این دوره کاربر پیاده سازی و توسعه سیستم های مورد نیاز CG را بر اساس علوم پایه و علوم کاربردی مورد نیاز بر بستر یک دوره کاردانی مجازی طی می کند و در پایان دوره توانایی توسعه یک نرم افزار اختصاصی را در هر یک از حوزه های معین CG کسب می کند. و با ارائه زمینه های مناسب برای اشتغال آماده راه اندازی یک کسب و کار نوین و دانش بنیان می شوند.
                        </p>
                    </div>
                </div>
            </section>
@stop