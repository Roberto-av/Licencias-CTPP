<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>

<body>
    <h2>Registro de Usuario</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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
        </div>
        <div>
            <label for="email">email:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
</body>

</html>
