<!-- Modal -->
<div class="profile-complete-modal fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500">
    <div class="overflow-y-auto">
        <div
            class="modal box modal-inner absolute left-1/2 my-10 max-h-[90vh] w-[95%] max-w-[710px] duration-300 -translate-x-1/2 overflow-y-auto xl:p-8">
            <div class="relative">
                <!-- Header -->
                <div class="bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6">
                    <h4 class="h4">Message</h4>
                </div>

                <!-- Message Box -->
                <div class="mb-6 rounded-xl bg-yellow-100 p-4 text-yellow-800 text-sm md:text-base">
                    <span class="font-medium">Please complete your profile.</span>
                    <a href="{{route('employee.user.profile')}}"
                       class="underline font-semibold text-yellow-800 hover:text-yellow-900 ml-1">
                        Click here to update now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


