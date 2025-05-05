<nav class="navbar navbar-expand-lg bg-dark navbar-dark w-100 shadow-sm">
  <div class="container-fluid px-5">
    <a class="navbar-brand fw-bold" href="#">Dyfe.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left-aligned nav links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-semibold" href="{{ route('petui') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="#">Our Pets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="#">Why Adopt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="#">FAQs</a>
        </li>
      </ul>

      <!-- Right-aligned logout button -->
      <div class="d-flex align-items-center">
        <!-- Optional: Uncomment for greeting -->
        <!--
        @if(Auth::guard('admin')->check())
          <span class="text-white fw-semibold me-3">Heya, {{ Auth::guard('admin')->user()->name }} 😊</span>
        @endif
        -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-outline-light">Log Out</button>
        </form>
      </div>
    </div>
  </div>
</nav>
