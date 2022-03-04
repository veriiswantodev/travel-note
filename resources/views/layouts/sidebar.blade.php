<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="{{asset('admin/img/logo/logo2.png')}}">
    </div>
    <div class="sidebar-brand-text mx-3">RuangAdmin</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="/home">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Data Perjalanan
  </div>
  <li class="nav-item">
    <a class="nav-link" href="/perjalanan">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>List Data</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/perjalanan/create">
      <i class="fas fa-fw fa-plus"></i>
      <span>Tambah Data</span>
    </a>
  </li>

  @if(auth()->user()->roles == 'admin')
      
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    User
  </div>
  <li class="nav-item">
    <a class="nav-link" href="/user">
      <i class="fas fa-fw fa-users"></i>
      <span>List User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/user/create">
      <i class="fas fa-fw fa-user-plus"></i>
      <span>Tambah User</span>
    </a>
  </li>
  @endif
  <hr class="sidebar-divider">
  <div class="version" id="version-ruangadmin">Version 1.0</div>
</ul>