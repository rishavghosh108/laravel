<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href=" {{ asset('admin/index.html') }}" class="brand-link">
      <!--begin::Brand Image-->
      <img src=" {{ asset('admin/dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow" />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">AdminLTE</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/dashboard" 
             class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" 
             id="dashboard">
              <p>Dashboard</p>
          </a>
      </li>
      
      @if(Auth::user()->isSuperAdmin())
      <li class="nav-item">
          <a href="/dashboard/managepermission/" 
             class="nav-link {{ request()->is('dashboard/managepermission*') ? 'active' : '' }}">
              <p>Manage Permissions</p>
          </a>
      </li>
      @endif
      
      <li class="nav-item">
          <a href="/dashboard/manageuser/" 
             class="nav-link {{ request()->is('dashboard/manageuser*') ? 'active' : '' }}">
              <p>Manage Users</p>
          </a>
      </li>
      
        <li class="nav-item menu-closed">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              User Content
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            @if(Auth::user()->isSuperAdmin())
            <li class="nav-item">
              <a href=" {{ asset('admin/index.html') }}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Admin</p>
              </a>
            </li>
            @endif

            <li class="nav-item">
              <a href=" {{ asset('admin/dist/pages/index2.html') }}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Author</p>
              </a>
            </li>
            <li class="nav-item">
              <a href=" {{ asset('admin/dist/pages/index3.html') }}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Student</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>

<style>
  .nav-link.active {
    background-color: #5fdfff;
    color: #fff;
    font-weight: bold;
    border-left: 4px solid #feb47b; 
    border-radius: 5px;
}

</style>