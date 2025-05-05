<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-dark fw-bold" href="#">Dyfe.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white fw-bold" href="{{ route('petui') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="#">Our Pets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="#">Why Adopt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="#">FAQs</a>
        </li>
      </ul>

      <!-- Optional admin greeting -->
      <!-- 
      @if(Auth::guard('admin')->check())
          <span class="me-3 fw-bold text-white">Heya, {{ Auth::guard('admin')->user()->name }} 😊</span>
      @endif 
      -->

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Log Out</button>
      </form>
    </div>
  </div>
</nav>
