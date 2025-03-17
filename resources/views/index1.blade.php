<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dark-mode">
<div class="sidebar-wrapper">
  <nav class="mt-2">
    <!--begin::Sidebar Menu-->
    <ul
      class="nav sidebar-menu flex-column"
      data-lte-toggle="treeview"
      role="menu"
      data-accordion="false"
    >
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon bi bi-speedometer"></i>
          <p>
            Dashboard
            <i class="nav-arrow bi bi-chevron-right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/" class="nav-link active">
              <i class="nav-icon bi bi-circle"></i>
              <p>Dashboard v1</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon bi bi-clipboard-fill"></i>
          <p>
            Manage Users
            <i class="nav-arrow bi bi-chevron-right"></i>
          </p>
        </a>
      </li>
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          {{-- <i class="nav-icon bi bi-speedometer"></i> --}}
          <p>
            User Content
            <i class="nav-arrow bi bi-chevron-right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/" class="nav-link active">
              <i class="nav-icon bi bi-circle"></i>
              <p>Admin</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/" class="nav-link active">
              <i class="nav-icon bi bi-circle"></i>
              <p>Author</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/" class="nav-link active">
              <i class="nav-icon bi bi-circle"></i>
              <p>Student</p>
            </a>
          </li>
        </ul>
      </li>
      
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon bi bi-box-arrow-in-right"></i>
          <p>
            Auth
            <i class="nav-arrow bi bi-chevron-right"></i>
          </p>
        </a>
          
          <li class="nav-item">
            <a href="./examples/lockscreen.html" class="nav-link">
              <i class="nav-icon bi bi-circle"></i>
              <p>Lockscreen</p>
            </a>
          </li>
        </ul>
      </li>
      
      <li class="nav-item">
        <a href="./docs/browser-support.html" class="nav-link">
          <i class="nav-icon bi bi-browser-edge"></i>
          <p>Browser Support</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="./docs/faq.html" class="nav-link">
          <i class="nav-icon bi bi-question-circle-fill"></i>
          <p>FAQ</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="./docs/license.html" class="nav-link">
          <i class="nav-icon bi bi-patch-check-fill"></i>
          <p>License</p>
        </a>
      </li>
      <li class="nav-header">LABELS</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon bi bi-circle text-danger"></i>
          <p class="text">Important</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon bi bi-circle text-warning"></i>
          <p>Warning</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon bi bi-circle text-info"></i>
          <p>Informational</p>
        </a>
      </li>
    </ul>
    <!--end::Sidebar Menu-->
  </nav>
</div>
</body>