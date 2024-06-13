<!doctype html>
<html lang="en" data-bs-theme="auto">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>KayondoBodaLoans.ltd</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
<body>

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </symbol>
</svg>

<header class="navbar sticky-top flex-md-nowrap p-0 shadow bg-white">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 slate" href="#">kayondobodaloans</a>
  <ul class="navbar-nav flex-row d-md-none">
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="bi"><use xlink:href="#list"/></svg>
      </button>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right border-bottom-0 border-top-0 col-md-3 col-lg-2 p-0">
      <div class="offcanvas-md offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title slate" id="sidebarMenuLabel">kayondobodaloans</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column mb-3">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 slate" aria-current="page" href="{{route('dashboard')}}">
                Dashboard
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 slate" href="">
                  Clients
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 slate" href="">
                Create new client
              </a>
            </li>
          </ul>

          @auth
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 slate" href="{{route('profile')}}">
                    Profile
                </a>
                </li>
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="nav-link d-flex align-items-center gap-2 slate" href="#">
                            Sign out
                        </button>
                    </form>
                </li>
            </ul>
          @endauth
        </div>
      </div>
    </div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        {{$slot}}
    </main>
  </div>
</div>
</body>
</html>
