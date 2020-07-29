<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img class="logo" src="{{ asset('img/logo-boolean.png') }}" alt="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{ route('corso') }}">CORSO</a>
      <a class="nav-item nav-link" href="{{ route('privacy') }}">PRIVACY</a>
      <a class="nav-item nav-link disabled" href="#">CANDIDATI ORA</a>
    </div>
  </div>
</nav>
</header>
