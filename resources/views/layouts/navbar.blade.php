<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="#">Medium</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
        <li class="nav-item me-3">
          <a class="nav-link" href="{{ route('ourstory') }}">Our Story</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="{{ route('membership') }}">Membership</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="{{ route('write') }}">Write</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="{{ route('signin') }}">Sign In</a>
        </li>
        <li class="nav-item me-3">
          <a class="btn btn-light rounded-pill" href="#">Get Started</a>
        </li>
      </ul>
    </div>
  </div>
</nav>