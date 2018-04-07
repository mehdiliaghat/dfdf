@extends('layouts.homeLayout')
@section('content')
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>ارتباط با ما</h3>
                <p>گروه فناوری های نوین آتریاد</p>
            </div>


            <div class="row contact-info">
                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>ایمیل</h3>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>تلفن</h3>
                        <p><a href="tel:+155895548855">+98 8132221002</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>آدرس</h3>
                        <address>ملایر ، خیابان شهید رجائی ، ساختمان پردیس ،طبقه چهارم واحد 15</address>
                    </div>
                </div>



            </div>

            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input style="text-align: right" type="email" class="form-control" name="email" id="email" placeholder="ایمیل" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input style="text-align: right" type="text" name="name" class="form-control" id="name" placeholder="نام" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input style="text-align: right" type="text" class="form-control" name="subject" id="subject" placeholder="موضوع" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea style="text-align: right" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="متن"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">ارسال پیام</button></div>
                </form>
            </div>

        </div>
    </section>
@stop