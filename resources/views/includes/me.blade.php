<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            @if(!$post->user->userDescription)
                COMPLETA UNA DESCRIPCION EN TU CUENTA DE BLOG PARA MOSTRAR ESTA SECCION
            @else
            <div class="col-md-2" style="margin-top: 20px;">
                <img src="{{ asset('storage/me.jpg') }}" alt="Foto de Carlos Eli" class="img-circle" width="100%">
            </div>
            <div class="col-md-10">
                <h2>{{ $post->user->name }} <small>{{ $post->user->userDescription->position }}</small></h2>
                <hr>
                {{ $post->user->userDescription->description }}
            </div>
            @endif
        </div>
    </div>
</div>
