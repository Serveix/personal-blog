<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ $img }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="{{ $type }}-heading">
                    <h1>{{ $heading }}</h1>
                    @if($type == 'site' || $type == 'page')<hr class="small">@endif
                    <h2 class="subheading">{{ $subheading }}</h2>
                    @if($type == 'post')<span class="meta">Publicado en August 24, 2014</span>@endif
                </div>
            </div>
        </div>
    </div>
</header>