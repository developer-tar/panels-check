@extends('layout.vendor.main')

@section('content')
<div class="main-inner">
  <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Create new notification</h2>
  </div>

  <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Creating new notification for sending</h4>
    </div>
    <form class="flex flex-col h-full">
      <div class="grid grid-cols-2 gap-4 xxxl:gap-6 flex-grow">
        <div class="col-span-2 md:col-span-12">
          <label for="date" class="md:text-lg font-medium block mb-4">
            Notification Type
          </label>
          <select name="sort" class="nc-select full">
            <option value="" selected disabled>Choose type</option>
            <option value="day">Reminder Alarm</option>
            <option value="week">Alert</option>
            <option value="week">Announcement</option>
          </select>
        </div>
        <div class="col-span-2 md:col-span-12">
          <label for="desc" class="md:text-lg font-medium block mb-4">
            Message
          </label>
          <textarea
            class="w-full text-sm bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter Text..." rows="5" id="desc" required></textarea>
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="date" class="md:text-lg font-medium block mb-4">
            Select User Type
          </label>
          <select name="sort" class="nc-select full">
            <option value="week">All</option>
            <option value="day">HR</option>
            <option value="week">Vendor</option>
            <option value="day">Employee</option>
          </select>
        </div>

        <div class="col-span-2 md:col-span-1">
          <label for="date" class="md:text-lg font-medium block mb-4">
            Schedule Date/time
          </label>
          <input type="number"
            class="w-full text-sm bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
            placeholder="Enter name" id="name" required />
        </div>
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
