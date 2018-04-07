@extends('layouts.homeLayout')
@section('slider')

    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2></h2>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2></h2>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2></h2>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2></h2>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2></h2>
                            <p></p>
                        </div>
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


        <!--==========================
          Featured Services Section
        ============================-->
        <section id="featured-services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 box" style="text-align: right">
                        <i class="ion-ios-bookmarks-outline" ></i>
                        <h4 class="title"><a href="#">گرافیک رایانه ای</a></h4>
                        <p class="description">واژه CG مخفف عبارت Computer Graphics  به معنای گرافیک کامپیوتری است و اگر بخواهیم به صورتی ساده و البته کوتاه آن را تعریف کنیم :
                            «دانش مرتبط با تصویر و مشتقات آن در رایانه است»
                            دانش گرافیک رایانه ای در حوزه آکادمیک به صورت یک مسیر رفت و برگشت دو طرفه در نظر گرفته می شود، بخشی شامل رندر و بخشی شامل پردازش تصاویر رایانه ای .
                        </p>
                    </div>

                    <div class="col-lg-4 box box-bg" style="text-align: right" >
                        <i class="ion-ios-stopwatch-outline"></i>
                        <h4 class="title"><a href="">بازی ویدئویی ظاهری سرگرم کننده</a></h4>
                        <p class="description">بازی رایانه ای را می توان از ابعاد مختلف نظیر : فن، هنر و محتوا روایت کرد و مورد مداقه قرار داد اما در کشور ما به ویژه پس از راه اندازی بنیاد ملی بازی های رایانه ای هر سه حوزه هنر، محتوا و فن به اندازه خود مورد کنکاش و بررسی قرار گرفته اند اما فناوری عرصه ای مغفول است.
                            فناوری های مرتبط با بازی های رایانه ای تقریبا تمامی حوزه های مرتبط با تصویر سازی را در بر می گیرد که از حوزه نظامی تا شبیه سازی های علمی را پوشش می دهند و متاسفانه به دلیل نگاه فن محور، در کشور ما از آن غفلت شده است.
                            اگر فناوری های مرتبط با بازی رایانه ای را در قالب یک دانش، طبقه بندی کنیم باید از گرافیک رایانه ای نام ببریم.
                        </p>
                    </div>

                    <div class="col-lg-4 box" style="text-align: right">
                        <i class="ion-ios-heart-outline"></i>
                        <h4 class="title"><a href="">فن یا فناوری</a></h4>
                        <p class="description">فناوری عبارت است از دانش بنیادی سازنده یک ابزار که آن ابزار به محصول منتج می شود و فن عبارت است از طریقه به کارگیری یک ابزار برای حصول بهترین نتیجه، به عنوان مثال منحنی های Bezier ، الگوریتم کتمال کلارک و یا الگوریتم های تقسیم بندی سطوح در مولفه های راس، یال و چند وجهی همگی فناوری هایی هستند که ذیل مدل سازی تعریف می شوند که ممکن است، اتفاقا در نرم افرار مشهوری همچون تری دی مکس و مایا نیز به کار گرفته شوند و یک نفر بدون اطلاع از این فناوری ها به بهترین شکل ممکن از نرم افزار Maya بهره ببرد و خلاقانه ترین مدل ها را نیز تولید کند.</p>
                    </div>

                </div>
            </div>
        </section><!-- #featured-services -->

        <!--==========================
          About Us Section
        ============================-->
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>معرفی دوره ها</h3>
                    <p> در بسیاری از حوزه های مرتبط با فضای مجازی وابستگی یکی از آفاتی است که مانع از ایجاد اشتغال و استفاده بهینه فرهنگی از فضای مجازی می شود و مجموعه های داخلی را به مصرف کننده هایی صرف تبدیل می کند که هیچ گونه فضایی برای نقش آفرینی در اختیار نداشته و تنها باید تابع شرایط باشند و فارغ از اشتغال و فرهنگ، وابستگی چالش های امنیتی متعددی نیز به دنبال خواهد داشت، از این روی بومی سازی می بایست یکی از اهداف کلان مجموعه های مرتبط با فضای مجازی باشد تا اولا فعالیت ها از گزند تحریم و تاثیرگذاری عامل خارجی در امان بمانند.
                        ثانیا امکان توسعه بومی مبتنی بر مولفه ها و نیاز های داخلی مربوط به هر یک از این حوزه ها فراهم شود.
                        در ضروریات بومی سازی و طراحی یک پلتفرم و به عبارت دیگر یک زمین بازی استدلال فراوان است و امری بدیهی به نظر می رسد اما مهم تر از چرایی ، چگونگی بومی سازی است.
                        بومی سازی علمی منجر به اشتغال و تولید بر چهار مولفه اساسی مقابل استوار است که به صورت کوتاه به هر یک می پردازیم.
                    </p>
                </header>

                <div class="row about-cols">

                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"> کتاب </h2>
                            <p style="text-align: right">

                                کتاب و مرجع علمی، در هر مجموعه ای یکی از تاثیرگذارترین و اساسی ترین بنیادهای شکل دهنده ساز و کارهای علمی است، در حوزه بومی سازی نیز تامین مراجع علمی کافی برای تدریس و یادگیری عمیق یکی از اصلی ترین اولویت هاست اما این مرجع لزوما کتاب است؟ در حالی که بسیاری بر این اعتقادند که حوزه فضای مجازی با سرعتی باورنکردنی و غیرقابل کنترل در حال تغییر است، از این رو مقوله ای ایستا به نام کتاب که از زمان تصمیم گیری برای ترجمه یا تالیف تا زمان چاپ و انتشار نهایی پروسه ای زمان بر را طی می کند، دیگر در این حوزه کارکردی ندارد

                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 class="title"> ابزار  </h2>
                            <p style="text-align: right">
                                منظور از ابزار لزوما ساخت محیط ویژه توسعه یک محصول نیست بلکه توسعه یک بستر کد باز برای آغاز، رشد و نمو نیروی تازه کار و نیمه حرفه ای است که علاوه بر رشد این نیروها و زمینه سازی برای تربیت نیروی متخصص شرایطی را برای پیشروی در حوزه گرافیک رایانه ای نیز فراهم می کند و از این ابزار می توان خروجی های متعدد گرفت و از آن مهمتر نیروی انسانی در بستر کد تجربه پیدا می کند و از سوی دیگر کد به مرور پیشرفت می کند و تبدیل به یک محصول قابل اعتنا می شود که در گذر زمان توسعه یافته است.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                            </div>
                            <h2 class="title"> ادبیات و راهبرد </h2>
                            <p style="text-align: right">
                                در کنار سه گانه مطرح شده یعنی : ابزار، نیروی انسانی و مرجع علمی، نقشه راه عنصری بسیار تاثیرگذار و حلقه مفقوده و متصل کننده این سه مولفه به یکدیگر است، راهبرد نقشه راه کلی را تبیین می کند و ادبیات کارکردها و نقش آفرینی هر یک از محصولات در زندگی را مشخص می کند که بدون این دو عنصر هیچ یک از سه گانه مطرح شده ابزار، مرجع علمی و نیروی انسانی کمترین فایده ای نخواهند داشت.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #about -->


        <!--==========================
          Call To Action Section
        ============================-->
        <section id="call-to-action" class="wow fadeIn">
            <div class="container text-center">
                <h3>گرافیک رایانه ای</h3>
                <p>گرافیک رایانه ای علم مبتنی بر تصاویر است که به تولید یا تحلیل تصاویر رایانه ای می پردازد، این علم در بیش از 13 حوزه صنعتی و علمی مشخص کارکرد ویژه ای دارد که هر یک می توانند زمینه تولید محصولات و ایجاد اشتغال پایدار را برای دانش پژوه فراهم کنند.</p>
            </div>
        </section><!-- #call-to-action -->
        <!--==========================
          Portfolio Section
        ============================-->
        <section id="portfolio"  class="section-bg" >
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">زمینه های کاربردی اشتغال</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-analysis">آنالیز و تحلیل</li>
                            <li data-filter=".filter-brudband">برودباند</li>
                            <li data-filter=".filter-medical">پزشکی</li>
                            <li data-filter=".filter-fun">سرگرمی</li>
                            <li data-filter=".filter-military">نظامی</li>
                            <li data-filter=".filter-design">طراحی و تولید</li>
                            <li data-filter=".filter-training">آموزش</li>
                            <li data-filter="*" class="filter-active">همه</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-analysis wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/analysis_Mathematical_modeling.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">مدل سازی ریاضی</a></h4>
                                <p>آنالیز و تحلیل</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-analysis wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/analysis_weather.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> هواشناسی</a></h4>
                                <p>آنالیز و تحلیل</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-analysis wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/analysis_Basic_sciences.png" class="img-fluid" alt="">
                                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">  علوم پایه</a></h4>
                                <p>آنالیز و تحلیل</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item  filter-brudband wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/brudband_The_Virtual_Studio.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">استدیو مجازی</a></h4>
                                <p>برودباند</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item  filter-brudband wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/brudband_Editor.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> تدوین</a></h4>
                                <p>برودباند</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item  filter-brudband wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/brudband_Proactive_production.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> تولید بلادرنگ</a></h4>
                                <p>برودباند</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item  filter-brudband wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/brudband_Sports_services.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> خدمات ورزشی</a></h4>
                                <p>برودباند</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item  filter-brudband wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/brudband_imax_3d.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">3d , Imax </a></h4>
                                <p>برودباند</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item  filter-brudband wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/brudband_Special_video.png" class="img-fluid" alt="">
                                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> فیلم برداری های ویژه</a></h4>
                                <p>برودباند</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-medical wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/medical_scan.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">اسکن پزشکی</a></h4>
                                <p>پزشکی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-medical wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/medical_panel.png" class="img-fluid" alt="">
                                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> تجهیزات و پنل های پزشکی</a></h4>
                                <p>پزشکی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-medical wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/medical_Remote_operation.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> عمل های از راه دور</a></h4>
                                <p>پزشکی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-medical wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/medical_Movement_therapy.png" class="img-fluid" alt="">
                                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> درمان های حرکتی</a></h4>
                                <p>پزشکی</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-fun  wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/fun_game.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">بازی</a></h4>
                                <p>سرگرمی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-fun  wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/fun_animation.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> انیمیشن</a></h4>
                                <p>سرگرمی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-fun  wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/fun_virtual_reality.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> واقعیت مجازی</a></h4>
                                <p>سرگرمی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-fun  wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/fun_augmented_reality.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> واقعیت افزوده</a></h4>
                                <p>سرگرمی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-fun  wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/fun_special_effects.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> جلوه های ویژه</a></h4>
                                <p>سرگرمی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-fun  wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/fun_toys.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> اسباب بازی</a></h4>
                                <p>سرگرمی</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item  filter-military wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/military_simulation.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">شبیه سازی</a></h4>
                                <p>نظامی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item  filter-military wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/military_point_system.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> سامانه های نقطه زن</a></h4>
                                <p>نظامی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item  filter-military wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/miliary_Security_identity.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> سامانه های هویتی ، امنیتی</a></h4>
                                <p>نظامی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item  filter-military wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/military_observation.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> سامانه های رصد</a></h4>
                                <p>نظامی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item  filter-military wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/military_mapping.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> نقشه برداری</a></h4>
                                <p>نظامی</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-design wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/design_3d_scan.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">اسکن سه بعدی</a></h4>
                                <p>طراحی و تولید</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-design wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/design_3D-printing.jpeg" class="img-fluid" alt="">
                                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> پرینت سه بعدی</a></h4>
                                <p>طراحی و تولید</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-design wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/design_CAD.png" class="img-fluid" alt="">
                                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> CAD</a></h4>
                                <p>طراحی و تولید</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-design wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> شبیه سازی های صنعتی</a></h4>
                                <p>طراحی و تولید</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-training wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/training_WEB.jpeg" class="img-fluid" alt="">
                                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">بر بستر وب</a></h4>
                                <p>آموزش</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-training wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/training_mobile-learning.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> بر بستر موبایل </a></h4>
                                <p>آموزش</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-training wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/training_vivo-smartwatch.jpeg" class="img-fluid" alt="">
                                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"> بربستر گجت </a></h4>
                                <p>آموزش</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #portfolio -->
@stop

