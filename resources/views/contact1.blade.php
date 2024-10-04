@extends('shared.master')


@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area__inner">
            <div class="breadcrumb-area-bg"
                 style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title">
                                <h2>Contact Us</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <!--Start Main Contact Form Area-->
    <section class="main-contact-form-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-8">
                    <div class="contact-form">
                        <div class="sec-title">
                            <div class="sub-title">
                                <div class="border-left"></div>
                                <h5>get in touch</h5>
                            </div>
                            <h2>Drop a Message</h2>
                        </div>
                        <form id="contact-form" name="contact_form" class="default-form2"
                              action="assets/inc/sendmail.php" method="post">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="text" name="form_name" id="formName"
                                                   placeholder="Your Name" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="email" name="form_email" id="formEmail"
                                                   placeholder="Your Email" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="text" name="form_phone" value="" id="formPhone"
                                                   placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="text" name="form_subject" value="" id="formSubject"
                                                   placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                                <textarea name="form_message" id="formMessage" placeholder="Message"
                                                          required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control"
                                               type="hidden" value="">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                                <span class="txt">
                                                    submit now <i class="icon-right"></i>
                                                </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="contact-info-box-style1">
                        <div class="title">
                            <h2>Our Address</h2>
                            <p>We’re committed to helping you with HVAC repair or finding the best comfort equipment to match your needs.</p>
                        </div>
                        <ul class="contact-info-1">
                            <li>
                                <div class="icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="text">
                                    <h3>Address:</h3>
                                    <p>680 Rexdale Blvd,<br/>
                                        Etobicoke, ON M9W 0B5, Canada</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <h3>Phone :</h3>
                                    <p>
                                        <a href="tel:+14162000905">+1 416 200 0905</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-mail"></span>
                                </div>
                                <div class="text">
                                    <h3>Email :</h3>
                                    <p><a href="mailto:yourmail@email.com">contact@airtronix.com</a></p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="google-map-outer-box">
                <!--Google Map Start-->
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5766.995028286542!2d-79.6144186!3d43.7209906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3bb703beb515%3A0x9d26c587bf8d418f!2s680%20Rexdale%20Blvd%2C%20Etobicoke%2C%20ON%20M9W%200B5!5e0!3m2!1sen!2sca!4v1714513470725!5m2!1sen!2sca"
                        class="google-map__one" allowfullscreen></iframe>
                </div>
                <!--Google Map End-->
            </div>
        </div>

    </section>
    <!--End Main Contact Form Area-->

@endsection
