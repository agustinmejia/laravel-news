@extends('layouts.master')

@section('seo')
    <title>{{ setting('site.title') }} | Contacto</title>
    <meta content="{{ setting('site.description') }}" name="description">
    <meta content="{{ setting('site.keyboards') }}" name="keywords">
    
    @php
        $icon = Voyager::setting('site.logo', '../images/icon.png');
    @endphp

    <meta property="og:url"           content="{{ url('contact') }}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="{{ setting('site.title') }}" />
    <meta property="og:description"   content="{{ setting('site.description') }}" />
    <meta property="og:image"         content="{{ Voyager::image($icon) }}" />
@endsection

@section('content')
    <main id="main">
        <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h1 class="page-title">Contáctanos</h1>
            </div>
            </div>

            <div class="row gy-4">

            <div class="col-md-4">
                <div class="info-item">
                <i class="bi bi-geo-alt"></i>
                <h3>Dirección</h3>
                <address>{{ setting('site.address') }}</address>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-4">
                <div class="info-item info-item-borders">
                <i class="bi bi-phone"></i>
                <h3>Número de celular</h3>
                <p>{{ setting('site.phone') }}</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-4">
                <div class="info-item">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p><a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a></p>
                </div>
            </div><!-- End Info Item -->

            </div>

            <div class="form mt-5">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" required>
                </div>
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                </div>
                <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                </div>
                <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
            </div><!-- End Contact Form -->

        </div>
        </section>

    </main>
@endsection