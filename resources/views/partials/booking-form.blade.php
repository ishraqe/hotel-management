<form class="booking-form" action="{{url('/check')}}" method="post">
          <div class="form-group"  >
            <label>Check-In</label>
            <input type="text" placeholder="Choose date" class="datepicker datefield" id="dpd1">
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>Check-Out</label>
            <input type="text" placeholder="Choose date" class="datepicker datefield"  id="dpd2">
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>Guest</label>
            <div class="select-box">
              <input type='text' name='quantity' value='0' class='qty' />
              <span>Adults,</span>
              <input type='text' name='quantity2' value='0' class='qty' />
              <span>Children</span> <a class="dropdown-toggle select-arrow" data-toggle="dropdown" href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
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
            <label class="hidden-xs">&nbsp;</label>
            <button type="submit" class="btn-orange-large">Check availability</button>
          </div>
          <!-- end form-group -->
        </form>