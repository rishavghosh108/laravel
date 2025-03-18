<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
      <!--begin::Brand Link-->
      <a href=" {{ asset('admin/index.html') }}" class="brand-link">
        <!--begin::Brand Image-->
        <img
          src=" {{ asset('admin/dist/assets/img/AdminLTELogo.png') }}"
          alt="AdminLTE Logo"
          class="brand-image opacity-75 shadow"
        />
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
        <ul
          class="nav sidebar-menu flex-column"
          data-lte-toggle="treeview"
          role="menu"
          data-accordion="false"
        >
          {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon bi bi-speedometer"></i>
              <p>
                Dashboard
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a> --}}
            {{-- <ul class="nav nav-treeview"> --}}
              <li class="nav-item">
                <a href="dashboard" class="nav-link active">
                  {{-- <i class="nav-icon bi bi-circle"></i> --}}
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ asset('admin/index.html') }}" class="nav-link">
                  {{-- <i class="nav-icon bi bi-circle"></i> --}}
                  <p>Manage Users</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href=" {{ asset('admin/dist/pages/index2.html') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ asset('admin/dist/pages/index3.html') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Dashboard v3</p>
                </a>
              </li> --}}
            {{-- </ul> --}}
          {{-- </li> --}}
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-speedometer"></i>
              <p>
                User Content
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ asset('admin/index.html') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Admin</p>
                </a>
              </li>
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
          <li class="nav-item">
            <a href=" {{ asset('admin/dist/pages/generate/theme.html') }}" class="nav-link">
              <i class="nav-icon bi bi-palette"></i>
              <p>Theme Generate</p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-box-seam-fill"></i>
              <p>
                Widgets
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ asset('admin/dist/pages/widgets/small-box.html') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Small Box</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./widgets/info-box.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>info Box</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ asset('admin/dist/pages/widgets/cards.html') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Cards</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-clipboard-fill"></i>
              <p>
                Layout Options
                <span class="nav-badge badge text-bg-secondary me-3">6</span>
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./layout/unfixed-sidebar.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Default Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./layout/fixed-sidebar.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./layout/layout-custom-area.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Layout <small>+ Custom Area </small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./layout/sidebar-mini.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Sidebar Mini</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./layout/collapsed-sidebar.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Sidebar Mini <small>+ Collapsed</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./layout/logo-switch.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Sidebar Mini <small>+ Logo Switch</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./layout/layout-rtl.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Layout RTL</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-tree-fill"></i>
              <p>
                UI Elements
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./UI/general.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./UI/icons.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./UI/timeline.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Timeline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-pencil-square"></i>
              <p>
                Forms
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./forms/general.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>General Elements</p>
                </a>
              </li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-table"></i>
              <p>
                Tables
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./tables/simple.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-box-arrow-in-right"></i>
              <p>
                Auth
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-arrow-in-right"></i>
                  <p>
                    Version 1
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./examples/login.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Login</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./examples/register.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Register</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-arrow-in-right"></i>
                  <p>
                    Version 2
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./examples/login-v2.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Login</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./examples/register-v2.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Register</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="./examples/lockscreen.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href=" {{ asset('admin/dist/pages/docs/color-mode.html') }}" class="nav-link">
              <i class="nav-icon bi bi-star-half"></i>
              <p>Color Mode</p>
            </a>
          </li> --}}
          
          
          <li class="nav-item">
            <a href="./docs/browser-support.html" class="nav-link">
              <i class="nav-icon bi bi-browser-edge"></i>
              <p>Browser Support</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./docs/how-to-contribute.html" class="nav-link">
              <i class="nav-icon bi bi-hand-thumbs-up-fill"></i>
              <p>How To Contribute</p>
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
    <!--end::Sidebar Wrapper-->
  </aside>