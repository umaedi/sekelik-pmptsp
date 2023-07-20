<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar container">
  <ul class="navbar-nav navbar-right ml-auto">
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user mr-auto">

      <img alt="image" src="{{ url(auth()->user()->img) }}"  class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->nama}}</div></a>
   

      <div class="dropdown-menu dropdown-menu-right">
        @auth
        <a href="{{ route('admin.profile') }}" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="javascript:void(0)" class="dropdown-item has-icon text-danger" onclick="logOut('/admin/auth/destroy')">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        @else
        <a href="{{ route('pegawai.profile') }}" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="javascript:void(0)" class="dropdown-item has-icon text-danger" onclick="logOut('/pegawai/auth/destroy')">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        @endauth
      </div>
    </li>
  </ul>
</nav>
  <!-- Bottom Navbar -->
@if (auth()->user()->level != 'staf')
@include('layouts._navigasi_admin')
@else
@include('layouts._navigasi_user')
@endif