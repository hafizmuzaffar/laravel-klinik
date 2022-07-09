 <aside id="left-panel" class="left-panel">
     <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
             <ul class="nav navbar-nav">
                 <li class="active">
                     <a href="{{ route('dashboard.index') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                 </li>
                 <li class="menu-title">simrs Klinik</li><!-- /.menu-title -->
                 <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Data</a>
                     <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-id-card-o"></i><a href="{{ route('pegawai.index') }}">Data Pegawai</a>
                         </li>
                         <li><i class="fa fa-id-card-o"></i><a href="{{ route('dokter.index') }}">Data Dokter</a>
                         </li>
                         <li><i class="fa fa-th"></i><a href="{{ route('user.index') }}">Data User </a></li>
                     </ul>
                 </li>
                 <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false"> <i class="menu-icon fa fa-table"></i> Obat</a>
                     <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-list"></i><a href="{{ route('obat.index') }}">Data Obat</a></li>
                         <li><i class="fa fa-plus"></i><a href="{{ route('obat.create') }}">Tambah Obat</a></li>
                     </ul>
                 </li>

                 <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false"> <i class="menu-icon fa fa-table"></i> Wilayah</a>
                     <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-list"></i><a href="{{ route('wilayah.index') }}">Lihat Table Wilayah</a>
                         </li>
                         <li><i class="fa fa-plus"></i><a href="{{ route('wilayah.create') }}">Tambah Table
                                 Wilayah</a></li>
                     </ul>
                 </li>


                 <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Ruang</a>
                     <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-list"></i><a href="{{ route('ruang.index') }}">List Ruang </a></li>
                         <li><i class="fa fa-plus"></i><a href="{{ route('ruang.create') }}">Tambah Data Ruangan </a>
                         </li>
                     </ul>
                 </li>
                 <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Data Pasien</a>
                     <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-id-card-o"></i><a href="{{ route('pasien.index') }}">Data Pasien</a>
                         </li>
                         <li><i class="fa fa-th"></i><a href="{{ route('tindakan.index') }}">Data Tindakan </a></li>
                         <li><i class="fa fa-th"></i><a href="{{ route('transactions.index') }}">Data Transaksi </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </div><!-- /.navbar-collapse -->
     </nav>
 </aside>
