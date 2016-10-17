
@extends('layout.master')

@section('content')

<!-- end int-header -->
<section class="room-booking-form">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <form>
          <div class="form-group">
            <label>Check-In</label>
            <input type="text" placeholder="Choose date" class="datepicker datefield">
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>Check-Out</label>
            <input type="text" placeholder="Choose date" class="datepicker datefield">
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>Guests</label>
            <div class="select-box">
              <input type='text' name='quantity' value='0' class='qty' />
              <span>Adt,</span>
              <input type='text' name='quantity2' value='0' class='qty' />
              <span>Chld</span> <a class="dropdown-toggle select-arrow" data-toggle="dropdown" href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
              <div class="dropdown-menu" role="menu">
                <div class="qty-box"> <span>Adults</span>
                  <input type='button' value='+' class='qtyplus' field='quantity' />
                  <input type='text' name='quantity' value='0' class='qty' />
                  <input type='button' value='-' class='qtyminus' field='quantity' />
                </div>
                <!-- end qty-box -->
                <div class="qty-box"> <span>Children</span>
                  <input type='button' value='+' class='qtyplus2' field='quantity2' />
                  <input type='text' name='quantity2' value='0' class='qty' />
                  <input type='button' value='-' class='qtyminus2' field='quantity2' />
                </div>
                <!-- end qty-box --> 
              </div>
              <!-- end dropdown-menu --> 
            </div>
            <!-- end select-box --> 
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>&nbsp;</label>
            <button type="submit" class="btn-orange-large">Update</button>
          </div>
          <!-- end form-group -->
        </form>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end room-booking-form -->
<section class="rooms-list">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <aside class="sidebar">
          <div class="user-rating">
            <h4 class="title">User Rating</h4>
            <ul>
              <li>
                <input type="checkbox">
                <label>Excellent</label>
                <span class="stars"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span></li>
              <li>
                <input type="checkbox">
                <label>Good</label>
                <span class="stars"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> </span></li>
              <li>
                <input type="checkbox">
                <label>Okay</label>
                <span class="stars"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span></li>
              <li>
                <input type="checkbox">
                <label>Mediocre</label>
                <span class="stars"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span></li>
              <li>
                <input type="checkbox">
                <label>Poor</label>
                <span class="stars"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span></li>
            </ul>
          </div>
          <!-- end user-rating -->
          <div class="price-range">
            <h4 class="title">Price</h4>
            <input type="text" id="amount" readonly>
            <div id="slider-range"></div>
            <!-- end slider-range --> 
          </div>
          <!-- end price-range -->
          <div class="room-type">
            <h4 class="title">Room Type</h4>
            <ul>
              <li>
                <input type="checkbox">
                <label>Deluxe Room</label>
              </li>
              <li>
                <input type="checkbox">
                <label>Luxury Room</label>
              </li>
              <li>
                <input type="checkbox">
                <label>Family Room</label>
              </li>
              <li>
                <input type="checkbox">
                <label>Couple Room</label>
              </li>
              <li>
                <input type="checkbox">
                <label>Standart Room</label>
              </li>
            </ul>
          </div>
          <!-- end room-type --> 
        </aside>
        <!-- end sidebar --> 
      </div>
      <!-- end col-4 -->
      <div class="col-md-8  col-sm-12 col-xs-12">
        <div class="rooms-top-bar"> <span class="total-rooms">Showing 1-6 of 27 results</span> <a href="#" class="grid-btn active"><i class="fa fa-bars" aria-hidden="true"></i></a> <a href="rooms-grid.html" class="grid-btn"><i class="fa fa-th" aria-hidden="true"></i></a> <span class="recommended"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Recommended <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Price  (low to high)</a></li>
            <li><a href="#">Price  (high to low)</a></li>
            <li><a href="#">Rate  (1 to 5)</a></li>
            <li><a href="#">Rate  (5 to 1)</a></li>
          </ul>
          <!-- end dropdown-menu --> 
          </span> 
          <!-- end recommended --> 
        </div>
        <!-- end rooms-top-bar -->
        <div class="room-box"> <span class="like"><i class="fa fa-heart-o deactive" aria-hidden="true"></i> <i class="fa fa-heart active" aria-hidden="true"></i></span>
          <figure><img src="images/room-list1.jpg" alt="Image"> <span class="save-label">SAVE %42</span> </figure>
          <div class="room-infos">
            <h3 class="room-type">Family Room</h3>
            <span class="room-rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <a href="#">156 Reviews</a> </span>
            <p><span>Bed:</span> 2 King and 1 Sofabed</p>
            <p><span>Max:</span> 4 People</p>
          </div>
          <!-- end room-infos -->
          <div class="room-price"> <span class="price">$102<small>/night</small></span> <small class="total">$556 total</small> <a href="room-detail.html" class="btn-orange-small">Choose</a> </div>
          <!-- end room-price --> 
        </div>
        <!-- end room-box -->
        <div class="room-box"> <span class="like"><i class="fa fa-heart-o deactive" aria-hidden="true"></i> <i class="fa fa-heart active" aria-hidden="true"></i></span>
          <figure><img src="images/room-list1.jpg" alt="Image"> <span class="save-label">SAVE %42</span> </figure>
          <div class="room-infos">
            <h3 class="room-type">Family Room</h3>
            <span class="room-rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <a href="#">156 Reviews</a> </span>
            <p><span>Bed:</span> 2 King and 1 Sofabed</p>
            <p><span>Max:</span> 4 People</p>
          </div>
          <!-- end room-infos -->
          <div class="room-price"> <span class="price">$102<small>/night</small></span> <small class="total">$556 total</small> <a href="room-detail.html" class="btn-orange-small">Choose</a> </div>
          <!-- end room-price --> 
        </div>
        <!-- end room-box -->
        <div class="room-box"> <span class="like"><i class="fa fa-heart-o deactive" aria-hidden="true"></i> <i class="fa fa-heart active" aria-hidden="true"></i></span>
          <figure><img src="images/room-list1.jpg" alt="Image"> <span class="save-label">SAVE %42</span> </figure>
          <div class="room-infos">
            <h3 class="room-type">Family Room</h3>
            <span class="room-rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <a href="#">156 Reviews</a> </span>
            <p><span>Bed:</span> 2 King and 1 Sofabed</p>
            <p><span>Max:</span> 4 People</p>
          </div>
          <!-- end room-infos -->
          <div class="room-price"> <span class="price">$102<small>/night</small></span> <small class="total">$556 total</small> <a href="room-detail.html" class="btn-orange-small">Choose</a> </div>
          <!-- end room-price --> 
        </div>
        <!-- end room-box -->
        <div class="room-box"> <span class="like"><i class="fa fa-heart-o deactive" aria-hidden="true"></i> <i class="fa fa-heart active" aria-hidden="true"></i></span>
          <figure><img src="images/room-list1.jpg" alt="Image"> <span class="save-label">SAVE %42</span> </figure>
          <div class="room-infos">
            <h3 class="room-type">Family Room</h3>
            <span class="room-rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <a href="#">156 Reviews</a> </span>
            <p><span>Bed:</span> 2 King and 1 Sofabed</p>
            <p><span>Max:</span> 4 People</p>
          </div>
          <!-- end room-infos -->
          <div class="room-price"> <span class="price">$102<small>/night</small></span> <small class="total">$556 total</small> <a href="room-detail.html" class="btn-orange-small">Choose</a> </div>
          <!-- end room-price --> 
        </div>
        <!-- end room-box -->
        <div class="room-box"> <span class="like"><i class="fa fa-heart-o deactive" aria-hidden="true"></i> <i class="fa fa-heart active" aria-hidden="true"></i></span>
          <figure><img src="images/room-list1.jpg" alt="Image"> <span class="save-label">SAVE %42</span> </figure>
          <div class="room-infos">
            <h3 class="room-type">Family Room</h3>
            <span class="room-rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <a href="#">156 Reviews</a> </span>
            <p><span>Bed:</span> 2 King and 1 Sofabed</p>
            <p><span>Max:</span> 4 People</p>
          </div>
          <!-- end room-infos -->
          <div class="room-price"> <span class="price">$102<small>/night</small></span> <small class="total">$556 total</small> <a href="room-detail.html" class="btn-orange-small">Choose</a> </div>
          <!-- end room-price --> 
        </div>
        <!-- end room-box -->
        <div class="room-box"> <span class="like"><i class="fa fa-heart-o deactive" aria-hidden="true"></i> <i class="fa fa-heart active" aria-hidden="true"></i></span>
          <figure><img src="images/room-list1.jpg" alt="Image"> <span class="save-label">SAVE %42</span> </figure>
          <div class="room-infos">
            <h3 class="room-type">Family Room</h3>
            <span class="room-rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <a href="#">156 Reviews</a> </span>
            <p><span>Bed:</span> 2 King and 1 Sofabed</p>
            <p><span>Max:</span> 4 People</p>
          </div>
          <!-- end room-infos -->
          <div class="room-price"> <span class="price">$102<small>/night</small></span> <small class="total">$556 total</small> <a href="room-detail.html" class="btn-orange-small">Choose</a> </div>
          <!-- end room-price --> 
        </div>
        <!-- end room-box -->
        <ul class="pagination">
          <li class="prev"> <a href="#" aria-label="Previous"> <span aria-hidden="true">Prev</span> </a> </li>
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2 <span class="sr-only">(current)</span></a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">...</a></li>
          <li><a href="#">10</a></li>
          <li class="next"> <a href="#" aria-label="Next"> <span aria-hidden="true">Next</span> </a> </li>
        </ul>
        <!-- end pagination --> 
      </div>
      <!-- end col-8 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end rooms-list -->
@endsection