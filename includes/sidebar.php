    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p class="text-white font-weight-bold">My CMS</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-newspaper menu-icon"></i>
            <span class="menu-title">Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../admin/pages.php"> View Pages </a></li>
              <li class="nav-item"> <a class="nav-link" href="../admin/create_page.php"> Create Page </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#sections" aria-expanded="false" aria-controls="sections">
            <i class="mdi mdi-view-grid menu-icon"></i>
            <span class="menu-title">Sections</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="sections">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../admin/sections.php">View Sections</a></li>
              <li class="nav-item"> <a class="nav-link" href="../admin/create_section.php">Create Section</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>