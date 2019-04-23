<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
        @yield('content') 
    </div>
    @include('layouts.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.8.7/dist/sweetalert2.all.min.js"></script> --}}
    @stack('scripts')
    <script>
        jQuery(document).ready(function($) {
            $('form').on('click', '.btn-upload', function(event) {
                event.preventDefault();
                $(this).prev().click();
            });

            $('form').on('click', '.btn-delete', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Esta seguro?',
                    text: 'Recuerde que si elimina este registro no lo prodra recuperar',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#016E35',
                    cancelButtonColor: '#e31019',
                    confirmButtonText: 'Si, eliminalo!',
                    cancelButtonText: 'No, cancelar!'
                }).then((result) => {
                    if (result.value) {
                        $(this).parent().submit();
                    }
                });
            });
        });
    </script>
</body>
</html>