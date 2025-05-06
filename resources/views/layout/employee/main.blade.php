@include('layout.employee.header')
<!-- Navigation -->
<section class="topbar-container z-30">
  
    @include('layout.employee.nav')
    @include('layout.employee.sidebar')
</section>

<!-- Main Content -->
<main class="main-content has-sidebar">
    @yield('content')
</main>
@include('common.preview-image');
@include('common.toster-message');
@include('layout.employee.footer')