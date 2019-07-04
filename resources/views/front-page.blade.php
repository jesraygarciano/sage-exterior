@extends('layouts.app')

@section('content')


@include('partials.page-header')
@include('components.hero-carousel')

@include('components.front-feature')
@include('components.front-about')
@include('components.front-pricelist')
@include('components.service-flow')
@include('components.front-gallery')
@include('components.paint-service')
@include('components.front-blog')

@include('components.front-contact')
@include('components.partners')

@include('components.work-area')


@endsection
