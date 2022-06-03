

<nav class="navbar navbar-expand-lg navbar-light bg-light  p-3 mb-5 rounded" style="background-color: #e8ada6; box-shadow: 0 0rem 1rem rgba(0,0,0,1); ">
  <div class="container">
  {{-- <div class="container-fluid"> --}}
    <a class="navbar-brand" href="/" style="font-size: 32px; font-weight: 900; line-height: 39px; font-style: normal;">.THOUGHTS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-3" id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0">
        <li class="nav-item judul-navbar">
          <a class="nav-link  {{ ($title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
        </li> --}}
        <li class="nav-item judul-navbar">
          <a class="nav-link {{ ($title === 'Blog') ? 'active' : '' }}" href="/blog">Blog</a>
        </li>
        <li class="nav-item judul-navbar">
          <a class="nav-link {{ ($title === 'Post Categories') ? 'active' : '' }}" href="/categories">Categories</a>
        </li>  
      </ul>
      
      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-style: italic">

                  Hi! {{ auth()->user()->username }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard/posts"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                      <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                      </form>
                  </li>
              </ul>
          </li>
        @else
          <li class="nav-item">
              <a href="/login" class="nav-link {{ ($title === 'login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
