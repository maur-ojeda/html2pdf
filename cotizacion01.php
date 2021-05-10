<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotización 01</title>

</head>
<style>
    td {
        padding: 5px;
    }
</style>


<body>


    <table cellspacing="0" style="width: 100%; ">
        <tr>
            <td style="width: 1%;  border-bottom: solid 1px #000000; ">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALYAAAAtCAYAAAADUZGEAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0E4RjY4NjhCMTVFMTFFNUEzOEVFNzdGMkE3RTc0RDQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0E4RjY4NjlCMTVFMTFFNUEzOEVFNzdGMkE3RTc0RDQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3QThGNjg2NkIxNUUxMUU1QTM4RUU3N0YyQTdFNzRENCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3QThGNjg2N0IxNUUxMUU1QTM4RUU3N0YyQTdFNzRENCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PsgC+xkAABM4SURBVHja7F0JfFXl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
" alt="" srcset="">
            </td>
            <td style="width: 99%; border-bottom: solid 1px #000000;  ">
                <h2 style="color:#666666;">Cotizador en línea</h2>
            </td>
        </tr>

    </table>




    <div class="header">
        <h4>Identificación de empresa Constructora</h4>
    </div>
    <table cellspacing="0" cellpadding="5px" style="width: 100%; border-top: solid 1px #000000; border-right: solid 1px #000000; ">
        <tr>
            <td style="width: 50%; border-left: solid 1px #000000; border-bottom: solid 1px #000000; ">
                Nombre
            </td>
            <td style="width: 50%; border-left: solid 1px #000000; border-bottom: solid 1px #000000; ">
                Fecha de cotización (final)
            </td>
        </tr>
        <tr>
            <td style="width: 50%; border-left: solid 1px #000000;  border-bottom: solid 1px #000000; ">
                RUT:
            </td>
            <td style="width: 50%; border-bottom: solid 1px #000000; border-left: solid 1px #000000;">
                Nº de Cotización:</td>
        </tr>
        <tr>
            <td colspan="2" style="  width: 50%; border-left: solid 1px #000000;  border-bottom: solid 1px #000000; ">
                Dirección:
            </td>
        </tr>
        <tr>
            <td colspan="2" style="  width: 50%; border-left: solid 1px #000000;  border-bottom: solid 1px #000000; ">
                Contacto:
            </td>
        </tr>
    </table>



    <div class="header">
        <h4>Identificación de Requerimiento</h4>
    </div>
    <table cellspacing="0" cellpadding="5px" style="width: 100%; border-top: solid 1px #000000; border-right: solid 1px #000000; ">
        <tr>
            <td style="width: 100%; border-left: solid 1px #000000; border-bottom: solid 1px #000000; ">
                Nº de Requerimiento
            </td>
        </tr>
        <tr>
            <td style="width: 100%; border-left: solid 1px #000000; border-bottom: solid 1px #000000; ">
                Tipo de requerimiento (Normal - Contingencia): </td>
        </tr>

        <tr>
            <td style="width: 100%; border-left: solid 1px #000000; border-bottom: solid 1px #000000; ">
                Descripción del requerimiento: </td>
        </tr>

    </table>


    <div class="header">
        <h4><i>Cotización de requerimiento</i></h4>
    </div>


    <table cellspacing="0">

        <tr>
            <td colspan="2" style=" width:40%;">

            </td>

            <td colspan="3" style="width:30%; border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-top: solid 1px #000000;">
                Original
            </td>
            <td colspan="3" style="width:30%; border-left: solid 1px red;  border-bottom: solid 1px red; border-top: solid 1px red;  border-right: solid 1px red;">
                Cierre
            </td>
        </tr>

        <tr>
            <td width="1%" style=" border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-top: solid 1px #000000;">
                Descripción <br />
                de partidas <br />aceptadas
            </td>
            <td width="1%" style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-top: solid 1px #000000;">
                Unid. Med.
            </td>
            <td width="1%" style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000;">
                Cantidad
            </td>
            <td width="1%" style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000;">
                P. Unitario
            </td>
            <td width="1%" style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000;">
                P. Partida
            </td>
            <td width="1%" style="border-left: solid 1px red;  border-bottom: solid 1px red;">
                Cantidad
            </td>
            <td width="1%" style="border-left: solid 1px red;  border-bottom: solid 1px red;">
                P. Unitario
            </td>
            <td width="1%" style="border-left: solid 1px red;  border-bottom: solid 1px red; border-right: solid 1px red;">
                P. Partida
            </td>
        </tr>

        <tr>
            <td style="border-left: dashed 1px #000000;  border-bottom: dashed 1px #000000">
                Lorem ipsum.
            </td>
            <td style="border-left: dashed 1px #000000;   border-bottom: dashed 1px #000000;">
                000 cm
            </td>
            <td style="border-left: dashed 1px #000000;  border-bottom: dashed 1px #000000;">
                000
            </td>
            <td style="border-left: dashed 1px #000000;  border-bottom: dashed 1px #000000;">
                000
            </td>
            <td style="border-left: dashed 1px #000000;  border-bottom: dashed 1px #000000;">
                000
            </td>
            <td style="border-left: dashed 1px red;  border-bottom: dashed 1px red;">
                000
            </td>
            <td style="border-left: dashed 1px red;  border-bottom: dashed 1px red;">
                000
            </td>
            <td style="border-left: dashed 1px red;  border-bottom: dashed 1px red;  border-right: dashed 1px red;">
                000
            </td>
        </tr>


        <tr>
            <td style="border-left: dashed 1px #000000;  border-bottom: dashed 1px #000000">
                Lorem ipsum.
            </td>
            <td style="border-left: dashed 1px #000000;   border-bottom: dashed 1px #000000;">
                000 cm
            </td>
            <td style="border-left: dashed 1px #000000;  border-bottom: dashed 1px #000000;">
                000
            </td>
            <td style="border-left: dashed 1px #000000;  border-bottom: dashed 1px #000000;">
                000
            </td>
            <td style="border-left: dashed 1px #000000;  border-bottom: dashed 1px #000000;">
                000
            </td>
            <td style="border-left: dashed 1px red;  border-bottom: dashed 1px red;">
                000
            </td>
            <td style="border-left: dashed 1px red;  border-bottom: dashed 1px red;">
                000
            </td>
            <td style="border-left: dashed 1px red;  border-bottom: dashed 1px red;  border-right: dashed 1px red;">
                000
            </td>
        </tr>



        <tr>
            <td colspan="8" style="color:white">
                .
            </td>

        </tr>
        <tr>
            <td style="border-top: solid 1px #000000; border-bottom: solid 1px #000000; border-left: solid 1px #000000; border-right: solid 1px #000000;">
                Costo Directo
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>

            <td style="color:white">
                .
            </td>

            <td style="border-top: solid 1px #000000; border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style="border-top: solid 1px #000000; border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
        </tr>



        <tr>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                Gastos Generales
            </td>
            <td style="border-top: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                xx% </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style=" border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
        </tr>


        <tr>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                Utilidades
            </td>
            <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                xy% </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style=" border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
        </tr>


        <tr>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                Valor Neto
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style=" border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
        </tr>


        <tr>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                Descuento </td>
            <td style="border-top: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                zz% </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style=" border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
        </tr>


        <tr>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                IVA </td>
            <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                19% </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style=" border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                bloque
            </td>
        </tr>
        <tr>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                <b>VALOR TOTAL</b>
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style=" border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                <b>A</b>
            </td>
            <td style="color:white">
                .
            </td>
            <td style="color:white">
                .
            </td>
            <td style="border-left: solid 1px #000000;  border-bottom: solid 1px #000000; border-right: solid 1px #000000;">
                <b>B</b>
            </td>
        </tr>




    </table>




    <div class="header">
        <h4><i>Texto Obligatorio</i></h4>
    </div>
    <p>"Coordinador establece que a revisado y validado cotización respecto de Cantidades y Precios Unitarios, así como revisión de valores y antecedentes fuera de contrato marco"
        Identificación de responsable constructora Identificación Cooordinador de Obras</p>






    <table cellspacing="0" cellpadding="5px" style="width: 100%; ">


        <tr>
            <td style="width: 50%;">
                Identificación de responsable constructora </td>

            <td style="width: 50%; ">
                Identificación Cooordinador de Obras </td>
        </tr>


        <tr>
            <td style="width: 50%; border-top: solid 1px #000000;  border-left: solid 1px #000000; border-bottom: solid 1px #000000; ">
                Nombre: </td>

            <td style="width: 50%; border-top: solid 1px #000000; border-right: solid 1px #000000; border-left: solid 1px #000000; border-bottom: solid 1px #000000; ">
                Nombre:</td>
        </tr>

        <tr>
            <td style="width: 50%;  border-left: solid 1px #000000; border-bottom: solid 1px #000000; ">
                Cargo: </td>

            <td style="width: 50%; border-right: solid 1px #000000; border-left: solid 1px #000000; border-bottom: solid 1px #000000; ">
                Cargo:</td>
        </tr>

        <tr>
            <td style="width: 50%; border-left: solid 1px #000000; border-bottom: solid 1px #000000; ">
                Nombre de empresa: </td>

            <td style="width: 50%;  border-right: solid 1px #000000; border-left: solid 1px #000000; border-bottom: solid 1px #000000; ">
                BancoEstado:</td>
        </tr>
    </table>

</body>

</html>