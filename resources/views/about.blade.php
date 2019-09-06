@extends('layouts.app')
@section('content')
    
    @include('includes.header', [
            'img' => asset('img/about-bg.jpg'),
            'heading' => 'Sobre mi',
            'subheading' => 'Lo que hago',
            'type' => 'page'
        ])

    <!-- Main Content -->
    <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>&iexcl;Hola! Bienvenido a mi blog. Soy un estudiante de ingenieria en
                    sistemas apasionado por la programación y tecnología. </p>
                    <p>
                    Aprendí a programar a los 9 años y desde entonces no he parado.
                    Actualmente trabajo como desarrollador <i>full stack</i>. Me encanta aprender y retarme
                    con nuevas tecnologías, constantemente tratar de ser más  más productivo y emprender.
                    </p>
                    <p>
                       Soy un fanboy total de Google. Me parecen geniales todos sus productos, APIs, SDKs, frameworks,
                        el genial diseño Material 2.0, sus dispositivos moviles y demás. Lo advierto pues muy
                        probablemente verás mucho de eso por aquí.
                    </p>
                    <p>
                        Te invito a seguirme en mis redes sociales o suscribete al boletín de email para
                        mantenerte al tanto.
                    </p>
                </div>
            </div>
        </div>
    <hr>
@endsection