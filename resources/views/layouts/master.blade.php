<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Favicon -->
        @php
            $icon = Voyager::setting('site.logo', '../images/icon.png');
        @endphp
        <link rel="shortcut icon" href="{{ Voyager::image($icon) }}" type="image/png">

        @yield('seo')

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        {{-- <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> --}}

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

        <!-- Template Main CSS Files -->
        <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

        @yield('css')

        <style>
            .title-ellipsis{
                text-overflow:ellipsis;
                overflow:hidden;
                display: -webkit-box !important;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                white-space: normal;
            }
            .subtitle-ellipsis{
                text-overflow:ellipsis;
                overflow:hidden;
                display: -webkit-box !important;
                -webkit-line-clamp: 10;
                -webkit-box-orient: vertical;
                white-space: normal;
            }
        </style>

        <!-- =======================================================
        * Template Name: ZenBlog - v1.3.0
        * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
        * Author: BootstrapMade.com
        * License: https:///bootstrapmade.com/license/
        ======================================================== -->

        <!-- Google tag (gtag.js) -->
        @if (env('GOOGLE_ANALYTICS_ID') && !env('APP_DEBUG'))
            <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_ID') }}"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', '{{ env('GOOGLE_ANALYTICS_ID') }}');
            </script>
        @endif
    </head>
    <body>
        
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v15.0&appId=2989546164659083&autoLogAppEvents=1" nonce="gLusA6cu"></script>
        
        <!-- ======= Header ======= -->
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                <a href="{{ url('') }}" class="logo d-flex align-items-center">
                    @if(setting('site.navbar_logo'))
                        @php
                            $navbar = Voyager::setting('site.navbar_logo');
                        @endphp
                        <img src="{{ Voyager::image($navbar) }}" alt="{{ setting('site.title') }}" >
                    @else
                        <h1>{{ setting('site.title') }}</h1>
                    @endif
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                    <li><a href="{{ url('') }}">Inicio</a></li>
                    <li><a href="{{ url('about') }}">Acerca de</a></li>
                    <li class="dropdown"><a href=""><span>Categorías</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            @foreach (App\Models\Category::where('deleted_at', NULL)->orderBy('order')->get() as $item)
                                <li><a href="{{ url('category/'.$item->slug) }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ url('videos') }}">Cara a Cara</a></li>
                    <li><a href="{{ url('contact') }}">Contacto</a></li>
                    </ul>
                </nav><!-- .navbar -->

                <div class="position-relative">
                    @if (setting('social.facebook'))
                        <a href="{{ setting('social.facebook') }}" target="_blank" class="mx-2"><span class="bi-facebook"></span></a>    
                    @endif
                    @if (setting('social.twitter'))
                        <a href="{{ setting('social.twitter') }}" target="_blank" class="mx-2"><span class="bi-twitter"></span></a>
                    @endif
                    @if (setting('social.instagram'))
                        <a href="{{ setting('social.instagram') }}" target="_blank" class="mx-2"><span class="bi-instagram"></span></a>
                    @endif
                    @if (setting('social.youtube'))
                        <a href="{{ setting('social.youtube') }}" target="_blank" class="mx-2"><span class="bi-youtube"></span></a>
                    @endif
                    @if (setting('social.whatsapp'))
                        <a href="https://wa.me/{{ setting('social.whatsapp') ?? '59175199157' }}?text=Vi su página web" target="_blank"class="mx-2"><span class="bi-whatsapp"></span></a>
                    @endif

                    <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                    <i class="bi bi-list mobile-nav-toggle"></i>

                    <!-- ======= Search Form ======= -->
                    <div class="search-form-wrap js-search-form-wrap">
                        <form action="search-result.html" class="search-form">
                            <span class="icon bi-search"></span>
                            <input type="text" placeholder="Buscar" class="form-control">
                            <button class="btn js-search-close"><span class="bi-x"></span></button>
                        </form>
                    </div><!-- End Search Form -->

                </div>

            </div>

        </header><!-- End Header -->

        @yield('content')        

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="footer-content">
            <div class="container">

                <div class="row g-5">
                <div class="col-lg-4">
                    <h3 class="footer-heading">{{ setting('site.title') }}</h3>
                    <p>{{ setting('site.description') }}</p>
                    <p><a href="{{ url('about') }}" class="footer-link-more">Ver más</a></p>
                </div>
                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Enlaces</h3>
                    <ul class="footer-links list-unstyled">
                    <li><a href="{{ url('') }}"><i class="bi bi-chevron-right"></i> Inicio</a></li>
                    <li><a href="{{ url('about') }}"><i class="bi bi-chevron-right"></i> Acerca de</a></li>
                    <li><a href="{{ url('contact') }}"><i class="bi bi-chevron-right"></i> Contacto</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Categorías</h3>
                    <ul class="footer-links list-unstyled">
                        @foreach (App\Models\Category::where('deleted_at', NULL)->limit(5)->orderBy('order')->get() as $item)
                            <li><a href="{{ url('category/'.$item->slug) }}"><i class="bi bi-chevron-right"></i> {{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h3 class="footer-heading">Noticias recientes</h3>

                    @php
                        $latest = App\Models\Post::where('status', 'publicado')->where('deleted_at', NULL)->orderBy('order')->orderBy('id', 'DESC')->orderBy('views', 'DESC')->limit(4)->get();
                    @endphp

                    <ul class="footer-links footer-blog-entry list-unstyled">
                        @php
                            $meses = array("","Ene","Feb","Mar","Abr","May","Jun","Jul","Agos","Sept","Oct","Nov","Dic");
                        @endphp
                        @foreach ($latest as $post)
                            @php
                                $publish_date = Carbon\Carbon::parse($post->publish_date);
                            @endphp
                            <li>
                                <a href="{{ url('post/'.$post->slug) }}" class="d-flex align-items-center">
                                    <img src="{{ asset('storage/'.$post->banner) }}" alt="{{ $post->title }}" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">{{ $post->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                        <span class="title-ellipsis">{{ Str::upper($post->title) }}</span>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
                </div>
            </div>
            </div>

            <div class="footer-legal">
                <div class="container">

                    <div class="row justify-content-between">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <div class="copyright">
                        © Copyright <strong><span>DelfinTV</span></strong>. Todos los derechos reservados
                        </div>

                        <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                        Diseñado por <a href="{{ env('APP_DEVELOPER_URL') }}" target="_blank">{{ env('APP_DEVELOPER_NAME') }}</a>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                            @if (setting('social.facebook'))
                                <a href="{{ setting('social.facebook') }}" target="_blank" class="mx-2"><span class="bi-facebook"></span></a>    
                            @endif
                            @if (setting('social.twitter'))
                                <a href="{{ setting('social.twitter') }}" target="_blank" class="mx-2"><span class="bi-twitter"></span></a>
                            @endif
                            @if (setting('social.instagram'))
                                <a href="{{ setting('social.instagram') }}" target="_blank" class="mx-2"><span class="bi-instagram"></span></a>
                            @endif
                            @if (setting('social.youtube'))
                                <a href="{{ setting('social.youtube') }}" target="_blank" class="mx-2"><span class="bi-youtube"></span></a>
                            @endif
                            @if (setting('social.whatsapp'))
                                <a href="https://wa.me/{{ setting('social.whatsapp') ?? '59175199157' }}?text=Vi su página web" target="_blank" class="mx-2"><span class="bi-whatsapp"></span></a>
                            @endif
                        </div>

                    </div>

                    </div>

                </div>
            </div>

        </footer>

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>