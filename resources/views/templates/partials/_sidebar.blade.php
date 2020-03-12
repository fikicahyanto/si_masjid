 <div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">

      <li>
        <a href="{{url('/administrator')}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
      </li>

      <li>
        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Album</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="{{url('/administrator/post')}}" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Post</a></li>

          <li><a href="{{url('/administrator/kategori')}}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Kategori</a></li>
        </ul>
      </li>
      <li>
        <a href="{{url('/administrator/komentar')}}" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Komentar</span> </a>
      </li>

      <li>
        <a href="{{url('/administrator/gallery')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Kegiatan</span> </a>
      </li>

      <li>
        <a href="{{url('/administrator/#')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Keuangan</span> </a>
      </li>

      <li>
        <a href="{{url('/administrator/pengaturan')}}" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Pengaturan</span> </a>
      </li>
    </ul>
  </div>
</div>