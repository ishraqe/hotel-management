@extends('layout.master')

@section('content')
<!-- end int-header -->
<section class="gallery">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="filter">
          <li><a href="#" data-filter="*" class="current">ALL<br>
            <span></span></a></li>
          <li><a href="#" data-filter=".restaurant">RESTAURANT<br>
            <span></span></a></li>
          <li><a href="#" data-filter=".rooms">ROOMS<br>
            <span></span></a></li>
          <li><a href="#" data-filter=".rest">REST<br>
            <span></span></a></li>
        </ul>
        <!-- end filter -->
        <ul class="gallery-grid">
          <li class="rooms">
            <figure> <img src="images/gallery5.jpg" alt="Image" class="image">
              <figcaption>
                <div class="description"> Deck Pool <a href="images/gallery5.jpg" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
          <li class="restaurant">
            <figure> <img src="images/gallery6.jpg" alt="Image" class="image">
              <figcaption>
                <div class="description"> Deck Pool <a href="images/gallery6.jpg" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
          <li class="rest">
            <figure><img src="images/gallery7.jpg" alt="Image" class="image">
              <figcaption>
                <div class="description"> Deck Pool <a href="images/gallery7.jpg" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
          <li>
            <figure> <img src="images/gallery8.jpg" alt="Image" class="image">
              <figcaption>
                <div class="description"> Deck Pool <a href="images/gallery8.jpg" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="images/gallery9.jpg" alt="Image" class="image">
              <figcaption>
                <div class="description"> Deck Pool <a href="images/gallery9.jpg" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
          <li>
            <figure> <img src="images/gallery10.jpg" alt="Image" class="image">
              <figcaption>
                <div class="description"> Deck Pool <a href="images/gallery10.jpg" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
          <li>
            <figure> <img src="images/gallery11.jpg" alt="Image" class="image">
              <figcaption>
                <div class="description"> Deck Pool <a href="images/gallery11.jpg" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
          <li>
            <figure> <img src="images/gallery12.jpg" alt="Image" class="image">
              <figcaption>
                <div class="description"> Deck Pool <a href="images/gallery12.jpg" class="fancybox"><img src="images/icon-zoom.png" alt="Image"></a> </div>
                <!-- end description --> 
              </figcaption>
            </figure>
          </li>
          <li>
            <figure class="see-more"><img src="images/gallery13.jpg" alt="Image" class="image">
              <figcaption> <a href="gallery.html">See more</a> </figcaption>
            </figure>
          </li>
        </ul>
      </div>
      <!-- end col-12 -->
      <div class="col-xs-12 text-center"> <a href="#" class="btn-orange-border-small">View More</a> </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end rooms-list -->
@endsection