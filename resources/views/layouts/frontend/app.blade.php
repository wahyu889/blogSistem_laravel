<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

   

    <!-- Fonts -->
    

    <!-- Styles -->

    <link href="{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/ionicons.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



    @stack('css')

</head>
<body>
    <header>
       @include('layouts.frontend.partial.header')
    </header>

    @yield('content')

    <footer>

      @include('layouts.frontend.partial.footer')
    </footer>


<script src="{{ asset('assets/frontend/js/jquery-3.1.1.min.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/tether.min.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/bootstrap.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <script>
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{ $error }}','Error',{
                    closeButton:true,
                    progressBar:true,
                });
            @endforeach
        @endif
    </script>
@stack('js')

</body>
</html>
