<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">KataKita</h1>
    </a>

    @guest
      <nav id="navmenu" class="navmenu ms-auto">
        <ul>
          <li><a href="/">About</a></li>
          <li><a href="/genre">Genre</a></li>
          <li><a href="/book">Book</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="d-flex">
        <a class="btn-getstarted" href="/login">Login</a>
        <a class="btn-getstarted ms-2" href="/register" style="margin-left:2px;">Register</a>
      </div>
    @endguest

    @auth
      <nav id="navmenu" class="navmenu ms-auto">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/genre">Genre</a></li>
          <li><a href="/book">Book</a></li>

    
    <li><a href="/profile">Profile</a></li>
    
        </ul>
        
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <form action="/logout" method="POST">
        @csrf
        <button class="btn-getstarted">Logout</button>
      </form>
    @endauth

  </div>
</header>
