    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="new-ui-assets/assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Tubayo_Fund</span>
            
          </a>
         
        </div><!-- End Logo -->
    
        <div class="search-bar">
          <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
        </div><!-- End Search Bar -->
    
        <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">
    
            <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
              </a>
            </li><!-- End Search Icon-->


                <li class="nav-item dropdown">

                  <?php
                  $total_notifications = \DB::table('notifications')
                      ->where('user_id', Auth::user()->id)
                      ->where('status_flag', false)
                      ->get()
                      ->count();
                  
                  $notifications = \DB::table('notifications')
                      ->where('user_id', Auth::user()->id)
                      ->where('status_flag', false)
                      ->orderBy('id', 'desc')
                      ->get()
                      ->take(10);
                  
                  ?>

                  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                      <i class="bi bi-bell"></i>
                      <span class="badge bg-primary badge-number">{{ $total_notifications }}</span>
                  </a><!-- End Notification Icon -->


                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                      <li class="dropdown-header">
                          You have {{ $total_notifications }} new notifications
                          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      @foreach ($notifications as $notification)
                          <li class="notification-item">
                              {{-- <i class="bi bi-exclamation-circle text-warning"></i> --}}
                              <div>
                                  <h4>{{ $notification->title }}</h4>
                                  <p>{{ $notification->content }}</p>
                                  {{-- <p>30 min. ago</p> --}}
                              </div>
                          </li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                      @endforeach


                      <li class="dropdown-footer">
                          @if ($total_notifications > 0)
                              <a href="{{ url('/notifications') }}">Show all notifications</a>
                          @else
                              <a href="#">No notifications</a>
                          @endif
                      </li>

                  </ul><!-- End Notification Dropdown Items -->

              </li><!-- End Notification Nav -->

                

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                      
                      <img  src="new-ui-assets/assets/img/team/team-1.jpg" alt="Profile Image" class="rounded-circle pimg2">
                      <p class="pt-3 ml-2" >{{Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                        <span class="d-none d-md-block dropdown-toggle ps-2 pname3"></span>
                        {{-- <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->profile_image }}</span> --}}
                       

                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        {{-- <li class="dropdown-header"></li>      
                            
                        </li> --}}
                        
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/logOut') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
