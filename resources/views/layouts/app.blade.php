<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
            <div class="col-md-2 d-flex flex-column justify-content-between">
                <div class="">
                    <h4 class="pt-0 mt-0"><a href="{{ route('home') }}" class="text-dark">HARRY JEON</a></h4>
                    <nav class="nav flex-column">
                        <a class="nav-link pl-0" href="/works">WORKS</a>
                        <a class="nav-link pl-0" href="/vita">VITA</a>
                        <a class="nav-link pl-0" href="#" data-toggle="modal" data-target="#contactModal">CONTACT</a>
                    </nav>
                </div>
                <div class="text-right text-md-left">
                    @yield('sidebar')
                </div>
            </div>
            <main class="col">
                @unless(Route::currentRouteName() == 'home')
                    <div class="row">
                        <div class="col">
                            <h2 class="text-uppercase mb-4">
                                @yield('content-title')
                            </h2>
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
        <footer class="text-center text-sm-right mt-4 text-muted">
            <span class="border-top pt-2">
                <small>Imprint & Data Privacy | &copy; {{ date('Y') }} Harry Jeon</small>
            </span>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js-footer')
</body>
</html>
