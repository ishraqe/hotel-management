@extends('layout.main')

@section('content')

	@foreach($availableRoom as $availableRooms)
			{{$availableRooms->id}}
	@endforeach

@endsection