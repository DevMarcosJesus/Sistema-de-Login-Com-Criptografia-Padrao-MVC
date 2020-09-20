<?php 
    session_start();

    if(isset($_SESSION['user'])){


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Login</title>
</head>
<body>

        <h1>Bem vindo</h1>
        <hr>
        <h2>Área Restrita</h2>
    
</body>
</html>

<?php

    }else{  
        header("Location: ../login.php?acess_denied");
    }
?>