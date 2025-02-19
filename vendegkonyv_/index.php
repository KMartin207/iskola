<?php
    session_start() ;

    if( isset($_SESSION['verification'])) require('fooldal.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method='post'>
        Username: <input type="text" name='username'>
        <br><br>
        Passowrd: <input type="text" name='password'>
        <br>
        <input type="submit">

    </form>


    <?php

        
        $file = 'adattarolas.txt';

        if( isset($_POST['username'])) {
            
            $fp = fopen( $file, "r" ) ;
            $ertekek = fread( $fp , filesize($file) ) ;
            fclose( $fp ) ;
            
            $user = explode(" ", $ertekek);

            if($_POST['username'] == $user[0] and $_POST['password'] == $user[1]) {
                $_SESSION['verification'] = 'belepve';
            }



            
        }


    ?>

    

</body>
</html>
