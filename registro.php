


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>

<?php
function conectar(){

    $user="root";
    $pass="3f-GeABFA4-hEfeDAD3F6geHaC3f4add";
    $server="roundhouse.proxy.rlwy.net";
    $db="railway";
    $con=mysql_connect($server,$user,$pass) or die ("error al conectar");


    mysql_select_db($db,$con);
    return $con;

}

?>
<?php

include("conexion.php");
$con=conectar();
echo "Todo correcto Inge"

?>