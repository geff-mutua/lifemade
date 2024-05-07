<!DOCTYPE HTML>
<html lang="en-US">

<head>
    @include('layouts.partials.head')
</head>

<body>

    {{-- PRELOADER SECTION --}}
    {{-- <div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div> --}}

    {{-- NAVIGATIONS --}}
    @include('layouts.partials.navigation')

    {{-- YIELD MAIN CONTENT --}}
    @yield('content')

    {{-- FOOTER SECTION --}}
    @include('layouts.partials.footer')

    {{-- YIELD PAGE SCRIPTS --}}
    @include('layouts.partials.scripts')

</body>

</html>
