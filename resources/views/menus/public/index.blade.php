@extends('homepage.layouts.app') 

@section('header') 
<title>Menu</title> 
@endsection 

@section('content') 
@include('homepage.includes.nav')
<section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('assets/img/hero_2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Our Menu</h1>
              
            </div>
          </div>
        </div>

      </div>

    </section>
    
    <section class="section bg-light element-animate">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Our Menu</h2>
              <span class="back-text-dark">Menu</span>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('assets/img/dishes_4.jpg');"></div>
              <div class="text order-1">
                <h3>Grilled Caesar salad, shaved reggiano</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$12.00</p>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('assets/img/dishes_1.jpg');"></div>
              <div class="text">
                <h3>Spicy Calamari and beans</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$12.00</p>
                
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('assets/img/dishes_2.jpg');"></div>
              <div class="text order-1">
                <h3>Bacon wrapped wild gulf prawns</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$18.00</p>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('assets/img/dishes_3.jpg');"></div>
              <div class="text">
                <h3>Seared ahi tuna fillet*, honey-ginger sauce</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$16.00</p>
                
              </div>
              
            </div>

          </div>
        </div>
        

      </div>
    </section> <!-- .section -->

    <section class="section bg-light element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
            <span class="flaticon-cheers display-4 text-black d-block mb-4"></span>
            <h4 class="mb-4 text-primary">Drinks</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi, reprehenderit, nobis officia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
            <span class="flaticon-fish display-4 text-black d-block mb-4"></span>
            <h4 class="mb-4 text-primary">Sea Foods</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi, reprehenderit, nobis officia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
            <span class="flaticon-coffee-cup display-4 text-black d-block mb-4"></span>
            <h4 class="mb-4 text-primary">Cup Coffees</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi, reprehenderit, nobis officia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
            <span class="flaticon-salad display-4 text-black d-block mb-4"></span>
            <h4 class="mb-4 text-primary">Fresh Salad</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi, reprehenderit, nobis officia.</p>
          </div>
        </div>
      </div>
    </section>
    
    
    <section class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="row">
              <div class="col-md-12">
                <h3>Subsribe Newsletter</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ex temporibus magni ipsam inventore dolorum sunt, amet vel.</p>
              </div>

              <form action="" class="col-12">
                <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-md-0">
                  <input type="text" class="form-control" placeholder="Enter Email Address">
                </div>
                <div class="col-md-4">
                  <input type="submit" class="btn btn-primary btn-block" value="Subscribe">
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
	@include('homepage.includes.footer')
@endsection

