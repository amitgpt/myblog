@extends('layouts.default')
@section('content')
	@if($page == 'login')
		@section('title')
		Login
		@stop
		@include('emails.auth.login')
	@elseif($page == 'registration')
		@section('title')
		SignUp
		@stop
		@include('emails.auth.registration')
	@endif
@endsection
