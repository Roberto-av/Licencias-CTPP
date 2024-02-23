@extends('layouts.app')

@section('title')
    DOCUMENTOS
@endsection

@section('meta-description')
    DOCUMENTOS meta description
@endsection
@section('content')
    <style>
        table {
            margin: auto;
            width: 1200px;
            border-collapse: collapse;
        }

        table td,
        th {
            border: 2px solid #adadad;
            text-align: center;
            color: #273b3d;
        }

        button {
            display: block;
            margin: 0 auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            font-size: 1.3rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <h1>REGISTRO DE LICENCIAS</h1>
    <table>
        <tr>
            <td colspan="15" style="border: none; font-size: 1.2rem; padding-bottom: 1.2rem">
                LICENCIAS COMPLETADAS EN LA CENTRAL TERMOELÉCTRICA PUNTA PRIETA
            </td>
        </tr>
        <!-- <thead> -->
        <tr style="background-color: #cccccc">
            <th>NUMERO DE LICENCIA </th>
            <th> UNIDAD </th>
            <th>DEPARTAMENTO</th>
            <th>QUIEN CONCEDIO</th>
            <th>A QUIEN SE LE CONCEDIO</th>
            <th>EQUIPO</th>
            <th>TRABAJO QUE SE REALIZO</th>
            <th>ENERGIA EN EL EQUIPO</th>
            <th>MANIOBRAR</th>
            <th>ASEGURAR</th>
            <th>BLOQUEAR</th>
            <th>QUIEN LIBERO</th>
            <th>DETALLES</th>
        </tr>
        <!-- </thead> -->
        <tbody>
            <tr>
                <th>01-24-123</th>
                <td>01</td>
                <td>ELÉCTRICO</td>
                <td>SUPERVISOR JESÚS MANUEL GAMBOA LEYVA</td>
                <td>JEFE DE DEPARTAMENTO RICARDO ROMÁN MORENO</td>
                <td>CALDERA</td>
                <td>LIMPIEZA A CALDERA A</td>
                <td>E L ELECTRICO</td>
                <td>2. CERRAR</td>
                <td>9. DRENAR 12. VENTILAR</td>
                <td>22. BLOQUEO REMOTO</td>
                <td>JEFE DE TURNO CESAR BELTRÁN BENECH</td>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <button id="printbtn">Print</button>
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
