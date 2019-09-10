@extends('layouts.app')

@section('content')
    @include('includes.header', [
        'type' => 'site',
        'heading' => 'Admin Site',
        'subheading' => env('APP_NAME'),
        'img' => asset('img/contact-bg.jpg')
    ])

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Gran d&iacute;a para escribir.</p>
                <form name="sentMessage" id="contactForm" method="post">

                    @csrf

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Username</label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Username"
                                   required
                                   name="email">
                        </div>
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Contrase&ntilde;a</label>
                            <input type="password"
                                   class="form-control"
                                   placeholder="password"
                                   name="password"
                                   required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Go</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
@endsection
