@extends('layouts.master')

@section('seo')
    <title>{{ setting('site.title') }} | {{ $category->name }}</title>
    <meta content="{{ $category->description }}" name="description">
    <meta content="{{ $category->name.', '.setting('site.keyboards') }}" name="keywords">
    
    @php
        $icon = Voyager::setting('site.logo', '../images/icon.png');
    @endphp

    <meta property="og:url"           content="{{ url('category/'.$category->slug) }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="{{ $category->name }}" />
    <meta property="og:description"   content="{{ $category->description }}" />
    <meta property="og:image"         content="{{ Voyager::image($icon) }}" />
@endsection

@section('content')
    <main id="main">
        <section>
            <div class="container">
                <div class="row">

                <div class="col-md-8" data-aos="fade-up">
                    <h3 class="category-title">Categoría: {{ $category->name }}</h3>

                    @forelse ($category->posts as $post)
                        @php
                            $publish_date = Carbon\Carbon::parse($post->publish_date);
                            $meses = array("","Ene","Feb","Mar","Abr","May","Jun","Jul","Agos","Sept","Oct","Nov","Dic");
                        @endphp
                        <div class="d-md-flex post-entry-2 half">
                            <a href="{{ url('post/'.$post->slug) }}" class="me-4 thumbnail">
                                <img src="{{ asset('storage/'.$post->banner) }}" alt="{{ $post->title }}" class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date">{{ $category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                <h3><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h3>
                                <p class="subtitle-ellipsis">{{ $post->subtitle }}</p>
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
                    @empty
                        
                    @endforelse

                    

                    {{-- <div class="text-start py-4">
                        <div class="custom-pagination">
                            <a href="#" class="prev">Prevous</a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#" class="next">Next</a>
                        </div>
                    </div> --}}
                </div>

                <div class="col-md-4">
                    <!-- ======= Sidebar ======= -->
                    <div class="aside-block">

                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Populares</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Tendencias</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <!-- Popular -->
                            <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                                @php
                                    $populars = App\Models\Post::whereRaw('(type is null or type = "")')->where('status', 'publicado')->where('deleted_at', NULL)->orderBy('views', 'DESC')->limit(10)->get();
                                @endphp
                                @forelse ($populars as $post)
                                    @php
                                        $publish_date = Carbon\Carbon::parse($post->publish_date);
                                    @endphp
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">{{ $post->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                        <h2 class="mb-2"><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h2>
                                        @if ($post->user)
                                            <span class="author mb-3 d-block">{{ $post->user->name }}</span>
                                        @endif
                                    </div>
                                @empty
                                    
                                @endforelse
                            </div>
                            <!-- End Popular -->

                            <!-- Trending -->
                            <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                                @php
                                    $trendings = App\Models\Post::where('type', 'destacada')->where('status', 'publicado')->where('deleted_at', NULL)->orderBy('order')->orderBy('id', 'DESC')->orderBy('views', 'DESC')->limit(10)->get();
                                @endphp
                                @forelse ($trendings as $post)
                                    @php
                                        $publish_date = Carbon\Carbon::parse($post->publish_date);
                                    @endphp
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">{{ $post->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                                        <h2 class="mb-2"><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h2>
                                        @if ($post->user)
                                            <span class="author mb-3 d-block">{{ $post->user->name }}</span>
                                        @endif
                                    </div>
                                @empty
                                    
                                @endforelse
                            </div>
                            <!-- End Trending -->

                        </div>
                    </div>

                    {{-- <div class="aside-block">
                        <h3 class="aside-title">Video</h3>
                        <div class="video-post">
                            <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                            <span class="bi-play-fill"></span>
                            <img src="{{ asset('assets/img/post-landscape-5.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div> --}}
                    <!-- End Video -->

                    <div class="aside-block">
                        <h3 class="aside-title">Categorías</h3>
                        <ul class="aside-links list-unstyled">
                            @foreach (App\Models\Category::where('deleted_at', NULL)->orderBy('order')->get() as $item)
                                <li><a href="{{ url('category/'.$item->slug) }}"><i class="bi bi-chevron-right"></i>{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Categories -->

                    {{-- <div class="aside-block">
                        <h3 class="aside-title">Etiquetas</h3>
                        <ul class="aside-tags list-unstyled">
                            <li><a href="{{ url('category/deportes') }}">Negocios</a></li>
                            <li><a href="{{ url('category/deportes') }}">Cultura</a></li>
                            <li><a href="{{ url('category/deportes') }}">Deportes</a></li>
                            <li><a href="{{ url('category/deportes') }}">Cocina</a></li>
                            <li><a href="{{ url('category/deportes') }}">Política</a></li>
                            <li><a href="{{ url('category/deportes') }}">Farandula</a></li>
                            <li><a href="{{ url('category/deportes') }}">Tecnología</a></li>
                            <li><a href="{{ url('category/deportes') }}">Viajes</a></li>
                        </ul>
                    </div> --}}
                    <!-- End Tags -->

                </div>

                </div>
            </div>
        </section>
    </main>
@endsection