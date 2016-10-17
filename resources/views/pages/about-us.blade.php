@extends('layout.master')

@section('content')
<!-- end int-header -->
<section class="fun-facts" id="process">
  <div class="container">
    <div class="row">
      <div class="fun-box">
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="fact-box"> <span class="number odometer" id="1">0000</span>
            <h5>Happy Customers</h5>
            <span class="bar green"> </div>
          <!-- end fact-box --> 
        </div>
        <!-- end col-3 -->
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="fact-box"> <span class="number odometer" id="2">0000</span>
            <h5>Awwards</h5>
            <span class="bar red"> </div>
          <!-- end fact-box --> 
        </div>
        <!-- end col-3 -->
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="fact-box"> <span class="number odometer" id="3">0000</span>
            <h5>With Pets</h5>
            <span class="bar purple"> </div>
          <!-- end fact-box --> 
        </div>
        <!-- end col-3 -->
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="fact-box"> <span class="number odometer" id="4">0000</span>
            <h5>Cups of Coffee</h5>
            <span class="bar orange"> </div>
          <!-- end fact-box --> 
        </div>
        <!-- end col-3 --> 
      </div>
      <!-- end fun-box --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end fun-facts -->
<section class="what-we-offer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="section-title" data-title="What We Offer?">What We Offer?</h2>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row -->
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <figure class="image"><img src="images/we-offer1.jpg" alt="Image"></figure>
      </div>
      <!-- end col-6 -->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="content-box">
          <h3>Modern Rooms</h3>
          <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod, tincidunt ut laoreet dolore magn.aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation. </p>
          <a href="#" class="btn-orange-small">Choose room</a> </div>
        <!-- end content-right --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row -->
    <div class="row">
    <div class="col-md-6 col-sm-6 visible-xs">
        <figure class="image"><img src="images/we-offer2.jpg" alt="Image"></figure>
      </div>
      <!-- end col-6 --> 
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="content-box">
          <h3>Hotel Facilities</h3>
          <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod, tincidunt ut laoreet dolore magn.aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation. </p>
          <a href="#" class="btn-orange-small">See all facilities</a> </div>
        <!-- end content-left --> 
      </div>
      <!-- end col-6 -->
      <div class="col-md-6 col-sm-6 hidden-xs">
        <figure class="image"><img src="images/we-offer2.jpg" alt="Image"></figure>
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row -->
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <figure class="image last"><img src="images/we-offer3.jpg" alt="Image"></figure>
      </div>
      <!-- end col-6 -->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="content-box">
          <h3>Excelent Services</h3>
          <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod, tincidunt ut laoreet dolore magn.aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation. </p>
          <a href="#" class="btn-orange-small">Choose room</a> </div>
        <!-- end content-right --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end what-we-offer -->
<section class="our-history">
  <h2>Our History</h2>
  <ul class="history-carousel">
    <li class="item"><span class="year">2009</span>
      <div class="description">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <span>sed diam</span> nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
      </div>
      <!-- description --> 
    </li>
    <li class="item"><span class="year">2011</span>
      <div class="description">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <span>sed diam</span> nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
      </div>
      <!-- description --> 
    </li>
    <!-- end item -->
    <li class="item"><span class="year">2013</span>
      <div class="description">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <span>sed diam</span> nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
      </div>
      <!-- description --> 
    </li>
    <li class="item"><span class="year">2015</span>
      <div class="description">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <span>sed diam</span> nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
      </div>
      <!-- description --> 
    </li>
  </ul>
  <!-- end history-carousel --> 
  
</section>
<!-- end our-history -->
<section class="look-in">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2>What are you look in?</h2>
        <h5>Ut wisi enim ad minim veniam, qconsequat</h5>
        <a href="blog.html" class="btn-green-large">Go to our blog posts</a> </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end look-in -->
<section class="our-team">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="section-title" data-title="Our Team">Our Team</h2>
      </div>
      <!-- end col-12 -->
      
      <ul class="team-carousel">
        <li class="item">
          <figure class="team-member"> <img src="images/team1.jpg" alt="Image">
            <figcaption>
              <h4>Sara Odonell</h4>
              <small>Manager</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
        <li class="item">
          <figure class="team-member"> <img src="images/team2.jpg" alt="Image">
            <figcaption>
              <h4>Julia Patison</h4>
              <small>Developer</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
        <li class="item">
          <figure class="team-member"> <img src="images/team3.jpg" alt="Image">
            <figcaption>
              <h4>Nick Parker</h4>
              <small>Specialist</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
        <li class="item">
          <figure class="team-member"> <img src="images/team4.jpg" alt="Image">
            <figcaption>
              <h4>John Maladery</h4>
              <small>Manager</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
        <li class="item">
          <figure class="team-member"> <img src="images/team1.jpg" alt="Image">
            <figcaption>
              <h4>Sara Odonell</h4>
              <small>Manager</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
        <li class="item">
          <figure class="team-member"> <img src="images/team2.jpg" alt="Image">
            <figcaption>
              <h4>Julia Patison</h4>
              <small>Developer</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
        <li class="item">
          <figure class="team-member"> <img src="images/team3.jpg" alt="Image">
            <figcaption>
              <h4>Nick Parker</h4>
              <small>Specialist</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
        <li class="item">
          <figure class="team-member"> <img src="images/team4.jpg" alt="Image">
            <figcaption>
              <h4>John Maladery</h4>
              <small>Manager</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
        <li class="item">
          <figure class="team-member"> <img src="images/team1.jpg" alt="Image">
            <figcaption>
              <h4>Sara Odonell</h4>
              <small>Manager</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
        <li class="item">
          <figure class="team-member"> <img src="images/team2.jpg" alt="Image">
            <figcaption>
              <h4>Julia Patison</h4>
              <small>Developer</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
        <li class="item">
          <figure class="team-member"> <img src="images/team3.jpg" alt="Image">
            <figcaption>
              <h4>Nick Parker</h4>
              <small>Specialist</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
        <li class="item">
          <figure class="team-member"> <img src="images/team4.jpg" alt="Image">
            <figcaption>
              <h4>John Maladery</h4>
              <small>Manager</small>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </figcaption>
          </figure>
          <!-- end team-member --> 
        </li>
        <!-- end item -->
      </ul>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end our-team -->
<section class="featured-partners">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2>Featured Partners</h2>
        <ul class="partners-carousel">
          <li class="item">
            <figure><img src="images/partner1.png" alt="Image"></figure>
          </li>
          <li class="item">
            <figure><img src="images/partner2.png" alt="Image"></figure>
          </li>
          <li class="item">
            <figure><img src="images/partner3.png" alt="Image"></figure>
          </li>
          <li class="item">
            <figure><img src="images/partner4.png" alt="Image"></figure>
          </li>
          <li class="item">
            <figure><img src="images/partner5.png" alt="Image"></figure>
          </li>
          <li class="item">
            <figure><img src="images/partner6.png" alt="Image"></figure>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- end featured-partners -->
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
<section class="mini-gallery">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="section-title" data-title="Gallery">Gallery</h2>
      </div>
      <!-- end col-12 -->
      <div class="col-xs-12">
        <ul class="masonry">
          <li>
            <figure> <img src="images/gallery1.jpg" alt="Image" class="image">
              <figcaption>
                <div class="description"> Deck Pool <a href="images/gallery1.jpg" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
          <li>
            <figure> <img src="images/gallery2.jpg" alt="Image" class="image">
              <figcaption>
                <div class="description"> Fancy Bathroom<a href="images/gallery2.jpg" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
          <li class="half">
            <figure> <img src="images/gallery3.jpg" alt="Image" class="image">
              <figcaption>
                <div class="description"> Happiness<a href="images/gallery3.jpg" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
          <li class="half">
            <figure class="see-more"> <img src="images/gallery4.jpg" alt="Image" class="image">
              <figcaption> <a href="gallery.html">See more</a> </figcaption>
            </figure>
          </li>
        </ul>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end gallery -->
@endsection