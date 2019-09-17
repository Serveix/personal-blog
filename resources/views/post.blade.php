@extends('layouts.app')

@section('content')

    @include('includes.header', [
            'img' => route('posts.image', ['path' => $post->image_path]),
            'type' => 'post',
            'post' => $post
        ])

    <!-- Post Content -->
    <article>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <div class="fb-share-button" data-href="{{ route('post', ['slug' => $post->slug]) }}" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-size="large">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <hr>
                    <div id="content"></div>
                </div>
                <div class="col-md-3">
                    jasdios
                </div>
            </div>
        </div>
    </article>
    <hr>
    @include('includes.me')
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