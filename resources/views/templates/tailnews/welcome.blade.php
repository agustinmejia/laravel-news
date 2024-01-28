@extends('templates/tailnews/layouts/master')

@section('seo')
    <title>Bienvenido | {{ setting('site.title') }}</title>
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

@section('content')
    <main id="content">
        <!-- advertisement -->
        <div class="bg-gray-50 py-4 hidden">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="mx-auto table text-center text-sm">
                    <a class="uppercase" href="#">Advertisement</a>
                    <a href="#">
                        <img src="{{ asset('templates/tailnews/img/ads/ads_728.jpg') }}" alt="advertisement area">
                    </a>
                </div>
            </div>
        </div>

        <!-- hero big grid -->
        @php
            // Obtener todos los post de tipo "portada"
            $banners = App\Models\Post::where('type', 'portada')->where('status', 'publicado')->where('deleted_at', NULL)->orderBy('order')->orderBy('views', 'DESC')->orderBy('id', 'DESC')->limit(5)->get();
        @endphp
        @if ($banners->count())
            <div class="bg-white py-6">
                <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                    <!-- big grid 1 -->
                    <div class="flex flex-row flex-wrap">
                        <!--Start left cover-->
                        <div class="flex-shrink max-w-full w-full lg:w-1/2 pb-1 lg:pb-0 lg:pr-1">
                            <div class="relative hover-img max-h-98 overflow-hidden">
                                <a href="{{ url('post/'.$banners[0]->slug) }}">
                                    <img class="max-w-full w-full mx-auto h-auto" src="{{ $banners[0]->banner ? asset('storage/'.str_replace('.', '-banner.', $banners[0]->banner)) : asset('templates/tailnews/img/default.png') }}" alt="Image description">
                                </a>
                                <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                                    <a href="{{ url('post/'.$banners[0]->slug) }}">
                                        <h2 class="text-3xl font-bold capitalize text-white mb-3 line-clamp-2">{{ $banners[0]->title }}</h2>
                                    </a>
                                    <p class="text-gray-100 hidden sm:inline-block" style="text-align: justify">{{ $banners[0]->subtitle }}</p>
                                    <div class="pt-2">
                                        <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>{{ $banners[0]->category->name }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Start box news-->
                            @if ($banners->count() > 1)
                                <div class="flex-shrink max-w-full w-full lg:w-1/2">
                                    <div class="box-one flex flex-row flex-wrap">
                                        @foreach ($banners->slice(1) as $item)
                                            <article class="flex-shrink max-w-full w-full sm:w-1/2">
                                                <div class="relative hover-img max-h-48 overflow-hidden">
                                                <a href="{{ url('post/'.$item->slug) }}">
                                                    <img class="max-w-full w-full mx-auto h-auto" src="{{ $item->banner ? asset('storage/'.str_replace('.', '-banner.', $item->banner)) : asset('templates/tailnews/img/default.png') }}" alt="Image description">
                                                </a>
                                                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                                    <a href="{{ url('post/'.$item->slug) }}">
                                                    <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">{{ $item->title }}</h2>
                                                    </a>
                                                    <div class="pt-1">
                                                    <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>{{ $item->category->name }}</div>
                                                    </div>
                                                </div>
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                    </div>
                </div>
            </div>
        @endif

        <!-- block news -->
        @php
            // Obtener todos los post de tipo "destacadas"
            $destacadas = App\Models\Post::where('type', 'destacada')->where('status', 'publicado')->where('deleted_at', NULL)->orderBy('order')->orderBy('views', 'DESC')->orderBy('id', 'DESC')->limit(20)->get();
        @endphp
        @if ($destacadas->count())
            <div class="bg-white">
                <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                    <div class="flex flex-row flex-wrap">
                        <!-- Left -->
                        <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
                            <div class="w-full py-3">
                                <h2 class="text-gray-800 text-2xl font-bold">
                                    <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Noticias Destacadas
                                </h2>
                            </div>
                            <div class="flex flex-row flex-wrap -mx-3">
                                @foreach ($destacadas->take(6) as $item)
                                    <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                        <div class="flex flex-row sm:block hover-img">
                                            <a href="">
                                                <img class="max-w-full w-full mx-auto" src="{{ $item->banner ? asset('storage/'.str_replace('.', '-small.', $item->banner)) : asset('templates/tailnews/img/default.png') }}" alt="{{ $item->title }}">
                                            </a>
                                            <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                                <h3 class="text-lg font-bold leading-tight mb-2">
                                                    <a href="#">{{ $item->title }}</a>
                                                </h3>
                                                <p class="hidden md:block text-gray-600 leading-tight mb-1" style="text-align: justify">{{ $item->subtitle }}</p>
                                                <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>{{ $item->category->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- right -->
                        <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
                            <div class="w-full bg-gray-50 h-full">
                            <div class="text-sm py-6 sticky">
                                <div class="w-full text-center">
                                <a class="uppercase" href="#">Advertisement</a>
                                <a href="#">
                                    <img class="mx-auto" src="{{ asset('templates/tailnews/img/ads/250.jpg') }}" alt="advertisement area">
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($destacadas->count() >= 9)
                <!-- slider news -->
                <div class="relative bg-gray-50" style="background-image: url('{{ asset('templates/tailnews/img/bg.jpg') }}');background-size: cover;background-position: center center;background-attachment: fixed">
                    <div class="bg-black bg-opacity-70">
                        <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                        <div class="flex flex-row flex-wrap">
                            <div class="flex-shrink max-w-full w-full py-12 overflow-hidden">
                            <div class="w-full py-3">
                                <h2 class="text-white text-2xl font-bold text-shadow-black">
                                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Populares
                                </h2>
                            </div>
                            <div id="post-carousel" class="splide post-carousel">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @foreach ($destacadas->skip(6) as $item)
                                            <li class="splide__slide">
                                                <div class="w-full pb-3">
                                                    <div class="hover-img bg-white">
                                                    <a href="{{ url('post/'.$item->slug) }}">
                                                        <img class="max-w-full w-full mx-auto" src="{{ $item->banner ? asset('storage/'.str_replace('.', '-medium.', $item->banner)) : asset('templates/tailnews/img/default.png') }}" alt="{{ $item->title }}">
                                                    </a>
                                                    <div class="py-3 px-6">
                                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                                        <a href="{{ url('post/'.$item->slug) }}">{{ $item->title }}</a>
                                                        </h3>
                                                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>{{ $item->category->name }}</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif

        <!-- block news -->
        @php
            $categories = App\Models\Category::whereHas('posts', function($q){
                                $q->whereRaw('(type is null or type = "")')->where('status', 'publicado')->where('deleted_at', NULL);
                            })->with(['posts' => function($q){
                                $q->orderBy('order')->orderBy('id', 'DESC')->orderBy('views', 'DESC');
                            }])->where('deleted_at', NULL)->orderBy('order')->get();
            $cont = 1;
        @endphp
        @foreach ($categories as $item)
            {{-- Si tiene habilitada la vista de "Top" y de "Publicidad" --}}
            @if ($item->top || $item->advertisement)
                <div class="bg-gray-50 py-6">
                    <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                        <div class="flex flex-row flex-wrap">
                            <!-- block news -->
                            <div class="flex-shrink max-w-full w-full lg:w-2/3  overflow-hidden">
                                <div class="w-full py-3">
                                <h2 class="text-gray-800 text-2xl font-bold">
                                    <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>{{ $item->name }}
                                </h2>
                                </div>
                                <div class="flex flex-row flex-wrap -mx-3">
                                    <div class="flex-shrink max-w-full w-full px-3 pb-5">
                                        <div class="relative hover-img max-h-98 overflow-hidden">
                                            <!--thumbnail-->
                                            <a href="{{ url('post/'.$item->posts[0]->slug) }}">
                                                <img class="max-w-full w-full mx-auto h-auto" src="{{ $item->posts[0]->banner ? asset('storage/'.str_replace('.', '-banner.', $item->posts[0]->banner)) : asset('templates/tailnews/img/default.png') }}" alt="Image description">
                                            </a>
                                            <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                                                <!--title-->
                                                <a href="{{ url('post/'.$item->posts[0]->slug) }}">
                                                <h2 class="text-3xl font-bold capitalize text-white mb-3">{{ $item->posts[0]->title }}</h2>
                                                </a>
                                                <p class="text-gray-100 hidden sm:inline-block" style="text-align: justify">{{ $item->posts[0]->subtitle }}</p>
                                                <!-- author and date -->
                                                <div class="pt-2">
                                                {{-- <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Europe</div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($item->posts->count() > 1)
                                        @foreach ($item->posts->slice(1)->take(6) as $post)
                                            <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                                <div class="flex flex-row sm:block hover-img">
                                                    <a href="{{ url('post/'.$post->slug) }}">
                                                        <img class="max-w-full w-full mx-auto" src="{{ $post->banner ? asset('storage/'.str_replace('.', '-medium.', $post->banner)) : asset('templates/tailnews/img/default.png') }}" alt="{{ $post->title }}">
                                                    </a>
                                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                                        <a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a>
                                                        </h3>
                                                        <p class="hidden md:block text-gray-600 leading-tight mb-1" style="text-align: justify">{{ $post->subtitle }}</p>
                                                        {{-- <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <!-- asaid -->
                            <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 @if($cont % 2 == 0) order-first @else lg:order lg:order-last @endif">
                                {{-- Top --}}
                                @if ($item->top)
                                    <div class="w-full bg-white">
                                        <div class="mb-6">
                                            <div class="p-4 bg-gray-100">
                                            <h2 class="text-lg font-bold">Más vistos</h2>
                                            </div>
                                            <ul class="post-number">
                                                @foreach ($item->posts->sortBy('views')->take(5) as $post)
                                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                                {{-- Publicidad --}}
                                @if ($item->advertisement)
                                    <div class="text-sm py-6 sticky">
                                        <div class="w-full text-center">
                                            <a class="uppercase" href="#">Advertisement</a>
                                            <a href="#">
                                            <img class="mx-auto" src="{{ asset('templates/tailnews/img/ads/250.jpg') }}" alt="advertisement area">
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $cont++;
                @endphp
            @else
                <div class="bg-white py-6">
                    <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                        <div class="flex flex-row flex-wrap">
                            <div class="flex-shrink max-w-full w-full overflow-hidden">
                                <div class="w-full py-3">
                                    <h2 class="text-gray-800 text-2xl font-bold">
                                        <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>{{ $item->name }}
                                    </h2>
                                </div>
                                <div class="flex flex-row flex-wrap -mx-3">
                                    @foreach ($item->posts as $post)
                                        <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                            <div class="flex flex-row sm:block hover-img">
                                                <a href="{{ url('post/'.$post->slug) }}">
                                                    <img class="max-w-full w-full mx-auto" src="{{ $post->banner ? asset('storage/'.str_replace('.', '-medium.', $post->banner)) : asset('templates/tailnews/img/default.png') }}" alt="{{ $post->title }}">
                                                </a>
                                                <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                                    <h3 class="text-lg font-bold leading-tight mb-2">
                                                    <a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a>
                                                    </h3>
                                                    <p class="hidden md:block text-gray-600 leading-tight mb-1" style="text-align: justify">{{ $post->subtitle }}</p>
                                                    {{-- <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </main>
@endsection