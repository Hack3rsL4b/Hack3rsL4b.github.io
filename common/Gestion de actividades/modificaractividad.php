<?php
include_once("../../php/conexion.php");
include_once("../../php/obtener-usuario.php");

$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../css/style_gestion1.css">
    <title>Listado de Clientes</title>
    <style type="text/css">
        #apDiv1 {
            position: absolute;
            left: 261px;
            top: 73px;
            width: 752px;
            height: 32px;
            z-index: 1;
        }

        #apDiv2 {
            position: absolute;
            left: 15px;
            top: 106px;
            width: 230px;
            height: 26px;
            z-index: 2;
        }
    </style>
</head>

<body>
    <form class="formlista" method="get" action="modificar.php" target="iframedash">
        <p class="listauser">Actividad:
            <select id="id" name="id" class="listaseleccion">
                <option value="0">Seleccione:</option>
                <?php
                $consulta = "SELECT * FROM actividades";
                $resultado = mysqli_query($con, $consulta) or die(mysqli_error($con));

                while ($fila = mysqli_fetch_array($resultado)) {
                    echo '<option value="' . $fila['id_actividad'] . '">' . $fila['actividad'] . '</option>';
                }
                ?>
            </select>
            <input class="boton" type="submit" value="enviar">
        <form>
            <a href="../gestion-actividades.php">
                <input class="boton" type="submit" value="Atrás">
            </a>
        </form>
        <?php
        mysqli_close($con);
        ?>
        </div>
    </form>
</body>

</html>