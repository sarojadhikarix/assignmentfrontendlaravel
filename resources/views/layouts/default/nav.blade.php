<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::route('website.add')}}">Website</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::route('category.add')}}">Category</a>
      </li>
    </ul>
  </div>

  <div>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="#" class="btn btn-primary">Login</a>
      </li>
    </ul>
  </div>
</nav>
