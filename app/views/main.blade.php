@extends('layouts.frontlayout')
@section('content')
	@if($page == 'index')
		@include('pages.index')
	@elseif($page == 'about')
		@include('pages.about')
	@elseif($page == 'post')
		@include('pages.post')
	@elseif($page == 'contact')
		@include('pages.contact')
	@endif
	
@endsection
