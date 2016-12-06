

@extends('layout.admin')
@section('title')
Room's
@endsection
@section('content')
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Room's
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
          @include('partials/admin/room')
      </div>
    </div>
  </div>


  <div class="panel panel-default" >
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Add new Room 
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingTwo">
      
          <div class="panel-body">
               @if (isset($errors) && count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
             <form class="form-inline" action="{{url('/admin/addRoom')}}" method="post">
             <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label for="exampleInputName2">Room Type</label>
                <select class="custom-select form-control" name="type">
                     <option selected>Room type</option>
                     @foreach($roomType as $roomTypes)
                        @if($roomTypes->type==1)
                          <option value="{{$roomTypes->type }}">Single</option>
                        @elseif($roomTypes->type==2)
                          <option value="{{$roomTypes->type}}">Family</option>
                        @else
                          <option value="{{$roomTypes->type}}">Delux</option>
                        @endif

                    @endforeach       
                               
                </select>                
              </div>
              <div class="form-group">
                <label for="availability">Availability</label>
               <select class="custom-select form-control" name="availability">
                     <option selected>Availability</option>
                      @for($i=0;$i<=1;$i++)
                        @if($i==0)
                            <option value="{{$i}}">False</option>
                        @else
                             <option value="{{$i}}">True</option>
                        @endif
                      @endfor     
                               
                </select> 
              </div>
              <button type="submit" class="btn btn-default">Add</button>
            </form>    
          

          </div>
        </div>
   
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Booked Room's
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
         <table class="table">
            <thead>
              <tr>
                <th>Index</th>
                <th>Booked Id</th>
                <th>Room ID</th>
                <th>Room Type</th>
                <th>Booked From</th>
              </tr>
            </thead>
            <tbody>
            @foreach($bookedRoom as $bookedRooms)
              <tr>
                <th>{{$index++}}</th>
                <th scope="row">{{$bookedRooms->id}}</th>
                <td>{{$bookedRooms->room_id}}</td>
                <td>
                  @if($bookedRooms->room_type==1)
                    Single
                  @elseif($bookedRooms->room_type==2)
                    Family
                  @else
                    Delux
                  @endif

                </td>
                <td>{{$bookedRooms->checkIndate}} <strong>to</strong>  {{$bookedRooms->checkOutdate}}</td>
              </tr>
            @endforeach  
            </tbody>
          </table>
      </div>
    </div>
  </div>  
</div>





@endsection