<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
   <nav class="navbar navbar-expand-sm navbar-default">
       <div id="main-menu" class="main-menu collapse navbar-collapse">
           <ul class="nav navbar-nav">
               <li class="menu-title">Beranda</li><!-- /.menu-title -->
               <li class="">
                   <a href="{{route('home.index')}}"> <i class="menu-icon fa fa-list"></i>Home</a>
               </li>
               <li class="menu-title">Data Pegawai</li><!-- /.menu-title -->
               <li class="">
                   <a href="{{route('pegawai.index')}}"> <i class="menu-icon fa fa-list"></i>Data Pegawai Klinik</a>
               </li>
               <li class="">
                   <a href="{{route('pegawai.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah</a>
               </li>

               <li class="menu-title">Data Pasien</li><!-- /.menu-title -->
               <li class="">
                   <a href="{{route('wilayah.index')}}"> <i class="menu-icon fa fa-list"></i>Wilayah Pasien</a>
               </li>
               <li class="">
                   <a href="{{route('wilayah.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah</a>
               </li>

               <li class="menu-title">Data Obat</li><!-- /.menu-title -->
               <li class="">
                   <a href="{{route('dataobat.index')}}"> <i class="menu-icon fa fa-list"></i>Data Obat</a>
               </li>
               <li class="">
                   <a href="{{route('dataobat.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah</a>
               </li>
               <li class="menu-title">Data Tindakan</li><!-- /.menu-title -->
               <li class="">
                   <a href="{{route('datatindakan.index')}}"> <i class="menu-icon fa fa-list"></i>Data Tindakan</a>
               </li>
               <li class="">
                   <a href="{{route('datatindakan.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah</a>
               </li>
               <li class="menu-title">Transaksi Pasien</li><!-- /.menu-title -->
               <li class="">
                   <a href="{{route('transaksipasien.index')}}"> <i class="menu-icon fa fa-list"></i>Data Transaksi</a>
               </li>
               <li class="">
                   <a href="{{route('transaksipasien.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah</a>
               </li>
           </ul>
       </div><!-- /.navbar-collapse -->
   </nav>
</aside>
<!-- /#left-panel -->