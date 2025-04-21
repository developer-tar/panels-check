@extends('layout.hr.main')

@section('content')
  <div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">New policy</h2>
    </div>

    <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">add</h4>
    </div>

    <form class="flex flex-col h-full" method="POST">
      @csrf
      <div class="grid grid-cols-2 gap-4 xxxl:gap-6 flex-grow">

      {{-- Compliance Area --}}
      <div class="col-span-2 md:col-span-1">
        <label for="category" class="md:text-lg font-medium block mb-4">
        policy Type
        </label>
        <select name="category" id="category" class="nc-select full" required>
        <option value="">Select category</option>
        <option value="employee_contracts" >Employee Contracts</option>
        <option value="safety_training">Safety Training</option>
        <option value="leave_policy">Leave Policy</option>
        <option value="data_protection">Data Protection</option>
        <option value="data_protection">Other</option>
        </select>
      </div>  
      <div class="col-span-2 md:col-span-1">
        <label for="message" class="md:text-lg font-medium block mb-4">
        Policy message
        </label>
        <textarea
        class="w-full text-sm bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter compliance note or alert..." rows="5" id="message" name="message"
        required></textarea>
      </div>



      </div>
      

    </div>
    <div class="col-span-2 flex gap-4 md:gap-6 mt-2">
    <button class="btn-primary" type="submit">
      Save Alert
    </button>
    </div>
    </form>
  </div>
  </div>
@endsection