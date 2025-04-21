@include('layout.vendor.header')
<!-- Navigation -->
<section class="topbar-container z-30">
  
    @include('layout.vendor.nav')
    @include('layout.vendor.sidebar')
</section>

<!-- Main Content -->
<main class="main-content has-sidebar">
    @yield('content')
</main>

@include('layout.vendor.footer')