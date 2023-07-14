<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 07</title>
    </head>




    <body>

    <h1>Ejercicio 07 de encriptacion en AJAX</h1>

    
    <?php  if (isset($GET['clave'])){ ?>


       
        <?= "clave" ?>
        
    <?php } else { ?>
       
        <form action="" method="get">
        <label>Ingrese la clave a Encriptar: </label>
        <br> 
        <input type="text" name="clave">   
        <br>
        <input type="submit" name="boton">

        </form> 
        
    <?php } ?>
    
    
    
    
    

    </body>
</html>