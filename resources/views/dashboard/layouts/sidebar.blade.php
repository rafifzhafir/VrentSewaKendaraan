<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/catalog') ? 'active' : '' }}" href="/dashboard/catalog">
              <span data-feather="list"></span>
              Catalogs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/order') ? 'active' : '' }}" href="/dashboard/order">
              <span data-feather="file-text"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard/profil') ? 'active' : '' }}" href="/dashboard/profil">
              <span data-feather="user"></span>
              My Profil
            </a>
          </li>
        </ul>
      </div>
    </nav>