@extends('layout.admin.main')

@section('content')
  <div class="main-inner">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
    <h2 class="h2">Create a new role</h2>

    </div>

    <div class="box mb-4 xxxl:mb-6">
    <div class="mb-6 pb-6 bb-dashed flex justify-between items-center">
      <h4 class="h4">Generating</h4>
    </div>
    <form>

      <div class="grid grid-cols-2 gap-4 xxxl:gap-6">
      <div class="col-span-2 md:col-span-12">
        <label for="name" class="mb-4 md:text-lg font-medium block">
        Name
        </label>
        <input type="text"
        class="w-full text-sm  bg-secondary/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter name" id="name" required value="HR"/>
      </div>
      <div class="col-span-2 md:col-span-12">
        <label for="payfor" class="mb-4 md:text-lg font-medium block">
        Status
        </label>
        <select name="sort" class="nc-select full">
        <option value="day" selected>Active</option>
        <option value="week">Deactive</option>
        </select>
      </div>
      <div class="col-span-2 md:col-span-12">
        <label for="desc" class="md:text-lg font-medium block mb-4">
        Enter Description
        </label>
        <textarea
        class="w-full text-sm  bg-n0 dark:bg-bg4 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3"
        placeholder="Enter Description..." rows="5" id="desc" required></textarea>
      </div>
      <div class="col-span-12 ">
        <!-- Header Row -->
        <div class="hidden lg:grid grid-cols-4 gap-4  dark:bg-bg3 px-6 py-5 font-semibold text-start">
        <div>Permission Name</div>
        <div>Add</div>
        <div>Update</div>
        <div>Delete</div>
        </div>

        <!-- Permission Row Example - View Users -->
        <div
        class="grid grid-cols-4 gap-4 items-center px-6 py-4 even:bg-secondary/5 dark:even:bg-bg3 border-b border-n30">
        <div class="font-medium">View Users</div>
        <div>
          <label class="inline-flex items-center cursor-pointer">
          <input type="checkbox" class="sr-only peer">
          <div
            class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:bg-primary relative transition-all duration-300">
            <div
            class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full shadow-md transition-transform peer-checked:translate-x-5">
            </div>
          </div>
          </label>
        </div>
        <div>
          <label class="inline-flex items-center cursor-pointer">
          <input type="checkbox" class="sr-only peer">
          <div
            class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:bg-primary relative transition-all duration-300">
            <div
            class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full shadow-md transition-transform peer-checked:translate-x-5">
            </div>
          </div>
          </label>
        </div>
        <div>
          <label class="inline-flex items-center cursor-pointer">
          <input type="checkbox" class="sr-only peer">
          <div
            class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:bg-primary relative transition-all duration-300">
            <div
            class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full shadow-md transition-transform peer-checked:translate-x-5">
            </div>
          </div>
          </label>
        </div>
        </div>

        <!-- Permission Row Example - Manage Roles -->
        <div
        class="grid grid-cols-4 gap-4 items-center px-6 py-4 even:bg-secondary/5 dark:even:bg-bg3 border-b border-n30">
        <div class="font-medium">Manage Roles</div>
        <div>
          <label class="inline-flex items-center cursor-pointer">
          <input type="checkbox" class="sr-only peer">
          <div
            class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:bg-primary relative transition-all duration-300"checked>
            <div
            class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full shadow-md transition-transform peer-checked:translate-x-5">
            </div>
          </div>
          </label>
        </div>
        <div>
          <label class="inline-flex items-center cursor-pointer">
          <input type="checkbox" class="sr-only peer">
          <div
            class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:bg-primary relative transition-all duration-300" checked>
            <div
            class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full shadow-md transition-transform peer-checked:translate-x-5">
            </div>
          </div>
          </label>
        </div>
        <div>
          <label class="inline-flex items-center cursor-pointer">
          <input type="checkbox" class="sr-only peer">
          <div
            class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:bg-primary relative transition-all duration-300">
            <div
            class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full shadow-md transition-transform peer-checked:translate-x-5">
            </div>
          </div>
          </label>
        </div>
        </div>

      </div>

      <div class="col-span-2 flex gap-4 md:gap-6 mt-2">
        <button class="btn-primary" type=" submit">
        Save
        </button>

      </div>
    </form>
    </div>
  </div>
@endsection