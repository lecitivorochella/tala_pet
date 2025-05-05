<div class="row">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" style="font-weight: bold; color: white;">Dyfe.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" style="color:white; font-weight: bold;" href="{{ route('petui') }}">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white; font-weight: bold;" href="#">Our Pets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white; font-weight: bold;" href="#">Why Adopt</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white; font-weight: bold;" href="#">FAQs</a>
      </li>
    </ul>
  </div>

  <div class="container" style="display: flex; justify-content: flex-end; ">
    <!-- @if(Auth::guard('admin')->check())
        <span class="me-3" style="font-weight: bold; font-size:larger;">Heya, {{ Auth::guard('admin')->user()->name }}. 😊</span>
    @endif -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-button" style="background-color: red; color:white; border-radius:5px;">Log Out</button>
    </form>
</div>
</nav>
</div>
