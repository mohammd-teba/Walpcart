@extends('website.layout.index')


@section('content')
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>
            Our Service
        </div>
    </section>



    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="about-info"  style="margin-top: 50px">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">

                            <h2 style="color: #22ced2">About Us</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>Walpcart is a platform that collects local and international brands in one place. We provide online store to the local market to improve customer service. We are making sure that every customer is satisfied.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img src="{{url(assets('website'))}}/images/slider2.jpg" class="img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <br>
    <!-- TEAM -->

    <!-- MENU-->
    <section id="menu" data-stellar-background-ratio="0.5">
        <div class="container" style="margin-top: 50px">

            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2 style="color: #22ced2"> Our Service</h2>

                    </div>
                </div>

                @foreach($services as $service)
                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="{{$service->image}}" class="image-popup" title="Project title">
                            <img src="{{$service->image}}"style="height: 307px" class="img-responsive" alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>{{$service->name}}</h3>
                                    <p>  {!! $service->description !!}</p>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>

                @endforeach
                <span></span>
            </div>

        </div>
    </section>





    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container" style="margin-top: 50px" >
            <div class="row">

                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s" style="margin-top: 50px">
                    <div id="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">

                    <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2 style="color: #22ced2">Contact Us</h2>
                        </div>
                    </div>

                    <!-- CONTACT FORM -->
                    <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                        <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                        <h6 class="text-success">Your message has been sent successfully.</h6>

                        <!-- IF MAIL NOT SENT -->
                        <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                            <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                            <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>



@endsection