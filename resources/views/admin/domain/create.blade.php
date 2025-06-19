@extends('layout.admin.main')

@section('content')
<div class="main-inner">
  <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Add a new Domain</h2>

  </div>

  <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Adding</h4>
    </div>
    <form method="POST" action="{{ route('admin.domain.store') }}" enctype="multipart/form-data">
      @csrf

      <div class="grid grid-cols-2 gap-4 xxxl:gap-6">
        <div class="col-span-2 md:col-span-1">
          <label for="name" class="mb-4 md:text-lg font-medium block">
            Name
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="name" name="name" value="{{ old('name') }}" />
          @error('name')
          <div class="text-red-500 text-sm mt-1">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-span-2 ">
          <label for="description" class="md:text-lg font-medium block mb-4">
            Enter Description
          </label>
          <textarea
            class="w-full text-sm  bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter Description..." rows="5" id="description" name="description">{{ old('description') }}</textarea>
          @error('description')
          <div class="text-red-500 text-sm mt-1">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-span-2 flex gap-4 md:gap-6 mt-2">
          <button class="btn-primary" type="submit">
            Save
          </button>

        </div>
    </form>
  </div>
</div>
@endsection