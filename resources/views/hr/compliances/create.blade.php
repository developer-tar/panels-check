@extends('layout.hr.main')

@section('content')
  <div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Add new  Compliance</h2>
    </div>

    <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Add</h4>
    </div>

    <form class="flex flex-col h-full" method="POST">
      @csrf
      <div class="grid grid-cols-2 gap-4 xxxl:gap-6 flex-grow">

      {{-- Compliance Area --}}
      <div class="col-span-2 md:col-span-1">
        <label for="category" class="md:text-lg font-medium block mb-4">
        Compliance Type
        </label>
        <select name="category" id="category" class="nc-select full" required>
        <option value="">Select category</option>
        <option value="employee_contracts" >Employee Contracts</option>
        <option value="safety_training">Safety Training</option>
        <option value="leave_policy">Leave Policy</option>
        <option value="data_protection">Data Protection</option>
        </select>
      </div>

      {{-- Compliance Status --}}
      <div class="col-span-2 md:col-span-1">
        <label for="status" class="md:text-lg font-medium block mb-4">
        Type of complaint member
        </label>
        <select name="status" id="status" class="nc-select full" required>
        <option value="hr">HR</option>
        <option value="vendor">Vendor</option>
        <option value="employee" >Employee</option>
        </select>
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="status" class="md:text-lg font-medium block mb-4">
        complaint Member name
        </label>
        <select name="status" id="status" class="nc-select full" required>
        <option value="hr">All </option>
        <option value="vendor" >Employee 1</option>

        <option value="vendor">Employee 2</option>

        </select>
      </div>

      <div class="col-span-2 md:col-span-1">
        <label for="status" class="md:text-lg font-medium block mb-4">
        Type of filed member
        </label>
        <select name="status" id="status" class="nc-select full" required>
        <option value="hr">HR</option>
        <option value="vendor">Vendor</option>
        <option value="employee" selected>Employee</option>
        </select>
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="status" class="md:text-lg font-medium block mb-4">
        Filed by
        </label>
        <select name="status" id="status" class="nc-select full" required>
        <option value="hr">All </option>
        <option value="vendor">Employee 1</option>

        <option value="vendor" >Employee 2</option>

        </select>
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="status" class="md:text-lg font-medium block mb-4">
        status
        </label>
        <select name="status" id="status" class="nc-select full" required>
        <option value="hr">Open </option>
        <option value="vendor" >Under Investigation</option>

        <option value="vendor"> Escalated</option>
        <option value="vendor">Resolved</option>
        <option value="vendor">Closed</option>
        </select>
        
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="status" class="md:text-lg font-medium block mb-4">
        Assigned to
        </label>
        <select name="status" id="status" class="nc-select full" required>
        <option value="hr">Hr Department </option>
        <option value="vendor" >Legal Team</option>
        </select>
      </div>
      {{-- Message --}}
      <div class="col-span-2 md:col-span-1">
        <label for="message" class="md:text-lg font-medium block mb-4">
        Complaint Message
        </label>
        <textarea
        class="w-full text-sm bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter compliance note or alert..." rows="5" id="message" name="message"
        required></textarea>
      </div>



      {{-- Compliance Time --}}
      <div class="col-span-2 md:col-span-1">
        <label for="schedule_at" class="md:text-lg font-medium block mb-4">
        Date Filed
        </label>
        <input type="datetime-local"
        class="w-full text-sm bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        id="schedule_at" name="schedule_at" required />
      </div>
      <div class="col-span-2 md:col-span-1">
      <label for="schedule_at" class="md:text-lg font-medium block mb-4">
        Date Resolved
      </label>
      <input type="datetime-local"
        class="w-full text-sm bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        id="schedule_at" name="schedule_at" required />
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