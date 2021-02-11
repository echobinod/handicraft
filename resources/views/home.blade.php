@extends('layout.mainlayout')
@section('content')
<div class="container-fluid splash" id="splash">
   <div class="container">
     {{-- <img src="https://s-media-cache-ak0.pinimg.com/736x/71/9e/59/719e59481d2be40a77ab6c3386fc0a45--photoshop-illustrator-illustrator-tutorials.jpg" alt="Portrait of Mr. Roboto" class="profile-image">  --}}
     <h1>Namaste!</h1> 
     <h1 class="intro-text"><span class="lead" id="typed">Welcome to </span></h1>
     <span class="continue"><a href="#about"><i class="fa fa-angle-down"></i></a></span>
   </div>
 </div>
  <!-- About Section -->
  <section class="success" id="about">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 text-center">
               <h2>About Us</h2>
               <hr class="star-light">
           </div>
       </div>
       <div class="row">
           
           <div class="col-lg-12">
               <p class="content-text">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                   Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                   It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
               </p>
        </div>
           
       </div>
       <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-8 col-lg-offset-2 text-center contact-button">
               <a href="#contact" class="btn btn-lg btn-outline">
                   <i class="fa fa-envelope"></i> Contact Us
               </a>
           </div>
          </div>
       </div>
   </div>
</section>

 <!-- Products -->
     <div class="container-fluid portfolio-container-holder content-section" id="portfolio">
       <div class="portfolio-container container">
          <h2 class="text-center">Product Catlog</h2>
       <hr class="star-portfolio">
          <div class="row">
             
             <div class="col-md-4 col-xs-12 col-sm-6 portfolio-card-holder">
                <div class=" portfolio-card">
                   <img src="{{asset('images/photo 6.jpg')}}" alt="Portfolio" class="img-responsive portfolio-img">
 
                   <div class="portfolio-img-desc">
                      <p>Lorem ipsum dolor sit amet</p>
                   </div>			
                </div>
             </div>
             <div class="col-md-4 col-xs-12 col-sm-6 portfolio-card-holder">
                <div class=" portfolio-card">
                   <img src="{{asset('images/photo 1.jpg')}}" alt="Portfolio" class="img-responsive portfolio-img">
 
                   <div class="portfolio-img-desc">
                      <p>Lorem ipsum dolor sit amet</p>
                   </div>			
                </div>
             </div>
             <div class="col-md-4 col-xs-12 col-sm-6 portfolio-card-holder">
                <div class=" portfolio-card">
                   <img src="{{asset('images/photo 2.jpg')}}" alt="Portfolio" class="img-responsive portfolio-img">
 
                   <div class="portfolio-img-desc">
                      <p>Lorem ipsum dolor sit amet</p>
                   </div>			
                </div>
             </div>
             <div class="col-md-4 col-xs-12 col-sm-6 portfolio-card-holder">
                <div class=" portfolio-card">
                   <img src="{{asset('images/photo 3.jpg')}}" alt="Portfolio" class="img-responsive portfolio-img">
 
                   <div class="portfolio-img-desc">
                      <p>Lorem ipsum dolor sit amet</p>
                   </div>			
                </div>
             </div>
             <div class="col-md-4 col-xs-12 col-sm-6 portfolio-card-holder">
                <div class=" portfolio-card">
                   <img src="{{asset('images/photo 4.jpg')}}" alt="Portfolio" class="img-responsive portfolio-img">
 
                   <div class="portfolio-img-desc">
                      <p>Lorem ipsum dolor sit amet</p>
                   </div>			
                </div>
             </div>
             <div class="col-md-4 col-xs-12 col-sm-6 portfolio-card-holder">
                <div class=" portfolio-card">
                   <img src="{{asset('images/photo 5.jpg')}}" alt="Portfolio" class="img-responsive portfolio-img">
 
                   <div class="portfolio-img-desc">
                      <p>Lorem ipsum dolor sit amet</p>
                   </div>			
                </div>
             </div>
             
          </div>
       </div>
    </div>
   
@endsection
