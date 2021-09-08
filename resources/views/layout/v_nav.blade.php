<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="/" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    @if (Auth::check())


    <li class="nav-item">
      <a href="/v_input" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Input Mata Kuliah
        </p>
      </a>
    </li>
    @endif

  </ul>
