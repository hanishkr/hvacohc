@extends('shared.master')


@section('content')

    <!--Start Values Style3-->
    <section class="values-style3">
        <div class="values-style3-bg" style="background-image: url(assets/images/pattern/values-style3-bg.jpg);">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-xl-7">
                    <div class="values-style3__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <div class="border-left"></div>
                                <h5>Solutions to keep you comfortable</h5>
                            </div>
                            <h2>Leader in HVAC and<br> Air Conditioning Services</h2>
                        </div>
                        <div class="text">
                            <p>Regardless of whether you are in the market for another heater, heat siphon, A/C
                                framework, or just require establishment, support or fix administration on your new
                                or existing HVAC gear, highlights that settle on us your best decision for
                                neighborhood HVAC administration:</p>
                        </div>
                        <div class="values-style3__content-list-item">
                            <h3>Our Values ...</h3>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    A Professional, Licensed and authorized HVAC dealer
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    The Best HVAC dealer in GTA
                                </li>
                               {{-- <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    A BBB-accredited business with an A+ rating in 2014
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    Winner of Angie’s List Super Service Award 2013
                                </li>--}}
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    Lowcountry Local First member
                                </li>

                                {{--<li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    100% NATE Certified Service Department
                                </li>--}}
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    Available for 24-hour emergency HVAC service
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="airtronix-form-style1 airtronix-form-style1--instyle2">
                        <div class="top-title">
                            <h3>Book a free visit of our<br>Professional HVAC Technician</h3>
                        </div>
                        <form id="booking-form" name="booking_form" class="default-form2" action="/emailEnquiry"
                              method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="text" name="name" id="formName1" placeholder="Name"
                                           required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-box">
                                    <input type="email" name="email" id="formEmail1" placeholder="Email"
                                           required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="text" name="phone" value="" id="formPhone1"
                                           placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-box">
                                        <textarea name="message" id="formMessage1"
                                                  placeholder="How may we help you ?" required=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="button-box">
                                        <button  class="btn-one" type="submit">
                                                <span class="txt">
                                                    Free Estimate
                                                </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!--Start Fact Counter style2 Area-->
       {{-- <div class="fact-counter-style2-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="fact-counter_box">
                            <div class="border-top-color"></div>
                            <ul class="clearfix">

                                <!--Start Single Fact Counter-->
                                <li class="single-fact-counter">
                                    <div class="round-box"></div>
                                    <div class="icon">
                                        <span class="icon-air-conditioning-1"></span>
                                    </div>
                                    <div class="outer-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="7088">0</span>
                                        </div>
                                        <div class="title">
                                            <h6>Project Completed</h6>
                                        </div>
                                    </div>
                                </li>
                                <!--End Single Fact Counter-->

                                <!--Start Single Fact Counter-->
                                <li class="single-fact-counter">
                                    <div class="round-box"></div>
                                    <div class="icon">
                                        <span class="icon-worker"></span>
                                    </div>
                                    <div class="outer-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="30">0</span>
                                            <i class="icon-plus"></i>
                                        </div>
                                        <div class="title">
                                            <h6>Team Members</h6>
                                        </div>
                                    </div>
                                </li>
                                <!--End Single Fact Counter-->

                                <!--Start Single Fact Counter-->
                                <li class="single-fact-counter">
                                    <div class="round-box"></div>
                                    <div class="icon">
                                        <span class="icon-rating-1"></span>
                                    </div>
                                    <div class="outer-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="1700">0</span>
                                            <i class="icon-plus"></i>
                                        </div>
                                        <div class="title">
                                            <h6>Satisfied Clients</h6>
                                        </div>
                                    </div>
                                </li>
                                <!--End Single Fact Counter-->

                                <!--Start Single Fact Counter-->
                                <li class="single-fact-counter">
                                    <div class="round-box"></div>
                                    <div class="icon">
                                        <span class="icon-skyscrapers"></span>
                                    </div>
                                    <div class="outer-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="17">0</span>
                                        </div>
                                        <div class="title">
                                            <h6>Total Branches</h6>
                                        </div>
                                    </div>
                                </li>
                                <!--End Single Fact Counter-->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Fact Counter style2 Area-->
--}}
    </section>
    <!--End Values Style3-->

    <!--Start Service Style1-->
    <section class="service-style1">
        <div class="container">
            <div class="service-style1__top">
                <div class="sec-title">
                    <div class="sub-title">
                        <div class="border-left"></div>
                        <h5>our services</h5>
                    </div>
                    <h2>What We Do</h2>
                </div>

            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="owl-carousel owl-theme thm-owl__carousel service-style1-carousel owl-nav-style-one"
                         data-owl-options='{
                                    "loop": false,
                                    "autoplay": true,
                                    "margin": 30,
                                    "nav": true,
                                    "dots": false,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"left icon-left-arrow\"></span>","<span class=\"right icon-next\"></span>"],
                                    "responsive": {
                                            "0": {
                                                "items": 1
                                            },
                                            "768": {
                                                "items": 2
                                            },
                                            "992": {
                                                "items": 3
                                            },
                                            "1200": {
                                                "items": 4
                                            }
                                        }
                                    }'>

                        <!--Start Single Service Style1-->
                        <div class="single-service-style1">
                            <div class="icon">
                                <span class="icon-air-conditioning"></span>
                            </div>
                            <div class="text">
                                <h3><a href="#">AC Installation</a></h3>
                               {{-- <p>survival strategies to ensure proactive dominat lion. At the end.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="#">Read More</a>
                                </div>--}}
                            </div>
                        </div>
                        <!--End Single Service Style1-->
                        <!--Start Single Service Style1-->
                        <div class="single-service-style1">
                            <div class="icon">
                                <span class="icon-maintenance"></span>
                            </div>
                            <div class="text">
                                <h3><a href="#">AC Maintenance</a></h3>
                               {{-- <p>survival strategies to ensure proactive dominat lion. At the end.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="#">Read More</a>
                                </div>--}}
                            </div>
                        </div>
                        <!--End Single Service Style1-->
                        <!--Start Single Service Style1-->
                        <div class="single-service-style1">
                            <div class="icon">
                                <span class="icon-repair"></span>
                            </div>
                            <div class="text">
                                <h3><a href="#">Heating Service</a></h3>
                               {{-- <p>survival strategies to ensure proactive dominat lion. At the end.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="#">Read More</a>
                                </div>--}}
                            </div>
                        </div>
                        <!--End Single Service Style1-->
                        <!--Start Single Service Style1-->
                        <div class="single-service-style1">
                            <div class="icon">
                                <span class="icon-air-conditioner"></span>
                            </div>
                            <div class="text">
                                <h3><a href="#">Indoor Air Quality</a></h3>
                               {{-- <p>survival strategies to ensure proactive dominat lion. At the end.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="#">Read More</a>
                                </div>--}}
                            </div>
                        </div>
                        <!--End Single Service Style1-->


                        <!--Start Single Service Style1-->
                        <div class="single-service-style1">
                            <div class="icon">
                                <span class="icon-air-conditioning"></span>
                            </div>
                            <div class="text">
                                <h3><a href="#">AC Installation</a></h3>
                                {{--<p>survival strategies to ensure proactive dominat lion. At the end.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="#">Read More</a>
                                </div>--}}
                            </div>
                        </div>
                        <!--End Single Service Style1-->
                        <!--Start Single Service Style1-->
                        <div class="single-service-style1">
                            <div class="icon">
                                <span class="icon-maintenance"></span>
                            </div>
                            <div class="text">
                                <h3><a href="#">AC Maintenance</a></h3>
                                {{--<p>survival strategies to ensure proactive dominat lion. At the end.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="#">Read More</a>
                                </div>--}}
                            </div>
                        </div>
                        <!--End Single Service Style1-->
                        <!--Start Single Service Style1-->
                        <div class="single-service-style1">
                            <div class="icon">
                                <span class="icon-repair"></span>
                            </div>
                            <div class="text">
                                <h3><a href="#">Heating Service</a></h3>
                              {{--  <p>survival strategies to ensure proactive dominat lion. At the end.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="#">Read More</a>
                                </div>--}}
                            </div>
                        </div>
                        <!--End Single Service Style1-->
                        <!--Start Single Service Style1-->
                        <div class="single-service-style1">
                            <div class="icon">
                                <span class="icon-air-conditioner"></span>
                            </div>
                            <div class="text">
                                <h3><a href="#">Indoor Air Quality</a></h3>
                               {{-- <p>survival strategies to ensure proactive dominat lion. At the end.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="#">Read More</a>
                                </div>--}}
                            </div>
                        </div>
                        <!--End Single Service Style1-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Service Style1-->

    <!--Start Our values Style1-->
    <section class="our-values-style1">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="our-values-style1__img">
                        <div class="inner">
                            <img src="assets/images/resources/our-values-style1-img-1.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="our-values-style1__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <div class="border-left"></div>
                                <h5>Our values</h5>
                            </div>
                            <h2>Our Core Values & Expertises<br> In Our Limit</h2>
                        </div>
                       {{-- <div class="text">
                            <p>Collaboratively administrate empowered markets via plug-and-play networks.
                                <u>Dynamically procrastinate</u> B2C users after installed.</p>
                        </div>--}}

                        <div class="our-values-style1__content-features">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="icon-technician"></span>
                                    </div>
                                    <div class="text">
                                        <h3>Experienced AC Service Engineers</h3>
                                        <p>Our technicians protection simply works better than any other product on
                                            the market and is the result.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-circuit"></span>
                                    </div>
                                    <div class="text">
                                        <h3>Smart Technology</h3>
                                        <p>Our technicians protection simply works better than any other product on
                                            the market and is the result.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-hand"></span>
                                    </div>
                                    <div class="text">
                                        <h3>AC AMC (Annual Maintenance) Plans Available</h3>
                                        <p>Our technicians protection simply works better than any other product on
                                            the market and is the result.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Our values Style1-->



    <!--Start Choose Style1-->
    <section class="choose-style1">
        <div class="choose-style1__pattern" style="background-image: url(assets/images/pattern/thm-pattern-1.png);">
        </div>
        <div class="choose-style1__shape-1">
            <img src="assets/images/shapes/choose-style1-shape-1.png" alt="">
        </div>
        <div class="choose-style1__inner">
            <div class="choose-style1__img-bg"
                 style="background-image: url(assets/images/resources/choose-style1-img-bg.jpg);">
                <div class="happy-customers-box-style1">
                    <div class="icon">
                        <span class="icon-reliability"></span>
                    </div>
                    <h3>Trusted by<br> 1000+ happy<br> customers</h3>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="choose-style1__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <div class="border-left"></div>
                                    <h5>Why choose us</h5>
                                </div>
                                <h2>Assured Air Conditioner Services</h2>
                            </div>
                            <div class="text">
                                <p>Extensive Contractor Services: we expect to continue our relationship
                                    long
                                    after your new equipment is installed. Our ongoing services are designed to keep
                                    your unit operating at peak efficiency without disruptive breakdowns.</p>
                            </div>
                            <div class="choose-style1__content-bottom">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-comment"></span>
                                                </div>
                                                Air conditioning Service
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-comment"></span>
                                                </div>
                                                Air Conditioning maintenance
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-comment"></span>
                                                </div>
                                                Heating Services
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-comment"></span>
                                                </div>
                                                Heating maintenance
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-comment"></span>
                                                </div>
                                                Air conditioning replacement
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-6">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-comment"></span>
                                                </div>
                                                Airconditioning installation
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-comment"></span>
                                                </div>
                                                Heating replacement
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-comment"></span>
                                                </div>
                                                Heating installation
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-comment"></span>
                                                </div>
                                                HVAC repair 7 emergency service
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Choose Style1-->

   {{-- <!--Start Fact Counter Area-->
    <section class="fact-counter-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="fact-counter_box">
                        <div class="border-top-color"></div>
                        <ul class="clearfix">

                            <!--Start Single Fact Counter-->
                            <li class="single-fact-counter">
                                <div class="round-box"></div>
                                <div class="icon">
                                    <span class="icon-air-conditioning-1"></span>
                                </div>
                                <div class="outer-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="7088">0</span>
                                    </div>
                                    <div class="title">
                                        <h6>Project Completed</h6>
                                    </div>
                                </div>
                            </li>
                            <!--End Single Fact Counter-->

                            <!--Start Single Fact Counter-->
                            <li class="single-fact-counter">
                                <div class="round-box"></div>
                                <div class="icon">
                                    <span class="icon-worker"></span>
                                </div>
                                <div class="outer-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="30">0</span>
                                        <i class="icon-plus"></i>
                                    </div>
                                    <div class="title">
                                        <h6>Team Members</h6>
                                    </div>
                                </div>
                            </li>
                            <!--End Single Fact Counter-->

                            <!--Start Single Fact Counter-->
                            <li class="single-fact-counter">
                                <div class="round-box"></div>
                                <div class="icon">
                                    <span class="icon-rating-1"></span>
                                </div>
                                <div class="outer-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="1700">0</span>
                                        <i class="icon-plus"></i>
                                    </div>
                                    <div class="title">
                                        <h6>Satisfied Clients</h6>
                                    </div>
                                </div>
                            </li>
                            <!--End Single Fact Counter-->

                            <!--Start Single Fact Counter-->
                            <li class="single-fact-counter">
                                <div class="round-box"></div>
                                <div class="icon">
                                    <span class="icon-skyscrapers"></span>
                                </div>
                                <div class="outer-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="17">0</span>
                                    </div>
                                    <div class="title">
                                        <h6>Total Branches</h6>
                                    </div>
                                </div>
                            </li>
                            <!--End Single Fact Counter-->

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fact Counter Area-->
--}}
    <!--Start  Additional Services Style1 Area-->
    <section class="additional-services-style1">
        <div class="additional-services-style1__bg"
             style="background-image: url(assets/images/pattern/thm-pattern-2.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="additional-services-style1__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <div class="border-left"></div>
                                <h5>our additional services</h5>
                            </div>
                            <h2>Choose the Right HVAC Contractor</h2>
                        </div>
                        <div class="text-top">
                            <p>Factory Trained Technicians: We only employ factory trained technicians, they’re
                                the best in the industry.Your assurance that the work will be done right the
                                first time.</p>
                        </div>
                        <div class="text-bottom">
                            <p>Extensive Contractor Services: we expect to continue our relationship
                                long after your new equipment is installed. Our ongoing services are designed to
                                keep your unit operating at peak efficiency without disruptive breakdowns.</p>
                        </div>
                        <div class="additional-services-style1__content-bottom">
                            <div class="row">
                                <div class="col-xl-6">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-maps-and-flags"></span>
                                            </div>
                                            Air conditioning Service
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-maps-and-flags"></span>
                                            </div>
                                            Air Conditioning maintenance
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-maps-and-flags"></span>
                                            </div>
                                            Heating Services
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-maps-and-flags"></span>
                                            </div>
                                            Heating maintenance
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-maps-and-flags"></span>
                                            </div>
                                            Air conditioning replacement
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-xl-6">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-maps-and-flags"></span>
                                            </div>
                                            Airconditioning
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-maps-and-flags"></span>
                                            </div>
                                            Installation
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-maps-and-flags"></span>
                                            </div>
                                            Heating replacement
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-maps-and-flags"></span>
                                            </div>
                                            Heating installation
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-maps-and-flags"></span>
                                            </div>
                                            HVAC repair 7 emergency service
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="additional-services-style1__img">
                        <div class="inner">
                            <img src="assets/images/resources/additional-services-style1-img-1.jpg" alt="" />
                            <div class="round-box1 zoominout-2"></div>
                            <div class="round-box2 float-bob-y"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End  Additional Services Style1 Area-->

    <div class="modal fade"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div style="border: none;background-color: transparent;" class="modal-content">
                <div class="modal-body">
                    <div class="owl-item active"><div class="single-service-style1">
                            <div class="icon">
                                <span class="icon-repair"></span>
                            </div>
                            <div class="text">
                                <h3>Thank You</h3>
                                <p>We've received your inquiry and a dedicated representative will reach out to you soon to discuss your specific requirements.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
