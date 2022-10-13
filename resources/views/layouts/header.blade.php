<header class="header sticky-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-6">
          <div class="header-left d-flex align-items-center">
            <div class="menu-toggle-btn mr-20">
              <button
                id="menu-toggle"
                class="main-btn primary-btn btn-hover"
              >
                <i class="lni lni-chevron-left me-2"></i> Menu
              </button>
            </div>
            <div class="header-search d-none d-md-flex">
              <form action="#">
                {{-- <input type="text" placeholder="Search..." /> --}}
                {{-- <button><i class="lni lni-search-alt"></i></button> --}}
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-7 col-6">
          <div class="header-right">
            <!-- profile start -->
            <div class="profile-box ml-15">
              <button
                class="dropdown-toggle bg-transparent border-0"
                type="button"
                id="profile"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <div class="profile-info">
                  <div class="info">
                    <h6>{{ ucfirst(Auth()->user()->name) }}</h6>
                    <div class="image">
                      <img
                        src="{{ asset('assets/images/lead/lead-6.png') }}"
                        alt=""
                      />
                      <span class="status"></span>
                    </div>
                  </div>
                </div>
                <i class="lni lni-chevron-down"></i>
              </button>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="profile"
              >
                <li>
                  <form action="logout" method="post">
                    @csrf
                    <button type="submit" style="border: none; background:none" class="ms-3 text-danger"><i class="lni lni-exit me-3"></i> Sign Out</button>
                  </form>
                </li>
              </ul>
            </div>
            <!-- profile end -->
          </div>
        </div>
      </div>
    </div>
  
  </header>