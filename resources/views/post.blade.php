@extends('layouts.app')

@section('content')

    @include('includes.header', [
            'img' => route('posts.image', ['path' => $post->image_path]),
            'type' => 'post',
            'post' => $post
        ])

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div id="content"></div>
                </div>
            </div>
        </div>
    </article>

    <hr>
@endsection

@section('scripts')
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        $('#content').html(quillGetHTML({!! $post->content !!}))
        function quillGetHTML(inputDelta) {
            let tempQuill = new Quill(document.createElement("div"))
            tempQuill.setContents(inputDelta)
            return tempQuill.root.innerHTML
        }
    </script>
@endsection