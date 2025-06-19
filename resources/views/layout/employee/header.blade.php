<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite(['resources/css/employee/app.scss'])

    <title>Employee panel</title>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const modalOverlay = document.querySelector(".profile-complete-modal");

            @if ($notShowPopup === false && !request()->routeIs('employee.user.profile'))
                modalOverlay?.classList.remove("modalhide");
            @endif
        });
    </script>

</head>

<body class="vertical bg-secondary/5 dark:bg-bg3 hidden">
    <!-- Loader -->
    {{-- <div
        class="loader flex items-center justify-center min-w-screen min-h-screen fixed !z-50 inset-0 bg-n0 dark:bg-bg4">
        <svg viewBox="25 25 50 50">
            <circle r="20" cy="50" cx="50"></circle>
        </svg>
    </div> --}}