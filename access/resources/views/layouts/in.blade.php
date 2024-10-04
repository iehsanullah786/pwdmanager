<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include ('layouts.molecules.head')
        <link  rel="stylesheet"   href="{{ asset('build/css/main.min.css') }}">
        <link  rel="stylesheet"   href="{{ asset('build/css/main-b18048f506.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        

    </head>

    <body class="main body-{{ str_replace('.', '-', $ROUTE) }}">
        @include ('layouts.molecules.in-sidebar-mobile')

        <div class="wrapper">
            <div class="wrapper-box">
                @include ('layouts.molecules.in-sidebar')

                <div class="content pt-10 pb-10 sm:px-10">
                    <x-message type="error" />
                    <x-message type="success" />

                    @yield ('body')
                </div>
            </div>
        </div>

        @include ('layouts.molecules.footer')
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n""></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" "></script>
    </body>
</html>
