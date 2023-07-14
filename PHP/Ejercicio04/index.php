<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 04</title>


        <style>
            
            body{
                background-color: grey;
            }

            table tr td{
                 border: solid 1px;
                 width: 100px;
                 height: 25px;
                 text-align: center;
                 margin: 0px;
                 background-color: yellow;
            }

        </style>

    </head>



    <body>
        <h1>Variables de Servidor</h1>

        <table>
            <tr>
                <td>
                    SERVER_ADDR
                </td>
                <td>
                   <?= $_SERVER['SERVER_ADDR'];?>
                </td>
            <tr> 
                <td>
                    SERVER_PORT
                </td>
                <td>
                   <?= $_SERVER['SERVER_PORT']; ?>
                </td>
            <tr>   
                <td>
                    SERVER_NAME
                </td>
                <td>
                    <?= $_SERVER['SERVER_NAME'];?>
                </td>
            </tr>
            <tr>
                <td>
                    DOCUMENT_PORT
                </td> 
                <td>
                    <?= $_SERVER['DOCUMENT_ROOT'];?>
                </td>
            </tr>           
               
            </tr>     
        </table>        
        
        <h1>Variables de Cliente</h1>

        <table>
            <tr>
                    <td>
                        REMOTE_ADDR
                    </td>
                    <td>
                    <?= $_SERVER['REMOTE_ADDR'];?>
                    </td>
            </tr> 
            <tr>
                    <td>
                        REMOTE_PORT
                    </td>
                    <td>
                    <?= $_SERVER['REMOTE_PORT']; ?>
                    </td>
                    
            </tr>      
        </table>

        <h1>Variables de Requerimiento</h1>

        <table>
            <tr>
                    <td>
                        SCRIPT_NAME
                    </td>
                    <td>
                    <?= $_SERVER['REQUEST_URI'];?>
                    </td>
            </tr> 
            <tr>
                    <td>
                        REQUEST_METHOD
                    </td>
                    <td>
                    <?= $_SERVER['REQUEST_METHOD']; ?>
                    </td>                    
            </tr>      
        </table>

        <h1>TODAS</h1>

        
        <?php foreach($_SERVER as $key_name => $key_value) { ?>
                    
        <?php } ?> 









    </body>
</html>