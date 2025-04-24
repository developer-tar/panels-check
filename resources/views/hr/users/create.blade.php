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
            Select Company
          </label>
          <select name="sort" class="nc-select full">
            <option value="day">Netset </option>
            <option value="week">Luminoguru</option>

          </select>
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="name" class="mb-4 md:text-lg font-medium block">
            Employee Name
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="name" required />
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="name" class="mb-4 md:text-lg font-medium block">
            Curent Salary
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="name" required />
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="name" class="mb-4 md:text-lg font-medium block">
            Total experience
          </label>
          <input type="text"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="name" required />
        </div>
       
        <div class="col-span-2 md:col-span-1">
          <label for="payfor" class="mb-4 md:text-lg font-medium block">
            Status
          </label>
          <select name="sort" class="nc-select full">
            <option value="day">Active</option>
            <option value="week">Deactive</option>
          </select>
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
          <label for="date" class="md:text-lg font-medium block mb-4">
            Gender
          </label>
          <select name="sort" class="nc-select full">
            <option value="day">Male</option>
            <option value="week">Female</option>
            <option value="week">Other</option>
          </select>
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="number" class="md:text-lg font-medium block mb-4">
            Password
          </label>
          <input type="number"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter Number" id="number" required />
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="amount" class="md:text-lg font-medium block mb-4">
            Confirm Password
          </label>
          <input type="number"
            class="w-full text-sm  bg-secondary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter Amount" id="amount" required />
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