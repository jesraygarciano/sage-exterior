<!doctype html>
<html class="bg-white antialiased" @php language_attributes() @endphp>
@include('partials.head')
<body @php body_class() @endphp>

@php do_action('get_header') @endphp
    <div id="app" role="document">
        @include('partials.navbar')
        @yield('content')
		        {{--@if (App\display_sidebar())
		            <aside class="sidebar">
		                @include('partials.sidebar')
		            </aside>
		        @endif--}}
    </div>
@php do_action('get_footer') @endphp

@include('partials.footer')
@php wp_footer() @endphp

@php 
if(is_home() or is_front_page()):
@endphp
<script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = 'http://sotorie.com/thankyou';
    }, false );
</script>
@php 
endif;
@endphp

<script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.3/picturefill.js"></script>
</body>
</html>
