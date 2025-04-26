@extends('layout.employee.main')

@section('content')
  <div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Update benefit enroll</h2>

    </div>

    <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Updating  Benefit to Employee</h4>
    </div>
    <form>
    <div class="mb-6 flex flex-wrap items-center gap-5 xl:gap-10">
        <img src="{{ asset('assets/images/placeholder.png') }}" class="h-20 w-20 lg:h-auto lg:w-auto"
          alt="placeholder" />
        <div class="flex gap-4">
          <input type="file" name="photo" id="photo" class="hidden" />
          <label for="photo" class="btn-primary"> Upload Document </label>
          <button class="btn-outline">Cancel</button>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4 xxxl:gap-6">
     
      
      <div class="col-span-2 md:col-span-1">
        <label for="date" class="md:text-lg font-medium block mb-4">
        Select company
        </label>
        <select name="sort" class="nc-select full">
        <option value="day" selected>Netset </option>
        <option value="week">Luminoguru</option>

        </select>
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="date" class="md:text-lg font-medium block mb-4">
        Select Domain
        </label>
        <select name="sort" class="nc-select full">
        <option value="day" selected>Healthcare </option>
        <option value="week">Retirement </option>
        <option value="day"> Plan A</option>
        </select>
      </div>

    <div class="col-span-2 md:col-span-1">
        <label for="medium" class="mb-4 md:text-lg font-medium block">
        Coverage Limit($)
        </label>
        <input type="number"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter name" id="name" required value="1000$"/>
      </div>
      <div class="col-span-2 md:col-span-2">
        <label for="desc" class="md:text-lg font-medium block mb-4">
        Reason for taking the benefits
        </label>
        <textarea
        class="w-full text-sm  bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter Description..." rows="5" id="desc" required></textarea>
      </div>
      <div class="col-span-2 flex gap-4 md:gap-6 mt-2">
        <button class="btn-primary" type="submit">
        Claim 
        </button>

        <button data-modal-target="modal1" class="btn-primary" type="button">Comparison</button>
        <!-- Modal element -->
        <div id="modal1" class="fixed inset-0 items-center justify-center z-[99] hidden">
        <div class="f-center h-screen w-screen">
          <div class="bg-white rounded-lg shadow-xl p-6 m-4 max-w-xl w-full">
          <h2 class="text-2xl font-bold mb-4">Comparison</h2>
          {{-- Comparison Table --}}
          <div class="mt-10">

            <h4 class="h4 mb-4">Benefit Comparison Table Based on values added.</h4>
            <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left border border-gray-200 rounded-lg">
              <thead class="bg-gray-100 text-gray-700">

              <th class="px-4 py-3">company name</th>
              <th class="px-4 py-3">Domain name</th>
              <th class="px-4 py-3">Enrollment start</th>
              <th class="px-4 py-3">Enrollment end</th>
              <th class="px-4 py-3">Coverage limit</th>
              <th class="px-4 py-3">No of employee enrolled</th>
              </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
              <tr>
                <td class="px-4 py-3">Netset</td>
                <td class="px-4 py-3">Healthcare</td>
                <td class="px-4 py-3">2025-09-19</td>
                <td class="px-4 py-3">2026-09-19</td>
                <td class="px-4 py-3">1000$</td>
                <td class="px-4 py-3">10</td>

              </tr>
              <tr>
                <td class="px-4 py-3">Luminoguru</td>
                <td class="px-4 py-3">Healthcare</td>
                <td class="px-4 py-3">2026-09-19</td>
                <td class="px-4 py-3">2027-09-19</td>
                <td class="px-4 py-3">10000$</td>
                <td class="px-4 py-3">200</td>
              </tr>
              <!-- Add more rows as needed -->
              </tbody>
            </table>
            </div>
          </div>
          <div class="flex justify-end">
            <button data-modal-close="modal1"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Close</button>
          </div>
          </div>
        </div>
        </div>

      </div>
    </form>
    </div>
  </div>
@endsection
