@extends('website.layouts.master')
@section('content')

@include('website.layouts.header')
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/relation.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Our Mission</span>
                    <h2>Providing Compassionate Support and Raising Awareness</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ftco-animate">
                    <div class="text">
                        <h3 class="mb-4">Our Mission</h3>
                        <p>Our mission is to provide compassionate support and resources to individuals who are struggling with suicidal thoughts, and to raise awareness about mental health in our community.</p>
                        <h3 class="mb-4">Our Vision</h3>
                        <p>Our vision is a world where mental health is treated with the same importance as physical health, and where every individual has access to the support and resources they need to live a healthy and fulfilling life.</p>
                        <h3 class="mb-4">Our Goals</h3>
                        <ul>
                            <li>Provide crisis intervention services and support to individuals who are struggling with suicidal thoughts.</li>
                            <li>Offer counseling services and support groups to individuals who are dealing with mental health issues.</li>
                            <li>Raise awareness about mental health and suicide prevention through education and advocacy efforts.</li>
                            <li>Collaborate with community organizations and mental health professionals to improve access to mental health services.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 ftco-animate">
                    <div class="text">
                        <h3 class="mb-4">For Donations</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Donation</th>
                                    <th>Tier 1</th>
                                    <th>Tier 2</th>
                                    <th>Tier 3</th>
                                    <th>Tier 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Amount</td>
                                    <td>$10+</td>
                                    <td>$100+</td>
                                    <td>$500+</td>
                                    <td>$1000+</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>The BEACON SOS is not only a foundation but a family led by some of the great doctors, scientists, and religious personnel ready to give services to any members of this society assistance in the devastating times of suicide.</p>
                        <p>Our team is duty-bent to provide the best services in assisting our society for the good of mankind.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('website.layouts.footer')


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @endsection
