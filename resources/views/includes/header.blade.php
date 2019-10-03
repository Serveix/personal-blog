<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: linear-gradient(180deg,rgba(243,69,62,.5),rgba(177,47,45,.5)), url('{{ $img }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="{{ $type }}-heading">
                    <h1>{{ $heading ?? $post->header }}</h1>
                    @if(!isset($post))<hr class="small">@endif
                    <h2 class="subheading">{{ $subheading ?? $post->subheader }}</h2>
                    @if(isset($post))<span class="meta">Publicado {{ $post->created_at }}</span>@endif
                </div>
            </div>
        </div>
    </div>
</header>