<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
@include('frontend.partials._head')
<body>

	@include('frontend.partials._top-nav')
	<!--start-main-->
	@include('frontend.partials._header',$config)
	<!-- banner -->

{{-- 	@include('frontend.partials._banner')  
--}}



	@yield('content')
	@include('frontend.partials._footer')
</body>
</html>