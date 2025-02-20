<?php
    session_start() ;

    if( isset($_SESSION['verification']) and $_SESSION['verification'] == 'belepve') require('fooldal.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
    if( isset($_GET['l'])) $l = $_GET['l'];
    else                   $l = ''        ;

    if( $l == 'login') {
        if( !isset($_SESSION['verification'])) {
    ?>
        <h1>Login</h1>

        <form method='post'>
            Username: <input type="text" name='username'>
            <br><br>
            Passowrd: <input type="password" name='password'>
            <br>
            <input type="submit" value='Login'>

            <a href="./?l=register">Registration</a>

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
        }
    }    

    if( $l == 'register') {
    ?>
        <h1>Registration</h1>
        <form method='post'>
            Username: <input type="text" name='regUsername'>
            <br><br>
            Passowrd: <input type="password" name='regPassword'>
            <br>
            <input type="submit" value='Registration'>

            <a href="./?l=login">Login</a>

        </form>
    <?php
        $file = 'adattarolas.txt';
        if( isset($_POST['regUsername'])) {
            
            $adat = $_POST['regUsername'] . "; " . $_POST['regPassword'];
            
            $fp = fopen( $file, "w" ) ;
            $ertekek = fwrite( $fp , $adat ) ;
            fclose( $fp ) ;
            

            
            $_SESSION['verification'] = 'regisztrálva';
            
            
        }
    }

    ?>

    

</body>
</html>
