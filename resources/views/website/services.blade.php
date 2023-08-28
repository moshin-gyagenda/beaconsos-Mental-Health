@extends('website.layouts.master')
@section('content')

@include('website.layouts.header')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/business.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Services</h1>
          </div>
        </div>
      </div>
    </section>



    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Services</span>
                    <h2>We Can Help You With This Situation</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img" style="background-image: url(images/relation.jpg);"></div>
                        <div class="text">
                            <h2>Relation Problem</h2>
                            <p>If you're facing difficulties in your personal relationships, our counseling services can help you work through and resolve those issues. Our compassionate counselors are here to support you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img" style="background-image: url(images/contact.jpg);"></div>
                        <div class="text">
                            <h2>Couples Counseling</h2>
                            <p>Our couples counseling sessions provide a safe space for you and your partner to communicate openly and address any challenges you may be experiencing. Let us assist you in strengthening your relationship.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img order-md-last" style="background-image: url(images/health.webp);"></div>
                        <div class="text">
                            <h2>Health Problems</h2>
                            <p>If you're struggling with mental health issues, our experienced counselors can help you navigate through the difficulties and provide guidance on maintaining emotional well-being.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img order-md-last" style="background-image: url(images/family.jpg);"></div>
                        <div class="text">
                            <h2>Family Problem</h2>
                            <p>Family dynamics can be challenging, but our family counseling services can assist your family in developing healthier relationships and effective communication.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img" style="background-image: url(images/personal.jpg);"></div>
                        <div class="text">
                            <h2>Personal Problem</h2>
                            <p>If you're facing personal challenges or feeling overwhelmed, our counselors can provide support and guidance to help you cope and develop resilience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-wrap d-flex">
                        <div class="img" style="background-image: url(images/business.jpg);"></div>
                        <div class="text">
                            <h2>Business Problem</h2>
                            <p>Running a business can be stressful. Our counseling services can assist you in navigating business challenges, managing stress, and finding work-life balance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('website.layouts.footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    @endsection
