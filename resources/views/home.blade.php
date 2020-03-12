
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
@include('templates.partials._head')
<body>
  <div id="wrapper">
    <nav class="navbar-default navbar-static-top" role="navigation">
      @include('templates.partials._top-nav')
      <div class="clearfix">

      </div>

      @include('templates.partials._sidebar')
  </nav>
  <div id="page-wrapper" class="gray-bg dashbard-1">
   <div class="content-main">

     @include('templates.partials._banner')

     <!--faq-->
     <div class="blank">


        @yield('content')
    </div>

    <!--//faq-->
    <!---->
    @include('templates.partials._footer')
</div>
</div>
<div class="clearfix"> </div>
</div>

@include('templates.partials._scripts')
</body>
</html>

