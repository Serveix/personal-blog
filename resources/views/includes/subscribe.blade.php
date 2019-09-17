<div class="panel panel-default">
    <div class="panel-body">
        <h2>&iexcl;Suscribete!</h2>
        Recibe ofertas a cursos, accesos limitados y prioritarios.
        <form action="{{ route('subscribe') }}" method="POST">
            @csrf
            <div class="floating-label-form-group controls">
                <label for="email">Tu correo electronico...</label>
                <input type="text" name="email" id="email" class="form-control @error('email') has-error @enderror"
                        placeholder="Tu correo electronico...">
                @error('email')<span class="invalid-feedback" role="alert">{{ $message }} </span><br>@enderror
                <br>
                <button type="submit" class="btn btn-default">
                    Unirse
                </button>
            </div>
        </form>
    </div>
</div>

