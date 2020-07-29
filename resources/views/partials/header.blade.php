<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img class="logo" src="{{ asset('img/logo-boolean.png') }}" alt="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-item nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="{{ route('corso') }}">CORSO</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="{{ route('dopo') }}">DOPO IL CORSO</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="{{ route('lezione') }}">LEZIONE GRATUITA</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="{{ route('assumi') }}">ASSUMI I NOSTRI STUDENTI</a>
      </li>
    </ul>
    <span class="navbar-text">
      <button type="button" class="btn btn-success">CANDIDATI ORA</button>
    </span>
  </div>
</nav>


</header>
