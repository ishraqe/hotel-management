@extends('layout.master')

@section('content')
<section class="contact">
  <div class="container">
    <div class="contact-box">
    <div class="left-side">
      <h3 class="title">Send us a Message</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
        <form id="contact" name="contact" method="post">
          <div class="form-group half">
            <label>Your name</label>
            <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
            </div>
            <!-- end form-group -->
            <div class="form-group half">
            <label>Your E-mail</label>
            <input type="text" placeholder="Enter Your Name" name="email" id="email" required>
            </div>
            <!-- end form-group -->
            <div class="form-group">
            <label>Your Message</label>
            <textarea placeholder="Enter Your Message" name="message" id="message" required></textarea>
            </div>
            <!-- end form-group -->
            <div class="form-group">
            <button id="submit" type="submit" name="submit" class="btn-orange-large">Send Message</button>
            </div>
            <!-- end form-group -->
        </form>
        <div id="success" class="alert alert-success" role="alert">
          <p>Your message was sent successfully! We will be in touch as soon as we can.</p>
        </div>
        <!-- end success -->
        <div id="error" class="alert alert-danger" role="alert">
          <p>Something went wrong, try refreshing and submitting the form again.</p>
        </div>
        <!-- end error -->
    </div>
    <!-- end left-side -->
    <div class="right-side">
      <h3 class="title">Contact Information</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
        <address>
          <small>Address</small>
            4b Long Street, Miami, USA
        </address>
        <address>
          <small>Phone</small>
            +3230-45-45-67
        </address>
        <address>
        <small>E-mail</small>
        <a href="#">greendream@mail.com</a>
        </address>
        <ul class="social-media">
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <!-- end right-side -->
      </div>
        <!-- end contact-box -->
        </div>
        <!-- end container -->
    
</section>
<!-- end contact -->
<section class="contact-team">
  <div class="container">
      <div class="row">
          <div class="col-xs-12">
              <h4 class="title">Need our Help?</h4>
            </div>
          <!-- end col-12 -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <figure class="team-member">
                  <img src="images/contact-team1.jpg" alt="Image" class="image">
                    <figcaption>
                        <h3>Sara Odonell</h3>
                            <small>Manager</small>
                            <span><i class="fa fa-phone" aria-hidden="true"></i> +3230-45-45-67</span>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i> 
                            <a href="#">saraodonell@mail.com</a></span>
                    </figcaption>
                </figure>
                <!--end team-member -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <figure class="team-member">
                  <img src="images/contact-team2.jpg" alt="Image" class="image">
                    <figcaption>
                        <h3>John Maladery</h3>
                            <small>Reception</small>
                            <span><i class="fa fa-phone" aria-hidden="true"></i> +3230-45-45-67</span>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i> 
                            <a href="#">johnmaladery@mail.com</a></span>
                    </figcaption>
                </figure>
                <!--end team-member -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <figure class="team-member">
                  <img src="images/contact-team3.jpg" alt="Image" class="image">
                    <figcaption>
                        <h3>Julia Lores</h3>
                            <small>Public Relations</small>
                            <span><i class="fa fa-phone" aria-hidden="true"></i> +3230-45-45-67</span>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i> 
                            <a href="#">julialores@mail.com</a></span>
                    </figcaption>
                </figure>
                <!--end team-member -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end contact-team -->
@endsection