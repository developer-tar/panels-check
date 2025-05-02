<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
<script>
    $('document').ready(function () {
        $('#toggleBtn').click(function () {
            var passwordField = $('#password2');
            var passwordFieldType = passwordField.attr('type');

            if (passwordFieldType === 'password') {
                passwordField.attr('type', 'text');
                $(this).find('i').toggle();
            } else {
                passwordField.attr('type', 'password');
                $(this).find('i').toggle();
            }
        });
    });

</script>

@if(session('error'))
    <script>
        const notyf = new Notyf({ position: { y: 'top', duration: 3500, } });
        notyf.error("{{ session('error') }}");
    </script>
@endif
