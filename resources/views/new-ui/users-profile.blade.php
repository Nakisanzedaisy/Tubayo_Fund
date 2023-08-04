<!DOCTYPE html>
<html lang="en">
@include('dashboard.includes.head')

<body>
  @include('dashboard.includes.header')
  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/notifications') }}">
            <i class="bi bi-question-circle"></i>
            <span>Notifications</span>
        </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/my-savings-account') }}">
            <i class="bi bi-envelope"></i>
            <span>My Savings Account</span>
        </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/account-goals') }}">
            <i class="bi bi-envelope"></i>
            <span>My Goals</span>
        </a>
    </li><!-- End Contact Page Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/account-goal-savings-calculator') }}">
            <i class="bi bi-envelope"></i>
            <span>My Goals Savings Calculator</span>
        </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/achievements') }}">
            <i class="bi bi-card-list"></i>
            <span>My Achievements</span>
        </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/feedback') }}">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Feedbacks</span>
        </a>
    </li><!-- End Login Page Nav -->



    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/account-transactions') }}">
            <i class="bi bi-file-earmark"></i>
            <span>My Transactions</span>
        </a>
    </li><!-- End Blank Page Nav -->

  </ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

     <section class="section profile">
    
      @include('dashboard.pages.index')
        

    </section>
    <section class="section dashboard">
      @yield('content')
  </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

@include('dashboard.includes.footer')

  <!-- <script>
    // Access the useAuth function and user data here
    const { user } = window.useAuth();

    // Update the user name in the "username" element
    const cuName = document.getElementById("cuname");
    if (user) {
      cuName.textContent = `${user.firstName}`;
    } else {
      usernameElement.textContent = "Welcome, Guest!";
    }
  </script> -->

</body>

</html>