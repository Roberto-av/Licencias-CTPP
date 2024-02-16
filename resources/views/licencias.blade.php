<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    @section('title')
        TRAMITAR LICENCIA
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    @extends('layouts.app')
    @section('content')
        <br>
        <fieldset>
            <form class="row g-3">
                <div class="col-md-77">
                    <legend for="Unidad" class="form-label">LICENCIA A TRABAJAR</legend>
                    <select class="form-select" id="LicenciaTrabajar" required>
                        <option selected disabled value="">SELECCIONE...</option>
                        <option>LICENCIA EN VIVO</option>
                        <option>LICENCIA EN MUERTO</option>
                        <option>LICENCIA ESPECIAL</option>
                    </select>
                </div>
            </form>
        </fieldset>
        <br>
        <fieldset>
            <form class="row g-3">
                <div class="col-md-4">
                    <legend for="Numerolicencia" class="form-label">NÚMERO DE LICENCIA</legend>
                    <input placeholder="ejemplo: 01-24-123" type="tel" minlength="07" maxlength="11"
                        class="form-control" id="Numerolicencia" required />
                    <input class="form-check-input" type="checkbox" value="22" id="CheckLic" required>
                    <label class="form-check-label" for="CheckLic">¿ES CORRECTO EL NUM. DE LICENCIA?</label>
                </div>
                <div class="col-md-4">
                    <legend for="Unidad" class="form-label">UNIDAD</legend>
                    <select class="form-select" id="Unidad" required>
                        <option selected disabled value="">SELECCIONE...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <legend for="DepartamentoSolicitante" class="form-label">DEPARTAMENTO SOLICITANTE</legend>
                    <select class="form-select" id="DepartamentoSolicitante" required>
                        <option selected disabled value="">SELECCIONE...</option>
                        <option>AMBIENTAL</option>
                        <option>CIVIL</option>
                        <option>ELÉCTRICO</option>
                        <option>INSTRUM Y CONTROL</option>
                        <option>MECÁNICO</option>
                        <option>OPERACIÓN</option>
                        <option>QUIMICO</option>
                        <option>SEGURIDAD</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <legend for="QuienConcede" class="form-label">QUIEN CONCEDE:</legend>
                    <select class="form-select" id="QuienConcede" required>
                        <option selected disabled value="">SELECCIONE...</option>
                        <option>JEFE DE TURNO - JULIAN GARCIA GONZALEZ</option>
                        <option>JEFE DE TURNO - GUILLERMO GARCIA BAEZA</option>
                        <option>JEFE DE TURNO - CESAR BELTRAN FENECH</option>
                        <option>JEFE DE TURNO - DAVID ARVIZU RONDERO</option>
                        <option>JEFE DE TURNO - ALEJANDRO PICOS GRAJEDA</option>
                        <option>SUPERVISOR - JESÚS MIGUEL GAMBOA LEYVA</option>
                    </select>
                </div>
                </div>
                <div class="col-md-4">
                    <legend for="SeConcede" class="form-label">SE CONCEDE A:</legend>
                    <select class="form-select" id="SeConcede" required>
                        <option selected disabled value="">SELECCIONE...</option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
                </div>
                <div class="col-md-4">
                    <legend for="FechaConcesion" class="form-label">FECHA Y HORA DE CONCESIÓN</legend>
                    <div class="input-group">
                        <input type="datetime-local" class="form-control" id="FechaConcesion" required>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <legend for="Equipo" class="form-label">EQUIPO</legend>
                    <select class="form-select" id="Equipo" required>
                        <option selected disabled value="">SELECCIONE...</option>
                        <option>Bba Inyección</option>
                        <option>Caldera Mantto.</option>
                        <option>Precas sell</option>
                        <option>Caldera</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <legend for="TrabajoRealizar" class="form-label">TRABAJO A REALIZAR:</legend>
                    <input type="text" maxlength="255" class="form-control"
                        placeholder="Escribir detalladamente las instrucciones del trabajo a realizar" id="TrabajoRealizar"
                        required>
                </div>
            </form>
        </fieldset>
        <br>
        <fieldset>
            <form>
                <div class="row g-3">
                    <fieldset>
                        <legend>ENERGÍA EN EL EQUIPO</legend>
                        <div class="container">
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox01" name="E L Eléctrica">
                                    <label for="checkbox01">E L ELÉCTRICA</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox02" name="checkbox01">
                                    <label for="checkbox02">ME MECÁNICA</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox03" name="C I Cinética">
                                    <label for="checkbox03">C I CINÉTICA</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox04" name="NE Neumática">
                                    <label for="checkbox04">NE NEUMÁTICA</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox05" name="C A Calorífica">
                                    <label for="checkbox05">C A CALORÍFICA</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox06" name="H I Hidráulica">
                                    <label for="checkbox06">H I HIDRÁULICA</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox07" name="QU Química">
                                    <label for="checkbox07">QU QUÍMICA</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox08" name="PO Potencial">
                                    <label for="checkbox08">PO POTENCIAL</label>
                                </li>
                            </ul>
                        </div>
                    </fieldset>
                </div>
            </form>
            <form>
                <div class="content">
                    <fieldset>
                        <legend>MANIOBRAR</legend>
                        <div class="container">
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox09" name="1. ABRIR">
                                    <label for="checkbox09">1. ABRIR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox10" name="2. CERRAR">
                                    <label for="checkbox10">2. CERRAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox11" name="3. INTERRUMPIR">
                                    <label for="checkbox11">3. INTERRUMPIR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox12" name="4. ENFRIAR">
                                    <label for="checkbox12">4. ENFRIAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox13" name="5. NEUTRALIZAR">
                                    <label for="checkbox13">5. NEUTRALIZAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox14" name="6. MANIPULAR">
                                    <label for="checkbox14">6. MANIPULAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <label for="Otros">OTROS:</label>
                                    <input type="text" id="Otros" name="Otros">
                                </li>
                            </ul>
                        </div>
                    </fieldset>
                </div>
                <div class="content">
                    <fieldset>
                        <legend>BLOQUEAR</legend>
                        <div class="container">
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox26" name="17. MECÁNICAMENTE">
                                    <label>17. MECÁNICAMENTE</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox27" name="-BRIDAS">
                                    <label for="checkbox27">-BRIDAS</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox28" name="CANDADOS">
                                    <label for="checkbox28">-CANDADOS</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox29" name="18. TARJETAS">
                                    <label for="checkbox29">18. TARJETAS</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox30" name="19. ACORDONAR">
                                    <label for="checkbox30">19. ACORDONAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox31" name="20. RETIRAR">
                                    <label for="checkbox31">20. RETIRAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox32" name="21. PROTECCIONES">
                                    <label>21. PROTECCIONES</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox33" name="MECÁNICAS">
                                    <label for="checkbox33">-MECÁNICAS</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox34" name="ELÉCTRICAS">
                                    <label for="checkbox34">-ELÉCTRICAS</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox35" name="DE CONTROL">
                                    <label for="checkbox35">-DE CONTROL</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox36" name="22. BLOQUEO REMOTO">
                                    <label for="checkbox36">22. BLOQUEO REMOTO</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <label for="Otros2">OTROS:</label>
                                    <input type="text" id="Otros2" name="Otros">
                                </li>
                            </ul>
                        </div>
                    </fieldset>
                </div>
                <div class="content">
                    <fieldset>
                        <legend>ASEGURAR</legend>
                        <div class="container">
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox16" name="7. ATERRIZAR">
                                    <label for="checkbox16">7. ATERRIZAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox17" name="8. DESPRESURIZAR">
                                    <label for="checkbox17">8. DESPRESURIZAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox18" name="9. DRENAR">
                                    <label for="checkbox18">9. DRENAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox19" name="10. VENTEAR">
                                    <label for="checkbox19">10. VENTEAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox20" name="11. PURGAR">
                                    <label for="checkbox20">11. PURGAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox21" name="12. VENTILAR">
                                    <label for="checkbox21">12. VENTILAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox22" name="13. AISLAR">
                                    <label>13. AISLAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox23" name="MECÁNICAMENTE">
                                    <label for="checkbox23">-MECÁNICAMENTE</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox24" name="ELÉCTRICAMENTE">
                                    <label for="checkbox24">-ELÉCTRICAMENTE</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox25" name="14. EXTRAER INTERRUPTOR">
                                    <label for="checkbox25">14. EXTRAER INTERRUPTOR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox38" name="15. DESCARGAR">
                                    <label for="checkbox38">15. DESCARGAR</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" id="checkbox39" name="16. MEDIR CONDICIONES ATMOSFÉRICAS">
                                    <label for="checkbox39">16. MEDIR COND.ATMOSFÉRICAS</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <label for="Otros3">OTROS:</label>
                                    <input type="text" id="Otros3" name="Otros">
                                </li>
                            </ul>
                        </div>
                    </fieldset>
                </div>
            </form>
        </fieldset>
        <BR>
        <fieldset>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="01" id="CheckFormt" required>
                    <label class="form-check-label" for="CheckFormt">TODA LA INFORMACIÓN ES CORRECTA</label>
                </div>
                <br>
                <button class="btn btn-primary" type="boton">IMPRIMIR LICENCIA</button>
            </div>
        </fieldset>
    @endsection
</body>

</html>
