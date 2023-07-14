<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejerc 02</title>

        <style>
            
            body{
                background-color: grey;
            }


            table tr td{
                 border: solid 1px;
                 width: 50px;
                 height: 25px;
                 text-align: center;
            }

        </style>

    </head>


    <body>

    <h1>En este ejemplo se utiliza la funcion include() qeu ubica coidigo PHP en el archivo Ejemplo2.inc: </h1>

    <h1>Antes de insertar el Include las variables declaradas no existen</h1>
    <h1>Las variables son: </h1>

    <?php
    include("./Ejemplo3.inc");
    ?>

    <?php
    include("./Ejemplo3.inc");
    ?>

    <?php 
    include("./Ejemplo2.inc.php");
    ?>
    
    <h2>La longitud del arreglo es:  <?= $x ?> </h2>

    <h2>
        Aqui ya se ejecutpo la funcion include(). Cuando se usa Include ocurre que si el archivo inc no existe, se visualiza Warning
        y el sript sigue ejecutandose hasta el final
    </h2>

    <h2>
        Las 2 variables de tipo array asociativo en el inc son
    </h2>

            <table>
                <tr>
                    <td>
                        <?php
                        echo ($var1[0]);
                        ?>
                    </td>
                    <td>
                        <?php
                        echo ($var1[1]);
                        ?>
                    </td>
                    <td>
                        <?php
                        echo ($var1[2]);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <?php
                        echo ($var2[0]);
                    ?>
                    </td>
                    <td>
                    <?php
                        echo ($var2[1]);
                    ?>
                    </td>
                    <td>
                    <?php
                        echo ($var2[2]);
                    ?>
                    </td>
                </tr>
            </table>




    </body>
</html>