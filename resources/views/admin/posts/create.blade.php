@extends('layouts.admin')
@section('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
    @include('includes.header', [
        'type' => 'site',
        'heading' => 'Admin Site',
        'subheading' => env('APP_NAME'),
        'img' => asset('img/contact-bg.jpg')
    ])
    <div class="container">
        <div class="row">
            <div class="col-md-10  col-md-offset-1">
                <h1>Escribe un nuevo post</h1>
                <hr>
                <form id="new-post-form" enctype="multipart/form-data" action="{{ route('admin.posts.create') }}" method="post">
                    @csrf
                    <div class="form-group floating-label-form-group controls">
                        <label>Header</label>
                        <input type="text"
                               class="form-control"
                               placeholder="Header"
                               required
                               name="header"
                               value="{{ old('header') }}">

                        @error('header')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group floating-label-form-group controls">
                        <label>Subheader</label>
                        <input type="text"
                                class="form-control"
                                placeholder="Subheader"
                                required
                                name="subheader"
                                value="{{ old('subheader') }}">
                        @error('subheader')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group floating-label-form-group controls">
                        <label for="post-image">Imagen principal</label>
                        <input type="file" name="image" id="post-image">

                        @error('image')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label>
                            Publicado
                            <input type="radio" name="published" value="1" checked>
                        </label> <br>
                        <label>
                            Oculto
                            <input type="radio" name="published" value="0" >
                        </label>

                        @error('published')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group  floating-label-form-group controls">
                        <label>Body</label>
                        <div id="editor"></div>

                        @error('body')
                        <span class="invalid-feedback" style="color: darkred" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <input type="hidden" name="body" id="hiddenArea">

                    <hr>

                    <div class="form-group">
                        <button  class="btn btn-default" type="submit">Crear</button>
                    </div>


                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        let toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{'header': 1}, { 'header': 2}]
                [{'list': 'ordered'}, {'list': 'bullet'}],
            [{'script': 'sub'}, {'script': 'super'}],
            [{'indent': '-1'}, {'indent': '+1'}],
            [{'direction': 'rt1'}],
            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            [ 'link', 'image', 'video', 'formula' ],          // add's image support
            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],
            ['clean']
        ]
        let quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        })
        $("#new-post-form").on("submit", () => {
            $('#hiddenArea').val( JSON.stringify(quill.getContents()) )
            console.log('appended !')
        })
        @if(!empty(old('body')))
        quill.setContents({!! old('body') !!})
        @endif
    </script>
@endsection