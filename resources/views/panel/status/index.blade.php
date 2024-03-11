@extends('layouts.app')

@section('title')
    STATUS
@endsection

@section('meta-description')
    ESTADO DE LICENCIAS meta description
@endsection

<link rel="stylesheet" href="{{ asset('assets/css/status.css') }}" />

@section('content')
    <H1>ESTADO DE LICENCIAS</H1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table name="procesos">
        <tr name="proceso">
            <td colspan="15" style="border: none; font-size: 1.2rem; padding-bottom: 1.2rem">
                LICENCIAS EN ESTADO DE PROCESO</td>
        </tr>
        <tr style="background-color: #cccccc">
            <th>ID</th>
            <th>TIPO DE LICENCIA</th>
            <th>NUMERO DE LICENCIA </th>
            <th>CENTRO DE GESTOR </th>
            <th> UNIDAD </th>
            <th>DEPARTAMENTO</th>
            <th>QUIEN CONCEDIO</th>
            <th>SE CONCEDIO A</th>
            <th>EQUIPO</th>
            <th>TRABAJO QUE SE REALIZO</th>
            <th>ENERGIA EN EL EQUIPO</th>
            <th>MANIOBRAR</th>
            <th>ASEGURAR</th>
            <th>BLOQUEAR</th>
            <th>ACCIONES</th>
        </tr>
        <tbody>
            @foreach ($licenciasNoLiberadas as $licencia)
                <tr>
                    <td>{{ $licencia->id }}</td>
                    <td>{{ $licencia->tipo_licencia }}</td>
                    <td>{{ $licencia->numero_licencia }}</td>
                    <td>{{ $licencia->equipo->centro_gestor }}</td>
                    <td>{{ $licencia->unidad }}</td>
                    <td>{{ $licencia->departamento->nombre }}</td>
                    <td>{{ $licencia->jefeDeTurno->nombre }}</td>
                    <td>{{ $licencia->empleado->nombre }}</td>
                    <td>{{ $licencia->equipo->denominacion }}</td>
                    <td>{{ $licencia->comentario_trabajo_realizar }}</td>
                    <td>{{ $licencia->energia_equipo }}</td>
                    <td>{{ $licencia->maniobrar }}</td>
                    <td>{{ $licencia->asegurar }}</td>
                    <td>{{ $licencia->bloquear }}</td>
                    <td>
                        <form action="{{ route('status.update', $licencia->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="estado" value="LIBERADO">
                            <input type="hidden" name="usuario_id" value="{{ Auth::id() }}">
                            <button type="submit" class="btn btn-warning btn-sm">LIBERAR</button>
                        </form>
                        |
                        <button id="printbtn">Print</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        const printbtn = document.getElementById("printbtn");
        printbtn.addEventListener("click", () => {
            printbtn.disabled = true;
            window.print();
            setTimeout(() => {
                printbtn.disabled = false;
            }, 1000);
        });
    </script>

    <a href="/principal"> REGRESAR</a>
@endsection
