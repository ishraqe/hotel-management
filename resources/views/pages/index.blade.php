
@extends('layout.main')

@section('content')

<section class="we-are-the-best">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="section-title" data-title="We are the best">We are the best</h2>
      </div>
      <!-- end col-12 -->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="content-box">
          <figure><img src="images/icon1.png" alt="Image"></figure>
          <h4>Free Breakfast</h4>
          <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod, tincidunt ut laoreet dolore magna aliquam  consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui</p>
          
        </div>
        <!-- end content-box --> 
      </div>
      <!-- end col-4 -->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="content-box">
          <figure><img src="images/icon2.png" alt="Image"></figure>
          <h4>Friendly Staff</h4>
          <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
            aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
        </div>
        <!-- end content-box --> 
      </div>
      <!-- end col-4 -->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="content-box">
          <figure><img src="images/icon3.png" alt="Image"></figure>
          <h4>Great Environment</h4>
          <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod, tincidunt ut laoreet dolore magna aliquam erat volutpat ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut</p>
        </div>
        <!-- end content-box --> 
      </div>
      <!-- end col-4 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end we-are-the-best -->
<section class="gallery">
  <div class="container">
    <div class="col-xs-12">
        <h2 class="section-title" data-title="Our Room's">Our Room's</h2>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <ul class="filter">
          <li><a href="#" data-filter="*" class="current">ALL<br>
            <span></span></a></li>
          <li><a href="#" data-filter=".single">Single<br>
            <span></span></a></li>
          <li><a href="#" data-filter=".family">Family<br>
            <span></span></a></li>
          <li><a href="#" data-filter=".delux">Delux<br>
            <span></span></a></li>
        </ul>
        <!-- end filter -->
        <ul class="gallery-grid">
          @foreach($room_type as $room_types)
            @if($room_types->type==1)
            <li class="single">
            @elseif($room_types->type==2)
            <li class="family">
            @elseif($room_types->type==3)
            <li class="delux">
            @else  
            @endif 

            <figure> <img src="{{substr($room_types->room_image,1)}}" alt="Image" class="image">
              <figcaption>
                <div class="description"> {{$room_types->room_description}} <a href="{{substr($room_types->room_image,1)}}" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
           
          @endforeach
          
        </ul>
      </div>
      <!-- end col-12 --> 
      <div class="col-xs-12 text-center"> <a href="{{url('/rooms')}}" class="btn-orange-border-small">View More</a> </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>




<!-- end our-rooms -->
<section class="happy-travellers">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="section-title" data-title="Happy Travellers">Happy Travellers</h2>
      </div>
      <!-- end col-12 -->
      <div class="col-xs-12">
        <div class="testimonials-carousel-new">
          <div class="item">
            <div class="testimonial-left">
              <div class="testimonial-box">
                <h3>Excellent trip! </h3>
                <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="about">About</span> <a href="#" class="room-type">Family Room</a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
              </div>
              <!-- end testimonial-box -->
              <div class="testimonial-user"> <img src="images/testimonial-thumb1.jpg" alt="Image">
                <h5 class="name">Julia Joeh</h5>
                <span class="place">Ukraine, Kyiv</span> </div>
              <!-- end testimonial-user --> 
            </div>
            <!-- end testimonial-left --> 
          </div>
          <!-- end item -->
          <div class="item">
            <div class="testimonial-right">
              <div class="testimonial-box">
                <h3>Awesome! </h3>
                <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="about">About</span> <a href="#" class="room-type">Double Room</a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
              </div>
              <!-- end testimonial-box -->
              <div class="testimonial-user"> <img src="images/testimonial-thumb2.jpg" alt="Image">
                <h5 class="name">Mark Tvain</h5>
                <span class="place">New York, USA</span> </div>
              <!-- end testimonial-user --> 
            </div>
            <!-- end testimonial-right --> 
          </div>
          <!-- end item -->
          <div class="item">
            <div class="testimonial-left">
              <div class="testimonial-box">
                <h3>Excellent trip! </h3>
                <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="about">About</span> <a href="#" class="room-type">Family Room</a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
              </div>
              <!-- end testimonial-box -->
              <div class="testimonial-user"> <img src="images/testimonial-thumb1.jpg" alt="Image">
                <h5 class="name">Julia Joeh</h5>
                <span class="place">Ukraine, Kyiv</span> </div>
              <!-- end testimonial-user --> 
            </div>
            <!-- end testimonial-left --> 
          </div>

          <!-- end item -->
          <div class="item">
            <div class="testimonial-right">
              <div class="testimonial-box">
                <h3>Awesome! </h3>
                <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="about">About</span> <a href="#" class="room-type">Double Room</a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
              </div>
              <!-- end testimonial-box -->
              <div class="testimonial-user"> <img src="images/testimonial-thumb2.jpg" alt="Image">
                <h5 class="name">Mark Tvain</h5>
                <span class="place">New York, USA</span> </div>
              <!-- end testimonial-user --> 
            </div>
            <!-- end testimonial-right --> 
          </div>
          <!-- end item -->
          <div class="item">
            <div class="testimonial-left">
              <div class="testimonial-box">
                <h3>Excellent trip! </h3>
                <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="about">About</span> <a href="#" class="room-type">Family Room</a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
              </div>
              <!-- end testimonial-box -->
              <div class="testimonial-user"> <img src="images/testimonial-thumb1.jpg" alt="Image">
                <h5 class="name">Julia Joeh</h5>
                <span class="place">Ukraine, Kyiv</span> </div>
              <!-- end testimonial-user --> 
            </div>
            <!-- end testimonial-left --> 
          </div>
          <!-- end item -->
          <div class="item">
            <div class="testimonial-right">
              <div class="testimonial-box">
                <h3>Awesome! </h3>
                <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="about">About</span> <a href="#" class="room-type">Double Room</a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
              </div>
              <!-- end testimonial-box -->
              <div class="testimonial-user"> <img src="images/testimonial-thumb2.jpg" alt="Image">
                <h5 class="name">Mark Tvain</h5>
                <span class="place">New York, USA</span> </div>
              <!-- end testimonial-user --> 
            </div>
            <!-- end testimonial-right --> 
          </div>
          <!-- end item --> 
        </div>
        <!-- end testimonials-carousel --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end happy-travellers -->
<section class="home-book-now" data-stellar-background-ratio="0.8">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2>Enjoy your vacation with us</h2>
        <h5>Fugit qui quia ut, non omnis dignissimos</h5>
        <a href="{{url('/rooms')}}" class="btn-orange-large">Book Now</a> </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end home-book-now -->
<section class="hotel-facilities">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="section-title" data-title="Hotel Facilities">Hotel Facilities</h2>
      </div>
      <!-- end col-12 -->
      <div class="col-md-9 col-sm-12 col-xs-12">
        <figure class="facility-box"> <img src="images/facilities-image1.jpg" alt="Image">
          <figcaption>
            <div class="inner">
              <h4><a href="#">Swimming pool</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim veniam, quis nod exerci tation ullamcorper suscipit lonisl ut aliquip ex ea commodo consequat.</p>
            </div>
            <!-- end inner --> 
          </figcaption>
        </figure>
      </div>
      <!-- end col-9 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <figure class="facility-box"> <img src="images/facilities-image2.jpg" alt="Image">
          <figcaption>
            <div class="inner">
              <h4><a href="#">Restaurants</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </div>
            <!-- end inner --> 
          </figcaption>
        </figure>
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <figure class="facility-box"> <img src="images/facilities-image3.jpg" alt="Image">
          <figcaption>
            <div class="inner">
              <h4><a href="#">SPA & Wellness</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </div>
            <!-- end inner --> 
          </figcaption>
        </figure>
      </div>
      <!-- end col-3 -->
      <div class="col-md-6 col-sm-12 col-xs-12">
        <figure class="facility-promo-box"> <img src="images/facilities-image4.jpg" alt="Image">
          <figcaption>
            <div class="ver-middle">
              <div class="inner">
                <h3>Free Kids Zone</h3>
                <h4>Special offer. From 99$/per week</h4>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end ver-middle --> 
          </figcaption>
        </figure>
      </div>
      <!-- end col-6 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <figure class="facility-see-more"> <img src="images/facilities-image5.jpg" alt="Image">
          <figcaption>
            <div class="ver-middle">
              <div class="inner"> <a href="#">See More</a>
                <p>7 Total</p>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end ver-middle --> 
          </figcaption>
        </figure>
      </div>
      <!-- end col-3 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end hotel-facilities -->
<section class="newsletter-bar">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="subscribe-box">
          <div class="row inner">
            <div class="col-md-6  col-sm-6 col-xs-12">
              <h4>Subscribe to our Newsletter</h4>
              <h5>& Discover the best offers!</h5>
            </div>
            <!-- end col-6 -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <form>
                <input type="text" placeholder="Your e-mail address">
                <button type="submit"><span>Send</span> <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
              </form>
            </div>
            <!-- end col-6 --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end subscribe-box --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end newsletter-bar -->
<section class="home-room-slider">
  <div class="bg-image"></div>
  <!-- end bg-image -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12"> &nbsp; </div>
      <!-- end col-6 -->
      <div class="col-md-6  col-sm-12 col-xs-12">
        <div class="home-room-carousel">
          <div class="room-box item">
            <h3 class="room-type"><a href="#">Deluxe Room</a></h3>
            <div class="rating"><i class="fa fa-star" aria-hidden="true"></i> <span>234 reviews</span> </div>
            <!-- end rating -->
            <p class="description">Consectetuer adipiscing elit, seddiam nonummy nibh euismod, tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation mcorper.</p>
            <ul class="home-room-thumbs">
              <li><img src="images/room-slider-thumb1.jpg" alt="Image"></li>
              <li><img src="images/room-slider-thumb2.jpg" alt="Image"></li>
              <li><img src="images/room-slider-thumb3.jpg" alt="Image"></li>
              <li><img src="images/room-slider-thumb4.jpg" alt="Image"></li>
            </ul>
          </div>
          <!-- end room-box -->
          <div class="room-box item">
            <h3 class="room-type"><a href="#">Family Room</a></h3>
           
            <div class="rating"> <span>374 reviews</span> </div>
            
            <p class="description">Consectetuer adipiscing elit, seddiam nonummy nibh euismod, tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation mcorper.</p>
            <ul class="home-room-thumbs">
              <li><img src="images/room-slider-thumb5.jpg" alt="Image"></li>
              <li><img src="images/room-slider-thumb6.jpg" alt="Image"></li>
              <li><img src="images/room-slider-thumb7.jpg" alt="Image"></li>
              <li><img src="images/room-slider-thumb8.jpg" alt="Image"></li>
            </ul>
          </div> 
          <!-- end room-box
         
          <!-- end room-box --> 
        </div>
        <!-- end home-room-carousel --> 
      </div>
      <!-- end col-6 --> 
    </div>
  </div>
  <!-- end container --> 
</section>
<!-- end home-room-slider -->
<section class="save-up">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>Save up to <span>50<span>%</span></span></h2>
        <h5>at summer vacation</h5>
        <p>Consectetuer adipiscing elit, seddiam nonummy nibh euismod, tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation mcorper.</p>
        <a href="{{url('/rooms')}}" class="btn-orange-large">Book now</a> </div>
      <!-- end col-6 -->
      <div class="col-md-4"> &nbsp; </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
@endsection