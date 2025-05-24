@php
    $current = Request::segment(1); // segment URL pertama
@endphp

<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="{{ url('index') }}" class="{{ $current == 'index' ? 'active' : '' }}">Home</a></li>
    <li><a href="{{ url('about') }}" class="{{ $current == 'about' ? 'active' : '' }}">About</a></li>
    <li><a href="{{ url('resume') }}" class="{{ $current == 'resume' ? 'active' : '' }}">Resume</a></li>
    <li><a href="{{ url('services') }}" class="{{ $current == 'services' ? 'active' : '' }}">Services</a></li>
    <li><a href="{{ url('portfolio') }}" class="{{ $current == 'portfolio' ? 'active' : '' }}">Portfolio</a></li>
    <li><a href="{{ url('contact') }}" class="{{ $current == 'contact' ? 'active' : '' }}">Contact</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
