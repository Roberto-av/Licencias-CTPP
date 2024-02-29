<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>

<body>
    <h2>Registro de Usuario</h2>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name">

            @if($errors->has('name'))
            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <div>
            <label for="rpe">rpe:</label>
            <input type="text" id="rpe" name="rpe">
            @if($errors->has('rpe'))
            <div class="alert alert-danger">{{ $errors->first('rpe') }}</div>
            @endif
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
            @if($errors->has('password'))
            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
            @endif
        </div>
        <div>
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
</body>

</html>
