<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>


@if(session('error'))
    <script>
        const notyf = new Notyf({ position: { y: 'top', duration: 3500, } });
        notyf.error("{{ session('error') }}");
    </script>
@endif


@if(session('success'))
    <script>
        const notyf = new Notyf({ position: { y: 'top' }, duration: 3500 });
        notyf.success("{{ session('success') }}");
    </script>
@endif