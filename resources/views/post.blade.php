@extends('layouts.master')

@section('seo')
    <title>{{ $post->title }}</title>
    <meta content="{{ $post->subtitle }}" name="description">
    <meta content="{{ $post->tags }}" name="keywords">
    
    @php
        $banner = $post->banner;
    @endphp

    <meta property="og:url"           content="{{ url('post/'.$post->slug) }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="{{ $post->title }}" />
    <meta property="og:description"   content="{{ $post->subtitle }}" />
    <meta property="og:image"         content="{{ Voyager::image($banner) }}" />
@endsection

@section('content')
    <main id="main">

        <section class="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post-content" data-aos="fade-up">

                        @php
                            $meses = array("","Ene","Feb","Mar","Abr","May","Jun","Jul","Agos","Sept","Oct","Nov","Dic");
                            $publish_date = Carbon\Carbon::parse($post->publish_date);
                        @endphp

                        <!-- ======= Single Post Content ======= -->
                        <div class="single-post">
                            <div class="post-meta"><span class="date">{{ $post->category->name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $publish_date->format('d').' de '.$meses[($publish_date->format('n'))].' de '.$publish_date->format('Y') }}</span></div>
                            <h1 class="mb-5">{{ $post->title }}</h1>
                            <p><span class="firstcharacter">{{ substr($post->subtitle, 0, 1) }}</span>{{ substr($post->subtitle, 1) }}</p>

                            <div class="col-md-12 my-4">
                                <img src="{{ Voyager::image($banner) }}" alt="{{ $post->title }}" class="img-fluid" style="width: 100% !important">
                            </div>
                            
                            {!! $post->body !!}

                            <br><br>
                            <table align="right">
                                <tr>
                                    <td>
                                        <a href="https://wa.me/?text={{ url('post/'.$post->slug) }}" target="_blank" class="btn btn-success btn-sm" style="height: 28px;"><i class="bi-whatsapp"></i> WhastApp</a>
                                    </td>
                                </tr>
                            </table>
                            <br><br>
                        </div>
                        @php
                            $customer_carousel = App\Models\Customer::where('status', 1)->where('type', 'banner')->inRandomOrder()->first();
                        @endphp
                        @if ($customer_carousel)
                        <section class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{ $customer_carousel->web }}" target="_blank">
                                        <div class="card-advertising">
                                            <div class="image-advertising">
                                                <img id="img-carousel" src="{{ asset('storage/'.$customer_carousel->banner) }}" alt="Advertising">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </section>
                        @endif
                    </div>
                    <div class="col-md-3">
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

                        <div class="aside-block">
                            {{-- <h3 class="aside-title">Video</h3>
                            <div class="video-post">
                                <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                                <span class="bi-play-fill"></span>
                                <img src="{{ asset('assets/img/post-landscape-5.jpg') }}" alt="" class="img-fluid">
                                </a>
                            </div> --}}
                            @php
                                $customer = App\Models\Customer::where('status', 1)->whereRaw('(type = "" or type is null)')->inRandomOrder()->first();
                            @endphp
                            @if ($customer)
                                <a href="{{ $customer->web }}" target="_blank">
                                    <div class="card-advertising">
                                        <div class="image-advertising">
                                            <img src="{{ asset('storage/'.str_replace('.', '-medium.', $customer->banner)) }}" alt="Avatar">
                                        </div>
                                        {{-- <div class="overlay-advertising">
                                            <div class="text-advertising">Click para ver más</div>
                                        </div> --}}
                                    </div>
                                </a>
                            @endif
                        </div>
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
                            <h3 class="aside-title">Tags</h3>
                            <ul class="aside-tags list-unstyled">
                                <li><a href="category.html">Business</a></li>
                                <li><a href="category.html">Culture</a></li>
                                <li><a href="category.html">Sport</a></li>
                                <li><a href="category.html">Food</a></li>
                                <li><a href="category.html">Politics</a></li>
                                <li><a href="category.html">Celebrity</a></li>
                                <li><a href="category.html">Startups</a></li>
                                <li><a href="category.html">Travel</a></li>
                            </ul>
                        </div> --}}
                        <!-- End Tags -->
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection