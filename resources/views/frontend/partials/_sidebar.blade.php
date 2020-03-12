<div class="col-md-3 technology-right">


  <div class="blo-top1">

    <div class="tech-btm">
      <div class="search-1">
        <form action="#" method="post">
          <input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
          <input type="submit" value=" ">
        </form>
      </div>
      <h4>Postingan Baru </h4>
      
      @foreach($post_list as $d)
      <div class="blog-grids">
        <div class="blog-grid-left">
          <a href="singlepage.html"><img src="{{asset($d->gambar) }}" class="img-responsive" alt=""></a>
        </div>
        <div class="blog-grid-right">

          <h5><a href="singlepage.html">{{$d->judul}}</a> </h5>
        </div>
        <div class="clearfix"> </div>
      </div>
      @endforeach


    </div>



  </div>


</div>
<div class="clearfix"></div>
        <!-- technology-right -->