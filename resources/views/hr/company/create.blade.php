@extends('layout.hr.main')

@section('content')
<div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
      <h2 class="h2">Register a new Company</h2>
     
    </div>

    <div class="box mb-4 xxxl:mb-6">
      <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
        <h4 class="h4">Registering</h4>
      </div>
      <form>
      <div class="mb-6 flex flex-wrap items-center gap-5 xl:gap-10">
        <img src="{{ asset('assets/images/placeholder.png') }}" class="h-20 w-20 lg:h-auto lg:w-auto"
          alt="placeholder" />
        <div class="flex gap-4">
          <input type="file" name="photo" id="photo" class="hidden" />
          <label for="photo" class="btn-primary"> Upload Photo </label>
          <button class="btn-outline">Cancel</button>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4 xxxl:gap-6">
      <div class="col-span-2 md:col-span-1">
          <label for="name" class="mb-4 md:text-lg font-medium block">
            Name
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="name" required />
        </div>
       
        <div class="col-span-2 md:col-span-1">
          <label for="medium" class="mb-4 md:text-lg font-medium block">
            Email
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="name" required />
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="payfor" class="mb-4 md:text-lg font-medium block">
            type
          </label>
          <select name="sort" class="nc-select full">
            <option value="day">LLC</option>
            <option value="week">PVT LTD</option>
            <option value="week">Coorportion</option>
          </select>
        </div>
       
        <div class="col-span-2 md:col-span-1">
          <label for="medium" class="mb-4 md:text-lg font-medium block">
            Registration number
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="name" required />
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="medium" class="mb-4 md:text-lg font-medium block">
            Wesbite Url
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="name" required />
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
