<nav class="navbar navbar-expand-lg bg-body-white py-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/" style="color: rgb(7, 59, 101);">
      <img src="{{ asset('assets/img/brand.jpg') }}" alt="brand" height="40" />
      Ichihara Jaya Cianjur
    </a>

    <button class="navbar-toggler" type="button" 
      data-bs-toggle="collapse" data-bs-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::url() == url('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::url('/about') == url('/about') ? 'active' : '' }}" href="/about">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::url('/contact') == url('/contact') ? 'active' : '' }}" href="/contact">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::url('/service') == url('/service') ? 'active' : '' }}" href="/service">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::url('/blog') == url('/blog') ? 'active' : '' }}" href="/blog">Blog</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::url('/gallery') == url('/gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
        </li>
      </ul>
    </div>

    <div>
      <span class="align-middle">
        <span class="text-success">Call Us</span> : +62 813-1381-0593
      </span>
    </div>
  </div>
</nav>