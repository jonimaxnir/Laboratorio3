<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 05</title>



    </head>

    <body>
        <h2>Variable de tipo objeto en .PHP Objeto renglon de pedido</h2>

        <?php
                
        $objRenglonPedido = new stdclass;

        echo "<h2 style = 'color:blue'>\$ObjRenglonPedido: </h2>";

               
        $objRenglonPedido -> cod = "cp01";
        echo "Codigo: " . $objRenglonPedido -> cod;
         
        echo"<br>";
       
        $objRenglonPedido -> descripcion = "tornillos punta chata";
        echo "Descripcion: " . $objRenglonPedido -> descripcion;

        echo"<br>";

        $objRenglonPedido -> preciounitario = 123 ;
        echo "Precio Unitario: " . $objRenglonPedido -> preciounitario ;

        echo"<br>";

        $objRenglonPedido -> cantidad = 2 ;
        echo "Cantidad: " . $objRenglonPedido -> cantidad ;

        echo"<br>";

        $var11 = gettype($objRenglonPedido);

        echo "<h2>Tipo de <span style = 'color:blue'>\$ObjRenglonPedido: </span> $var11 </h2>";

        echo  "<h2>Definamos Arreglos de Pedidos: </h2>";

        $renglonesdePedido = [];

        echo "<h2 style = 'color:blue'>\$renglonesDePedido: </h2>";

        echo "<h2>Tabula <span style = 'color:blue'>\$renglonesDePedido: </span> Recorrer el arreglo y tabularlos con html </h2>";


        array_push($renglonesdePedido, $objRenglonPedido);

        foreach($renglonesdePedido as $objRenglonPedido){
            echo $objRenglonPedido -> preciounitario;
        }

        $objRenglonesPedido= new stdClass;

        $objRenglonesPedido -> renglonesdePedido = $renglonesdePedido;
        $objRenglonesPedido -> CantidadDerenglones = count($renglonesdePedido);    

        echo"<br>";

        echo "Cantidad de Renglones: " . $objRenglonesPedido -> CantidadDerenglones;


        echo "<h2>        
        Produccion de un objeto <span style = 'color:blue'>\$renglonesDePedido: </span> con 
        2 atributos array renglonesPedido y cantidaddeRenglones        
        </h2>";

        echo "Cantidad de Renglones: " . $objRenglonesPedido -> CantidadDerenglones;
        
        $jasonRenglonesPedido = json_encode($objRenglonesPedido);

        echo"<br>";

       

        echo "<h2>Produccion de un Jason jasonRenglones</h2>";
        
        echo $jasonRenglonesPedido;
        ?>

    </body>
</html>