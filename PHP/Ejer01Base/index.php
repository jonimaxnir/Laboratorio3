<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejer01Base</title>

        <style>
            body{
                background-color:grey;
            }
            .tablahead th{
                border: solid 1px;
                height: 40px;
                width: 80px;
                background-color: yellow;
            }
            .tablabody td{
                border: solid 1px;
                height: 40px;
                width: 80px;
            }



        </style>



    </head>

    <body>
            <p></p>
        <h2>Todo lo escrito fuera de las marcas de PHP es entregado a la respuesta HTTP sin pasar
        por el procesador PHP</h2>
        
        
        <?php       

        echo "<hr />";

        echo "todo texto y/o html " . "<span style = 'color:blue'>entregado por el procesador PHP </span>" . "usando la sentencia echo";

        echo "<br>" , "<br>";

        $mivariable = "valor1";

        echo "sin usar XXXXXXXXXXXXXXX " . "<span style = 'color:blue'>\$mivariable: </span>" . $mivariable;

        echo "<br>" , "<br>";

        echo "sin usar XXXXXXXXXXXXXXX " . "<span style = 'color:blue'>\$mivariable: </span>" . $mivariable;

        echo "<hr />";

        $mivariable = true;

        echo "Variable de tipo logina o booleana (verdadero) " . "<span style = 'color:blue'>\$mivariable: </span>" . $mivariable;

        echo "<br>" , "<br>";

        $mivariable = false;

        echo "Variable de tipo logina o booleana (false) " . "<span style = 'color:blue'>\$mivariable: </span>" . $mivariable;

        echo "<hr />";

        define("MICONSTANTE" , "ValorConstante");

        echo "<span style = 'color:blue'>\$MICONSTANTE: </span>" . MICONSTANTE;

        echo "<br>" , "<br>";

        echo "<span style = 'color:blue'>\$MICONSTANTE: </span>" . gettype(MICONSTANTE);
        
        echo "<hr />";

        echo "<h2>Arreglos: </h2>";

        //echo "<br>" ;

        $aPalabra = ["Hola","Hello"];

        echo "\$aPalabra[0]: " . $aPalabra[0];

        echo "<br>" , "<br>";

        echo "\$aPalabra[1]: " . $aPalabra[1];

        echo "<br>" , "<br>";
        
        echo "\$aPalabra: " . gettype($aPalabra); 

        echo "<br>" , "<br>";

        array_push($aPalabra , "Ciao");
        array_push($aPalabra , "Bonjour");

        foreach($aPalabra as $varSaludo){
            echo $varSaludo;
                echo "<br>";          
        }
        
        $saludo1=["Hola","Hello","Ciao","Bonjour"];
        $saludo2=["Chau","GodBye","Arrivederchi","adieu"];
        $saludo3=["tarde","noche","cielo","quieto"];

        $aOrigen = [$saludo1, $saludo2];
        
        array_push($aOrigen, $saludo3);
        ?>

        <br> 

        <table>
            <thead  class="tablahead">
                <tr>
                    <th>Español</th>
                    <th>Ingles</th>
                    <th>Italiano</th>
                    <th>Frances</th>            
                </tr>        
            </thead>
            <tbody class="tablabody">
                <tr>
                    <?php for($i=0; $i< count($saludo1);$i++){ ?>
                    <td><?= $aOrigen[0][$i] ?></td>                    
               <?php } ?>
                    
                </tr>          
                <tr>
                    <?php for($i=0; $i< count($saludo2);$i++){ ?>
                    <td><?= $aOrigen[1][$i] ?></td>                    
               <?php } ?>                    
                </tr>        
                <tr>
                    <?php for($i=0; $i< count($saludo3);$i++){ ?>
                    <td><?= $aOrigen[2][$i] ?></td>                    
               <?php } ?>                    
                </tr>         
            </tbody>
        </table>

        <hr>

        <h2> <?="Tambien se puede expresar el valor de \$aOrigen[1][3]" . ": " . $aOrigen[1][3] ?></h2>
        
        <h2> <?= "Cantidad de Elementos de \$aOrigen: " . count($aOrigen)?> </h2>


        <h1>Variables de tipo Asociativo</h1>

        <?php 
             $Empleados = ["LegEmpleado" => "c1234", "Apellido" => "Perez", "Salario Basico" => 200000];
        ?>

        <?="Legajo de Empleado: " . $Empleados['LegEmpleado']; ?>
        <br>
        <?="Apellido: " . $Empleados['Apellido'] ;?>
        <br>
        <?="Salario Basico: " .  $Empleados['Salario Basico'] ;?>

        <hr>
        
        <h3>Operaciones Aritmeticas</h3>

        









       
        



        
    </body>




</html>