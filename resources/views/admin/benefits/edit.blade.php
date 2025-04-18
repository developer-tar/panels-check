@extends('layout.main')

@section('content')
  <div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Update a  benefit enroll</h2>

    </div>

    <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
    <h4 class="h4">Updating a new Benefit to Employee</h4>
    </div>
    <form>

      <div class="grid grid-cols-2 gap-4 xxxl:gap-6">
      <div class="col-span-2 md:col-span-1">
      <label for="date" class="md:text-lg font-medium block mb-4">
        Select Employee
      </label>
      <select name="sort" class="nc-select full">
        <option value="day" selected>Employee 1 </option>
        <option value="week">Employee 2 </option>
        <option value="day">Employee 2 </option>
        <option value="week">Employee 3 </option>
        <option value="day">Employee 4 </option>
        <option value="week">Employee 5 </option>
      </select>
      </div>

      <div class="col-span-2 md:col-span-1">
      <label for="date" class="md:text-lg font-medium block mb-4">
        Select Plan
      </label>
      <select name="sort" class="nc-select full">
        <option value="day" selected>Healthcare </option>
        <option value="week">Retirement </option>
        <option value="day"> Plan A</option>
      </select>
      </div>

      <div class="col-span-2 md:col-span-1">
      <label for="date" class="md:text-lg font-medium block mb-4">
        Status
      </label>
      <select name="sort" class="nc-select full">
        <option value="day" selected>Pending </option>
        <option value="week">Approval </option>
        <option value="day"> Rejected</option>
      </select>
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