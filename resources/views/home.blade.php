@extends('homepage.layouts.app')
 
@section('title', 'Page Title')

@section('links')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="js/app.js"></script>
@endsection
 
@section('content')

        @include('homepage.includes.nav')
        <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('assets/img/header_1.jpg');">
            
            <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate">
                <h1>Delicious Meals</h1>
                <p class="mb-5">Try our famous specialty Chicken Inato and experience Butuan City.</p>
                <p><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p>
                </div>
            </div>
            </div>

        </div>

        <div class="slider-item" style="background-image: url('assets/img/header_2.jpg');">
            <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate">
                <h1>Famous Specialty</h1>
                <p class="mb-5">Enjoy each bite of our delicious meals at an affordable price.</p>
                <p><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p>
                </div>
            </div>
            </div>
            
        </div>

        </section>
        <!-- END slider -->
        

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
                <h4 class="mb-4 text-primary">Vegetables</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi, reprehenderit, nobis officia.</p>
            </div>
            </div>
        </div>
        </section>
        
        <section class="section element-animate">

        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center heading-wrap">
                <h2>Special Dishes</h2>
                <span class="back-text">Dishes</span>
                </div>
            </div>
            </div>
        </div>

        <div class="owl-carousel centernonloop">
            <a href="#" class="item-dishes">
            <div class="text">
                <p class="dishes-price">$11.50</p>
                <h2 class="dishes-heading">Organic tomato salad, gorgonzola cheese, capers</h2>
            </div>
            <img src="assets/img/dishes_1.jpg" alt="" class="img-fluid">
            </a>
            <a href="#" class="item-dishes">
            <div class="text">
                <p class="dishes-price">$12.00</p>
                <h2 class="dishes-heading">Baked broccoli</h2>
            </div>
            <img src="assets/img/dishes_2.jpg" alt="" class="img-fluid">
            </a>
            <a href="#" class="item-dishes">
            <div class="text">
                <p class="dishes-price">$11.00</p>
                <h2 class="dishes-heading">Spicy meatballs</h2>
            </div>
            <img src="assets/img/dishes_3.jpg" alt="" class="img-fluid">
            </a>
            <a href="#" class="item-dishes">
            <div class="text">
                <p class="dishes-price">$12.00</p>
                <h2 class="dishes-heading">Eggplant parmigiana</h2>
            </div>
            <img src="assets/img/dishes_4.jpg" alt="" class="img-fluid">
            </a>
        </div>
        </section> <!-- .section -->

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

    

        <section class="section element-animate">

        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center heading-wrap">
                <h2>Testimonial</h2>
                <span class="back-text">Testimonial</span>
                </div>
            </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <blockquote class="testimonial">
                <p>&ldquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, obcaecati? Quis eum minus, sequi atque quisquam ducimus aliquam veritatis nobis cum iusto neque enim explicabo maxime natus doloribus, fuga sunt. &rdquo;</p>
                <div class="d-flex author">
                    <img src="assets/img/person_1.jpg" alt="" class="mr-4">
                    <div class="author-info">
                    <h4>Mellisa Howard</h4>
                    <p>CEO, XYZ Company</p>
                    </div>
                </div>  
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="testimonial">
                <p>&ldquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, obcaecati? Quis eum minus, sequi atque quisquam ducimus aliquam veritatis nobis cum iusto neque enim explicabo maxime natus doloribus, fuga sunt. &rdquo;</p>
                <div class="d-flex author">
                    <img src="assets/img/person_2.jpg" alt="" class="mr-4">
                    <div class="author-info">
                    <h4>Mike Richardson</h4>
                    <p>CEO, XYZ Company</p>
                    </div>
                </div>  
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="testimonial">
                <p>&ldquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, obcaecati? Quis eum minus, sequi atque quisquam ducimus aliquam veritatis nobis cum iusto neque enim explicabo maxime natus doloribus, fuga sunt. &rdquo;</p>
                <div class="d-flex author">
                    <img src="assets/img/person_3.jpg" alt="" class="mr-4">
                    <div class="author-info">
                    <h4>Charles White</h4>
                    <p>CEO, XYZ Company</p>
                    </div>
                </div>  
                </blockquote>
            </div>
            </div>
        </div>
        </section> <!-- .section -->

        <section class="section element-animate">
        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center heading-wrap">
                <h2>Announcements</h2>
                <span class="back-text">Announcements</span>
                </div>
            </div>
            </div>
        </div>
       
        <div class="container">
            <div class="row">
            <announcements-list></announcements-list>
            @foreach ($announcements as $announcement)
            <div class="col-md-6">
                <div class="blog d-block d-lg-flex" v-for="announcement in announcements" :key="announcement.id">
                @if(old('image'))
                    <div class="bg-image" style="background-image: url({{ asset('storage/' . $announcement->image) }});"></div>
                @elseif($announcement->image)
                    <div class="bg-image" style="background-image: url('assets/img/dishes_1.jpg');"></div>
                @endif
                        <div class="text">
                            <h3 class="header">{{$announcement->header}}</h3>
                            <p class="sched-time">
                            <span><span class="fa fa-calendar"></span>{{$announcement->date_added}}</span> <br>
                            </p>
                            <p class="description">{{ strip_tags($announcement->description) }}</p>
                            
                            <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                        </div>
                </div>
            </div>
            @endforeach
            <!--<div class="col-md-6">
                <div class="blog d-block d-lg-flex">
                <div class="bg-image" style="background-image: url('assets/img/dishes_1.jpg');"></div>
                <div class="text">
                    <h3>How to cook beef steak with sauce</h3>
                    <p class="sched-time">
                    <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                    
                    <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                    
                </div>
                
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog d-block d-lg-flex">
                <div class="bg-image" style="background-image: url('assets/img/dishes_2.jpg');"></div>
                <div class="text">
                    <h3>How to cook beef steak with sauce</h3>
                    <p class="sched-time">
                    <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                    
                    <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                    
                </div>
                
                </div>
            </div>-->
            </div>
        </div>

        </section> <!-- .section -->

        
        <section class="py-5 bg-light">
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

            <!-- Portfolio Modals-->
            <!-- Portfolio item 1 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Threads
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Illustration
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item 2 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Explore
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Graphic Design
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item 3 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Finish
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Identity
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item 4 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Lines
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Branding
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item 5 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Southwest
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Website Design
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item 6 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Window
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Photography
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection