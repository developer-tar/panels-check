@extends('layout.hr.main')

@section('content')
  <div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Register a new user</h2>

    </div>

    <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Registering</h4>
      @if(!$user->company()->first())
      <p class="text-sm text-n500">
      <span class="text-primary">Note:</span> You cannot register a new user, Complete profile <a
      href="{{ route('hr.profile') }}"><span class="text-primary">click here</span></a>.
    @endif
    </div>
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
      <ul class="list-disc list-inside text-sm">
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
      </ul>
    </div>
    @endif
    @include('common.form.user-store', ['key' => 'hr'])
    </div>
  </div>
  @include('common.sign-in-script')
@endsection