      <!-- navbar start -->
      <nav class="navbars">
        <div class="nav_logo">
          <h3>Compliance Dashboard</h3>
        </div>

        <div class="nav_items">
          <div class="search_box">
            <span>
              <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <input type="text" placeholder="Search..." />
          </div>

          <div class="chat_btn">
            <span></span>
            <img src="{{asset('./assets/icons/chat_icon.svg')}}" alt="" />
          </div>

          <div class="chat_btn">
            <span></span>
            <img src="{{asset('./assets/icons/bell_icon.svg')}}" alt="" />
          </div>

          {{-- <div class="select_box">
            <img src="{{asset('./assets/icons/user_icon.png')}}" alt="" />
            <select name="" id="">
              <option value="buyer">Buyer</option>
              <option value="profile">Profile</option>
              <option value="logout">Logout</option>
            </select>
          </div> --}}
          <div class="dropdown ms-sm-3 header-item border-lg topbar-user">
            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                <span class="d-flex align-items-center">
                    <img class="rounded-circle header-profile-user" src="{{ asset('./assets/icons/user_icon.png') }}"
                        alt="Header Avatar" />
                    <span class="text-start ms-xl-2">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Ismail Hosain</span>
                        <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Founder</span>
                    </span>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <h6 class="dropdown-header">Welcome Ismail!</h6>
                <a class="dropdown-item" href="pages-profile.html">
                    <i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
                    <span class="align-middle">Profile</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                    <span class="align-middle" data-key="t-logout">Logout</span>
                </a>
            </div>
        </div>
        
        </div>
      </nav>
      <!-- navbar end -->