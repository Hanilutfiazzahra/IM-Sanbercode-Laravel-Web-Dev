  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const logoutBtn = document.getElementById("btn-logout");
  if (logoutBtn) {
    logoutBtn.addEventListener("click", function (e) {
      e.preventDefault();
      Swal.fire({
        title: 'Yakin logout?',
        text: "Kamu akan keluar dari sesi ini.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById("logout-form").submit();
        }
      });
    });
  }
});
</script>

  
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">KataKita</h1>
      </a>

<nav id="navmenu" class="navmenu ms-auto">
  <ul>
    <li><a href="/welcome">Home</a></li>
    <li><a href="/genre">Genre</a></li>
    <li><a href="/book">Book</a></li>
    @auth
    <li><a href="/profile">Profile</a></li>
    @endauth
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
     
    @guest
    <div class="d-flex">
    <a class="btn-getstarted" href="/login">Login</a>
    <a class="btn-getstarted ms-2" href="/register" style="margin-left:2px;">Register</a>
    </div>
    @endguest

    @auth
    <form id="logout-form" action="/logout" method="POST" class="d-inline">
      @csrf
      <button type="button" id="btn-logout" class="btn-getstarted">Logout</button>
    </form>
    @endauth


    </div>
  </header>