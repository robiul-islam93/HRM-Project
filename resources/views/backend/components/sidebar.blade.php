    <!-- Sidebar Start -->
    <div class="sidebar">
        <span class="sidebar_open_btn">
          <img
            class="open_btn"
            src="{{asset('./assets/icons/bx-chevrons-left.svg')}}"
            alt=""
          />
        </span>
  
        <div class="logo-details">
          <i><img src="{{asset('./assets/image/logo_icon.png')}}" alt="" /></i>
          <span class="logo_name">
            <img src="{{asset('./assets/image/logo_text.png')}}" alt="" />
          </span>
        </div>
  
        <ul class="nav-links">
            <li>
                <a href="#">
                 <i class="fa-solid fa-house"></i>
                  <span class="link_name">Dashbord</span>
                </a>
                <ul class="sub-menu blank">
                  <li>
                    <a class="link_name" href="#">Dashbord</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="{{route('admin.employees')}}">
                 <i class="fa fa-users"></i>
                  <span class="link_name">Employees</span>
                </a>
                <ul class="sub-menu blank">
                  <li>
                    <a class="link_name" href="{{route('admin.employees')}}">Employees</a>
                  </li>
                </ul>
              </li>
          <li>
            <div class="iocn-link">
              <a href="./index.html">
                <i class="fa-solid fa-house"></i>
                <span class="link_name">Home</span>
              </a>
              <i class="fa-solid fa-chevron-down arrow"></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="./index.html">Home</a></li>
              <li>
                <a href="#"
                  ><img src="./assets/icons/disc_icon.svg" alt="" /> Reporting
                  Dashboard</a
                >
              </li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class="fa-solid fa-briefcase"></i>
                <span class="link_name">Projects</span>
              </a>
              <i class="fa-solid fa-chevron-down arrow"></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Projects</a></li>
              <li>
                <a href="#"
                  ><img src="{{asset('./assets/icons/disc_icon.svg')}}" alt="" /> Project
                  Dashboard</a
                >
              </li>
            </ul>
          </li>


          {{-- <li>
            <a href="#">
              <i class="fa-solid fa-gear"></i>
              <span class="link_name">Manage Users</span>
            </a>
            <ul class="sub-menu blank">
              <li>
                <a class="link_name" href="">Manage Users</a>
              </li>
            </ul>
          </li> --}}

          {{-- <li>
            <a href="#">
             <i class="fa fa-users"></i>
              <span class="link_name">Manage Users</span>
            </a>
            <ul class="sub-menu blank">
              <li>
                <a class="link_name" href="#">Employees</a>
              </li>
            </ul>
          </li> --}}

        </ul>
      </div>
      <!-- Sidebar End -->