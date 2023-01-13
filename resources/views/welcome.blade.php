@extends('layouts.master')

@section('seo')
    <title>{{ setting('site.title') }} | Bienvenido</title>
    <meta content="{{ setting('site.description') }}" name="description">
    <meta content="{{ setting('site.keyboards') }}" name="keywords">
    
    @php
        $icon = Voyager::setting('site.logo', '../images/icon.png');
    @endphp

    <meta property="og:url"           content="{{ url('') }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="{{ setting('site.title') }}" />
    <meta property="og:description"   content="{{ setting('site.description') }}" />
    <meta property="og:image"         content="{{ Voyager::image($icon) }}" />
@endsection

@php
    $meses = array("","Ene","Feb","Mar","Abr","May","Jun","Jul","Agos","Sept","Oct","Nov","Dic");
@endphp

@section('content')
    <main id="main">

        <!-- ======= Hero Slider Section ======= -->
        <section id="hero-slider" class="hero-slider">
            <div class="container-md" data-aos="fade-in">
                <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            @php
                                $banners = App\Models\Post::where('type', 'portada')->where('status', 'publicado')->where('deleted_at', NULL)->orderBy('order')->orderBy('views', 'DESC')->get();
                            @endphp
                            @forelse ($banners as $item)
                                <div class="swiper-slide">
                                    <a href="{{ url('post/'.$item->slug) }}" class="img-bg d-flex align-items-end" style="background-image: url('{{ asset('storage/'.$item->banner) }}');">
                                        <div class="img-bg-inner">
                                            <h2>{{ $item->title }}</h2>
                                            <p>{{ $item->subtitle }}</p>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <div class="swiper-slide">
                                    <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('{{ asset('images/banner.jpg') }}');">
                                        <div class="img-bg-inner">
                                            <h2>{{ setting('site.title') }}</h2>
                                            <p>{{ setting('site.description') }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforelse
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                </div>
            </div>
        </section><!-- End Hero Slider Section -->

        <!-- ======= Post Grid Section ======= -->
        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                @php
                    $trendings = App\Models\Post::where('type', 'destacada')->where('status', 'publicado')->where('deleted_at', NULL)->orderBy('order')->orderBy('views', 'DESC')->get();
                @endphp
                <div class="row g-5">
                    @if ($trendings->count() > 0)
                        @php
                            $post = $trendings[0];
                            $publish_date = Carbon\Carbon::parse($post->publish_date);
                        @endphp
                        <div class="col-lg-4">
                            <div class="post-entry-1 lg">
                                <a href="{{ url('post/'.$post->slug) }}"><img src="{{ asset('storage/'.$post->banner) }}" alt="{{ $post->title }}" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">{{ $post->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                <h2><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h2>
                                <p class="mb-4 d-block">{{ $post->subtitle }}</p>

                                @if ($post->user)
                                    <div class="d-flex align-items-center author">
                                        <div class="photo"><img src="{{ asset('storage/'.$post->user->avatar) }}" alt="{{ $post->user->name }}" class="img-fluid"></div>
                                        <div class="name">
                                            <h3 class="m-0 p-0">{{ $post->user->name }}</h3>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                    <div class="col-lg-8">
                        <div class="row g-5">
                            @if ($trendings->count() > 1)
                                <div class="col-lg-4 border-start custom-border">
                                    @foreach ($trendings->skip(1)->take(3) as $post)
                                        @php
                                            $publish_date = Carbon\Carbon::parse($post->publish_date);
                                        @endphp
                                        <div class="post-entry-1">
                                            <a href="{{ url('post/'.$post->slug) }}"><img src="{{ asset('storage/'.$post->banner) }}" alt="{{ $post->title }}" class="img-fluid"></a>
                                            <div class="post-meta"><span class="date">{{ $post->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                            <h2><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h2>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            @if ($trendings->count() > 3)
                                <div class="col-lg-4 border-start custom-border">
                                    @foreach ($trendings->skip(4)->take(3) as $post)
                                        @php
                                            $publish_date = Carbon\Carbon::parse($post->publish_date);
                                        @endphp
                                        <div class="post-entry-1">
                                            <a href="{{ url('post/'.$post->slug) }}"><img src="{{ asset('storage/'.$post->banner) }}" alt="{{ $post->title }}" class="img-fluid"></a>
                                            <div class="post-meta"><span class="date">{{ $post->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                            <h2><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h2>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <!-- Trending Section -->
                            <div class="col-lg-4">

                                <div class="trending">
                                    <h3>Tendencias</h3>
                                    @if ($trendings->count() > 7)
                                        <ul class="trending-post">
                                            @php
                                                $cont = 1;
                                            @endphp
                                            @foreach ($trendings->skip(7)->take(5) as $post)
                                                @php
                                                    $publish_date = Carbon\Carbon::parse($post->publish_date);
                                                @endphp
                                                <li>
                                                    <a href="{{ url('post/'.$post->slug) }}">
                                                        <span class="number">{{ $cont }}</span>
                                                        <h3>{{ $post->title }}</h3>
                                                        <span class="author">{{ $post->user ? $post->user->name : '' }}</span>
                                                    </a>
                                                </li>
                                                @php
                                                    $cont++;
                                                @endphp
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>

                            </div> <!-- End Trending Section -->
                        </div>
                    </div>

                </div> <!-- End .row -->
            </div>
        </section> <!-- End Post Grid Section -->

        @php
            $categories = App\Models\Category::whereHas('posts', function($q){
                                $q->whereRaw('(type is null or type = "")')->where('status', 'publicado')->where('deleted_at', NULL);
                            })->with(['posts' => function($q){
                                $q->orderBy('order')->orderBy('views', 'DESC');
                            }])->where('deleted_at', NULL)->orderBy('order')->get();
            // dd($categories);
            $cont = 1;
        @endphp

        @foreach ($categories as $category)
            <section class="category-section">
                <div class="container" data-aos="fade-up">
                    <div class="section-header d-flex justify-content-between align-items-center mb-5">
                        <h2>{{ $category->name }}</h2>
                        <div><a href="{{ url('category/'.$category->slug) }}" class="more">Ver todos</a></div>
                    </div>

                    <div class="row">
                        <div class="col-md-9 {{--  Alternar estilos de secciones --}} @if ($cont %2 == 0) order-md-2 @endif">
                            @php
                                $post = $category->posts[0];
                                $publish_date = Carbon\Carbon::parse($post->publish_date);
                            @endphp
                            <div class="d-lg-flex post-entry-2">
                                <a href="{{ url('post/'.$post->slug) }}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                    <img src="{{ asset('storage/'.$post->banner) }}" alt="{{ $post->title }}" class="img-fluid">
                                </a>
                                <div>
                                    <div class="post-meta"><span class="date">{{ $category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                    <h3><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h3>
                                    <p>{{ $post->subtitle }}</p>
                                    @if ($post->user)
                                        <div class="d-flex align-items-center author">
                                            <div class="photo"><img src="{{ asset('storage/'.$post->user->avatar) }}" alt="{{ $post->user->name }}" class="img-fluid"></div>
                                            <div class="name">
                                                <h3 class="m-0 p-0">{{ $post->user->name }}</h3>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                    
                            <div class="row">
                                @php
                                    $post = null;
                                    if($category->posts->count() > 1){
                                        $post = $category->posts[1];
                                        $publish_date = Carbon\Carbon::parse($post->publish_date);
                                    }
                                @endphp
                                @if ($post)
                                    <div class="col-lg-8 order-md-2">
                                        <div class="post-entry-1">
                                            <a href="{{ url('post/'.$post->slug) }}"><img src="{{ asset('storage/'.$post->banner) }}" alt="{{ $post->title }}" class="img-fluid"></a>
                                            <div class="post-meta"><span class="date">{{ $category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                            <h2 class="mb-2"><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h2>
                                            <span class="author mb-3 d-block">{{ $post->user ? $post->user->name : '' }}</span>
                                            <p class="mb-4 d-block">{{ $post->subtitle }}</p>
                                        </div>
                                    </div>    
                                @endif
                                
                                <div class="col-lg-4">
                                    @php
                                        $post = null;
                                        if($category->posts->count() > 2){
                                            $post = $category->posts[2];
                                            $publish_date = Carbon\Carbon::parse($post->publish_date);
                                        }
                                    @endphp
                                    @if ($post)
                                        <div class="post-entry-1 border-bottom">
                                            <a href="{{ url('post/'.$post->slug) }}"><img src="{{ asset('storage/'.$post->banner) }}" alt="{{ $post->title }}" class="img-fluid"></a>
                                            <div class="post-meta"><span class="date">{{ $category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                            <h2 class="mb-2"><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h2>
                                            <span class="author mb-3 d-block">{{ $post->user ? $post->user->name : '' }}</span>
                                            <p class="mb-4 d-block subtitle-ellipsis">{{ $post->subtitle }}</p>
                                        </div>
                                    @endif
                    
                                    @php
                                        $post = null;
                                        if($category->posts->count() > 3){
                                            $post = $category->posts[3];
                                            $publish_date = Carbon\Carbon::parse($post->publish_date);
                                        }
                                    @endphp
                                    @if ($post)
                                        <div class="post-entry-1">
                                            <div class="post-meta"><span class="date">{{ $category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                            <h2 class="mb-2"><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h2>
                                            <span class="author mb-3 d-block">{{ $post->user ? $post->user->name : '' }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            @if ($category->posts->count() > 4)
                                @for ($i = 4; $i < $category->posts->count(); $i++)
                                    @php
                                        if($i > 10){
                                            break;
                                        }

                                        $post = $category->posts[$i];
                                        $publish_date = Carbon\Carbon::parse($post->publish_date);
                                    @endphp
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">{{ $category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                        <h2 class="mb-2"><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h2>
                                        <span class="author mb-3 d-block">{{ $post->user ? $post->user->name : '' }}</span>
                                    </div>
                                @endfor
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            @php
                $cont++;
            @endphp
        @endforeach
    </main>
@endsection

@section('css')
    <style>
        .subtitle-ellipsis{
            text-overflow:ellipsis;
            overflow:hidden;
            display: -webkit-box !important;
            -webkit-line-clamp: 10;
            -webkit-box-orient: vertical;
            white-space: normal;
        }
    </style>
@endsection