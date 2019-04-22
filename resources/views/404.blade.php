@extends('layouts.app')

@section('content')

    <div class="container mt-5 pt-5">
		@include('partials.page-header')
			@if (!have_posts())
			    <div>
			        {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
			    </div>
			    {!! get_search_form(false) !!}
			@endif
	</div>	

@endsection
