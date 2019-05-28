<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @stack('style')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
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
    <script src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @stack('scripts')
    <script>
        jQuery(document).ready(function($) {
            $('form').on('click', '.btn-upload', function(event) {
                event.preventDefault();
                $(this).prev().click();
            });

            $('form').on('click', '.btn-delete', function(event) {
                event.preventDefault();
                swal({
                    title: "¿Esta seguro?",
                    text: "Recuerde que si elimina este registro no lo podra recuperar",
                    icon: "warning",
                    buttons: ['Cancelar', 'Eliminar'],
                    dangerMode: true,
                }).then((result) => {
                    if (result) {
                        $(this).parent().submit();
                    } else {
                        swal("El registro esta a salvo! :)");
                    }
                });
            });
        });
    </script>
</body>
</html>