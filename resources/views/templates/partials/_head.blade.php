<head>
  <title>Sistem Informasi Manajemen Masjid</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <link href="{{ asset('admin/css/style.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet"> 
  <script src="{{ asset('admin/js/jquery.min.js') }}"> </script>
  <script src="{{ asset('admin/js/bootstrap.min.js') }}"> </script>
  
  <!-- Mainly scripts -->
  <script src="{{ asset('admin/js/jquery.metisMenu.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.slimscroll.min.js') }}"></script>
  <!-- Custom and plugin javascript -->
  <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
  <script src="{{ asset('admin/js/custom.js') }}"></script>
  <script src="{{ asset('admin/js/screenfull.js') }}"></script>



  <script>
    $(function () {
      $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

      if (!screenfull.enabled) {
        return false;
      }



      $('#toggle').click(function () {
        screenfull.toggle($('#container')[0]);
      });



    });
  </script>


  <!-- include summernote css/js-->
  <link href="{{ asset('admin/css/summernote.css') }}" rel="stylesheet">
  <script src="{{ asset('admin/js/summernote.js') }}"></script> 

  <script>
    $(document).ready(function() {
      $('.summernote').summernote();
    });
  </script>
  
</head>