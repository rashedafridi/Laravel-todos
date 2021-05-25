

<nav class="navbar navbar-dark navbar-expand-sm bg-info text-white" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">TODO</a>
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="{{Request::is('/') ? 'active' : ''}} nav-item"><a class="nav-link text-white" href="/">Home</a></li>
          <li class="{{Request::is('todo/create') ? 'active' : ''}} nav-item"><a class="nav-link text-white" href="todo/create">Create Todo</a></li>
          
        </ul>
        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>
