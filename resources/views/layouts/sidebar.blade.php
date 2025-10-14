<div class="sidebar">
  <!-- SidebarSearch From -->
  <div class="from-inline mt-2">
    <div class="input-group" data-widget="sidebar-search">
      <input class="from-control from-control-sidebar" type="search"
    placeholder="search" aria-label="search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- sidebar menu -->
<nav class="mt-2">
<ul class="nav-pills nav-sidebar flex-colum" data-widget="treeviw"
role="menu" data-according="false">
<li class="nav-item">
  <a href="{{ url('/')}}" class="nav-link {{ ($activeMenu == 'dashboard')?
  'active' : ''}} ">
  <i class="nav-icon fas-tachometer-alt"></i>
  <p>Dasboard</p>
</a>
</li>
 <li class="nav-header">Data Pengguna</li> 
      <li class="nav-item"> 
        <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 
'active' : '' }} "> 
          <i class="nav-icon fas fa-layer-group"></i> 
          <p>Level User</p> 
        </a> 
      </li> 
      <li class="nav-item"> 
        <a href="{{ url('/user') }}" class="nav-link {{ ($activeMenu == 'user')? 
'active' : '' }}"> 
          <i class="nav-icon far fa-user"></i> 
          <p>Data User</p> 
        </a> 
      </li> 
      <li class="nav-header">Data Barang</li> 
      <li class="nav-item"> 
        <a href="{{ url('/kategori') }}" class="nav-link {{ ($activeMenu == 
'kategori')? 'active' : '' }} "> 
          <i class="nav-icon far fa-bookmark"></i> 
          <p>Kategori Barang</p> 
        </a> 
      </li> 
      <li class="nav-item"> 
        <a href="{{ url('/barang') }}" class="nav-link {{ ($activeMenu == 
'barang')? 'active' : '' }} "> 
          <i class="nav-icon far fa-list-alt"></i> 
          <p>Data Barang</p> 
        </a> 
      </li> 
      <li class="nav-header">Data Transaksi</li> 
      <li class="nav-item"> 
        <a href="{{ url('/stok') }}" class="nav-link {{ ($activeMenu == 'stok')? 
'active' : '' }} "> 
          <i class="nav-icon fas fa-cubes"></i> 
          <p>Stok Barang</p> 
        </a> 
      </li> 
      <li class="nav-item"> 
        <a href="{{ url('/barang') }}" class="nav-link {{ ($activeMenu == 
'penjualan')? 'active' : '' }} "> 
          <i class="nav-icon fas fa-cash-register"></i> 
          <p>Transaksi Penjualan</p> 
        </a> 
      </li> 
    </ul> 
  </nav> 
</div>  
