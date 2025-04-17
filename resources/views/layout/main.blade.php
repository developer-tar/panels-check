@include('layout.header')
<!-- Navigation -->
<section class="topbar-container z-30">
    @include('layout.admin.nav')
    @include('layout.admin.sidebar')
</section>

<!-- Main Content -->
<main class="main-content has-sidebar">
    @yield('content')
</main>

@include('layout.admin.footer')