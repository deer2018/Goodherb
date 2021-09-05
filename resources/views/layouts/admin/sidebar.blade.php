
   <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-leaf"></i>
        </div>
        <div class="sidebar-brand-text mx-3" >GoodHerb </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin_index') }}">
                    <i class="fas fa-circle"></i>
                    <span>หน้าหลัก</span></a>
            </li>
      <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin_user') }}">
                    <i class="fas fa-circle"></i>
                    <span>จัดการสมาชิก</span></a>
            </li>
      <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin_volunteer_index') }}">
                    <i class="fas fa-circle"></i>
                    <span>ข้อมูลอาสาสมัคร</span></a>
            </li>
      <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin_medic_index') }}">
                    <i class="fas fa-circle"></i>
                    <span>ข้อมูลแพทย์</span></a>
            </li>
      <li class="nav-item">
                <a class="nav-link" href="{{ url('/crud') }}">
                    <i class="fas fa-circle"></i>
                    <span>crud</span></a>
            </li>
    </ul>
    <!-- End of Sidebar -->
  