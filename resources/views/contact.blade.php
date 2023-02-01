@extends('homepage.layouts.app')
 
@section('title', 'Contact Us')
 
@section('content')
@include('homepage.includes.nav')
<section class="home-slider-loop-false  inner-page owl-carousel">
    <div class="slider-item" style="background-image: url('assets/img/hero_2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Contact Us</h1>
              
            </div>
          </div>
        </div>

    </div>

</section>


    <section class="section element-animate">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Get In Touch</h2>
              <span class="back-text">Contact Form</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63059.87744157601!2d125.47107985820313!3d8.949802900000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c041206420af%3A0x554d8591a32e605b!2sWeegool&#39;s%20Grill%20Haus!5e0!3m2!1sen!2sph!4v1674281630985!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          
          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
              <h4 class="mb-5">Contact Details</h4>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>Montilla Blvd., Butuan City, 8600 Agusan del Norte, Philippines</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>+1 242 4942 290</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>info@yourdomain.com</span>
                </p>
              </div>

          </div>
        </div>
      </div>

    </section>
    @include('homepage.includes.footer')
@endsection