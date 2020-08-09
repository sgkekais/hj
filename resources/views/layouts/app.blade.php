<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harry Jeon') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">



</head>
<body>
    <!-- Contact Modal -->
    <div class="modal" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0 rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">CONTACT</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Harry Jeon</h4>
                    Send inquiries to:
                    <a href="mailto:info@harryjeon.com">info@harryjeon.com</a>
                </div>
            </div>
        </div>
    </div>
    <div id="app" class="container-fluid p-3 p-sm-5 h-100 d-flex flex-column justify-content-between">
        <div class="row">
            <div class="col-md-3 d-flex flex-column justify-content-between">
                <div class="">
                    <h4 class="pt-0 mt-0"><a href="{{ route('home') }}" class="text-dark">HARRY JEON</a></h4>
                    <nav class="nav flex-column">
                        <a class="nav-link pl-0" href="#worklist" data-toggle="collapse" >WORKS</a>
                        <ul class="list-unstyled collapse {{ Route::is('works.*') ? "show" : null }}" id="worklist">
                            @foreach(\App\Work::orderBy('year', 'desc')->get() as $work)
                                <li>
                                    <a class="nav-link pl-2 " href="{{ route('works.show', $work) }}" style="{{ Request::segment(2) == $work->slug ? "color: #343a40" : null }}"><small>{{ $work->link_title }}</small></a>
                                </li>
                            @endforeach
                        </ul>
                        <a class="nav-link pl-0" href="/vita">VITA</a>
                        <a class="nav-link pl-0" href="#" data-toggle="modal" data-target="#contactModal">CONTACT</a>
                    </nav>
                </div>
                <div class="text-right text-md-left">
                    @yield('sidebar')
                </div>
            </div>
            <main class="col">
                <hr class="d-flex d-md-none">
                @unless(Route::currentRouteName() == 'home')
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-4">
                                @yield('content-title')
                            </h4>
                        </div>
                    </div>
                @endunless
                <div class="row">
                    <div class="col">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
        <footer class="text-left text-sm-right mt-4 text-muted">
            <span class="border-top pt-2">
                <small>{{-- TODO: Imprint & Data Privacy |  --}}&copy; {{ date('Y') }} Harry Jeon</small>
            </span>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js-footer')
</body>
</html>
