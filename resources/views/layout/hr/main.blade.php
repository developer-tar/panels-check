@include('layout.hr.header')
<!-- Navigation -->
<section class="topbar-container z-30">
  
    @include('layout.hr.nav')
    @include('layout.hr.sidebar')
</section>

<!-- Main Content -->
<main class="main-content has-sidebar">
    @yield('content')
</main>

@include('layout.hr.footer')