@extends('layout.admin')
@section('title')
Edit room
@endsection
@section('content')
<form class="form-inline" action="" method="post">
             <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label for="exampleInputName2">Room Type</label>
                <select class="custom-select form-control" name="type">
                     <option selected>Room type</option>
                   
                        @if($room->room_type==1)
                          <option value="{{$room->type }}">Single</option>
                        @elseif($room->room_type==2)
                          <option value="{{$room->room_type}}">Family</option>
                        @else
                          <option value="{{$room->room_type}}">Delux</option>
                        @endif
     
                               
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

@endsection