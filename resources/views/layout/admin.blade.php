<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Xeal Staffing</title>
        @include('layout.partials.header')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="preloader"></div>
        <div id="main-wrapper">
            @include('layout.partials.adminheader')
            <div class="clearfix"></div>
            <div class="dashboard-wrap bg-light">
                @include('layout.partials.sidebar') 
                @yield('content')
            </div>
            <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
        </div>
        @include('layout.partials.scripts')
    </body>
</html>
