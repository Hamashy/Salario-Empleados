<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/estilos.css">
    <title>Salario Empleados</title>
</head>

<body>
    <header>
        <h3 id="centrado">PAGO DE SALARIO DE EMPLEADOS</h3>
        <img src="Image/foto.jpg" width="600" height="300" alt="">
    </header>
    <section>
        <form action="pagos.php" method="post">
            <table>
                <tr>
                    <td>Empleados</td>
                    <td><input type="text" name="txtEmpleado" size="65" id=""></td>
                </tr>
                <tr>
                    <td>Horas Trabajadas</td>
                    <td><input type="text" name="txtHoras" id=""></td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td>
                        <select name="selCategoria" id="">
                            <option value="">--Elija Una Categoria</option>
                            <option value="Jefe">Jefe</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Operario">Operario</option>
                            <option value="Practicante">Practicante</option>


                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Procesar">
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>
                <!-- Codigo PHP --->
                <?php

                error_reporting(0);

                //Capturando datos
                $empleado = $_POST['txtEmpleado'];
                $horas = $_POST['txtHoras'];
                $categoria = $_POST['selCategoria'];

                //REALIZAR CALCULOS
                if ($categoria == "Jefe") {
                    $pagoHora = 50;
                }
                if ($categoria == "Administrativo") {
                    $pagoHora = 30;
                }
                if ($categoria == "Operario") {
                    $pagoHora = 15;
                }
                if ($categoria == "Practicante") {
                    $pagoHora = 5;
                }
               
                $sBruto = $horas * $pagoHora;
                $descuento = $sBruto * 15 / 100;
                $sNeto = $sBruto - $descuento;
                
                ?>

                <tr>
                    <td>Empleado</td>
                    <td><?php echo ucwords($empleado); ?></td>
                </tr>
                <tr>
                    <td>Salario Bruto</td>
                    <td><?php echo "$" . number_format($sBruto, 2, '.', ',') ?></td>
                </tr>
                <tr>
                    <td>Descuento</td>
                    <td><?php echo "$" . number_format($descuento, 2, '.', ',') ?></td>
                </tr>
                <tr>
                    <td>Salario Neto</td>
                    <td><?php echo "$" . number_format($sNeto, 2, '.', ',') ?></td>
                </tr>

            </table>

        </form>
    </section>
    <footer>
        <h6 id="centrado">Todos los derechos reservados - Ing Carlos Morales</h6>
    </footer>
</body>

</html>