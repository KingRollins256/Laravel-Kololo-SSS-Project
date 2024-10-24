<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="images/faces/face5.jpg" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name">
              Welcome Jane
            </p>
            <p class="designation">
              Super Admin
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('dashboard')}}">
          <i class="fa fa-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
          <i class="fa fa-user menu-icon"></i>
          <span class="menu-title">Students</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layouts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Add Student</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Student Level</a></li>
            <li class="nav-item"> <a class="nav-link" href="">View Students</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layout" aria-expanded="false" aria-controls="page-layouts">
          <i class="fa fa-user menu-icon"></i>
          <span class="menu-title">Teachers</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layout">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Add Teacher</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Departments</a></li>
            <li class="nav-item"> <a class="nav-link" href="">View Teachers</a></li>
          </ul>
        </div>
      </li>
     
    </ul>
  </nav>