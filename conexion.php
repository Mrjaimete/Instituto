
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
            <body>
                <?php 
                $conexion = mysql_connect("localhost", "root", "");

                if(!$conexion)
                {
                    echo = "No se ha podido conectar con el servidor" . mysql_error();
                }
                else
                { 
                    echo"Se ha conectado al servidor <br />";
                }
                $db_seleccion = mysql_select_db("institutoo", $conexion);
                    if(!$db_seleccion)
                    {
                        echo "No se ha podido conectar al servidor" . mysql_error();
                    }
                    else
                    {
                        echo "Se ha conectado correctamente <br />";
                    }
                ?>
            </body>
</html>
<?php 
    mysql_close($conexion);
?>