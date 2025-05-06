@extends('layout.hr.main')

@section('content')
  <div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Register a new user</h2>

    </div>

    <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Registering</h4>
    </div>
    @include('common.form.user-store', ['key' => 'hr'])
    </div>
  </div>
  @include('common.sign-in-script')
@endsection