@extends('layouts.dashboard')
@section('content')
	@if($page == 'admindashboard')
		@include('pages.dashboards.index')
		
	@elseif($page == 'about')
		@include('pages.backendabout.index')
		
	@elseif($page == 'contact')
		@include('pages.backendcontact.index')
		
	@elseif($page == 'message')
		@include('pages.backendmessage.index')
		
	@elseif($page == 'samplepost')
		@include('pages.backendsamplepost.index')
		
		
	@endif
	
@endsection
