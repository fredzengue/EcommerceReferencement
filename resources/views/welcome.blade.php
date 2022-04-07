<!doctype html><html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.scss') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/elementor/js/ct-parallax-lib.js?ver=all'
        id='ct-parallax-lib-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/elementor/js/ct-parallax.js?ver=all'
        id='ct-parallax-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/elementor/js/ct-progressbar-widget.js?ver=1.5.0'
        id='ct-progressbar-widget-js-js'></script>
    <script type='text/javascript' id='sbi_scripts-js-extra'>
        /* <![CDATA[ */
        var sb_instagram_js_options = {
            "font_method": "svg",
            "resized_url": "https:\/\/demo.casethemes.net\/organio\/wp-content\/uploads\/sb-instagram-feed-images\/",
            "placeholder": "https:\/\/demo.casethemes.net\/organio\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png",
            "ajax_url": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/instagram-feed/js/sbi-scripts.min.js?ver=6.0.4'
        id='sbi_scripts-js'></script>
    <script type='text/javascript' defer
        src='https://demo.casethemes.net/organio/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.8.7'
        id='mc4wp-forms-api-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.5.6'
        id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.5.6'
        id='elementor-frontend-modules-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6'
        id='swiper-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.5.6'
        id='share-link-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0'
        id='elementor-dialog-js'></script>
    <script type='text/javascript' id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.5.6",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "a11y_improvements": true,
                "e_import_export": true,
                "e_hidden_wordpress_widgets": true,
                "landing-pages": true,
                "elements-color-picker": true,
                "favorite-widgets": true,
                "admin-top-bar": true
            },
            "urls": {
                "assets": "https:\/\/demo.casethemes.net\/organio\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 30,
                "title": "Organio%20%E2%80%93%20Organic%20%26%20Food%20Store%20WordPress%20Theme",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.5.6'
        id='elementor-frontend-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.5.6'
        id='preloaded-modules-js'></script>
</body>

</html>
