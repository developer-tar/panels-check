@extends('layout.hr.main')

@section('content')
  <div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Create a new plan</h2>

    </div>

    <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Creating</h4>
    </div>
    <form>

      <div class="grid grid-cols-2 gap-4 xxxl:gap-6">
      <div class="col-span-2 md:col-span-1">
        <label for="date" class="md:text-lg font-medium block mb-4">
        Select company
        </label>
        <select name="sort" class="nc-select full">
        <option value="day">Netset </option>
        <option value="week">Luminoguru</option>

        </select>
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="name" class="mb-4 md:text-lg font-medium block">
        Select Domain Name
        </label>
        <select name="sort" class="nc-select full">
        <option value="day">HealthCare </option>
        <option value="week">Home Loan</option>
        <option value="week">Other</option>

        </select>
      </div>


      <div class="col-span-2 md:col-span-1">
        <label for="medium" class="mb-4 md:text-lg font-medium block">
        Coverage Limit($)
        </label>
        <input type="number"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter name" id="name" required />
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="medium" class="mb-4 md:text-lg font-medium block">
        Start Period
        </label>
        <input type="number"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter name" id="name" required />
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="medium" class="mb-4 md:text-lg font-medium block">
        End Period
        </label>
        <input type="number"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter name" id="name" required />
      </div>

      <div class="col-span-2 md:col-span-1">
        <label for="date" class="md:text-lg font-medium block mb-4">
        Compare with Plan
        </label>
        <select name="sort" class="nc-select full">
        <option value="day">plan A</option>
        <option value="week">plan B</option>
        </select>
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="desc" class="md:text-lg font-medium block mb-4">
        Eligibility Rule
        </label>
        <textarea
        class="w-full text-sm  bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter Description..." rows="5" id="desc" required></textarea>
      </div>
      <div class="col-span-2 md:col-span-1 md:ltr:pr-5 md:rtl:pl-5 flex flex-col gap-4 xxl:gap-6">

        <div class="flex items-center justify-between">
        <div>
          <p class="font-medium text-base md:text-lg xl:text-xl mb-2">
          Automatic Reminder
          </p>
          <span class="text-xs md:text-sm">Automatic reminder for open enrollment user </span>
        </div>
        <div class="flex items-center justify-center">
          <label for="email" class="flex items-center cursor-pointer">
          <div class="relative">
            <input type="checkbox" id="email" class="custom-checkbox sr-only" checked="">
            <div class="block w-14 h-8 rounded-full bg bg-primary"></div>
            <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition translate-x-full">
            </div>
          </div>
          </label>
        </div>
        </div>
        <div class="flex items-center justify-between">
        <div>
          <p class="font-medium text-base md:text-lg xl:text-xl mb-2">
          Plan customization
          </p>
          <span class="text-xs md:text-sm">Allow plan customization</span>
        </div>
        <div class="flex items-center justify-center">
          <label for="sms" class="flex items-center cursor-pointer">
          <div class="relative">
            <input type="checkbox" id="sms" class="custom-checkbox sr-only">
            <div class="block w-14 h-8 rounded-full bg bg-primary/20"></div>
            <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition">
            </div>
          </div>
          </label>
        </div>
        </div>
      </div>
      <div class="col-span-2 md:col-span-1">
        <label for="desc" class="md:text-lg font-medium block mb-4">
        Customization notes
        </label>
        <textarea
        class="w-full text-sm  bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter Description..." rows="5" id="desc" required></textarea>
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