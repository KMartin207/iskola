<?php
    session_start() ;

    $_SESSION['verification'] = '';

    
        
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if( isset($_GET['l'])) $l = $_GET['l'];
            else                   $l = 'login'        ;
            if( $l == 'login') print $l;
            if( $l == 'register') print $l;
            if( $l == 'belepve') print $l;
        ?>
    </title>
</head>
<body>

<style>
    html {
        background-color: #ededed
    }
    h1 {
        font-size: 60px;
    }
    .kuld {
        margin-left: 100px;
        font-size: 15px;
        width: 100px;
        height: 40px;
    }
    .ir {
        width: 200px;
    }
    
    #login {
        margin-top: 30%;
        background-color: grey;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 10px;

        margin-left: auto;
        margin-right: auto;
        max-width: fit-content;
        border-radius: 5px;
    }

    
</style>
    
    <?php 

        if($l == 'belepve') {

            include("fooldal.php");
        }   
    


    if( $l == 'login') {
        if( $_SESSION['verification'] == '') {
    ?>
        <div id='login'>

            <form method='post'>
                <h1>Login</h1>
                Username: <input type="text" name='username' class='ir'>
                <br><br>
                Password: <input type="password" name='password' class='ir'>
                <br><br>
                <input type="submit" value='Login' class='kuld'>
                <br>
                <a href="./?l=register">Registration</a>

            </form>
        </div>
        


    <?php
            $file = 'adattarolas.txt';
            if( isset($_POST['username'])) {

                $lines = count(file($file));
                print $lines;
                for($i = 0; $i < $lines; $i++) {
                    $fp = fopen( $file, "r" ) ;
                    $ertekek = fread( $fp , filesize($file) ) ;
                    fclose( $fp ) ;
                    
                    
                    $user = explode(";", $ertekek);
                    if($_POST['username'] == $user[0] && $_POST['password'] == $user[1]) {
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['password'] = $_POST['password'];
                        $_SESSION['verification'] = 'true';
                        ?>
                            <a href="./?l=belepve">Sikeresen beléptél!</a>
                        <?php
                        break;
                    }
                }
                
                
            }
        }
    }    
    
    
        if( $l == 'register') {
            
        ?>
            <div id='login'>
                <h1>Registration</h1>
                <form method='post'>
                    Username: <input type="text" name='regUsername' class='ir'>
                    <br><br>
                    Password: <input type="password" name='regPassword' class='ir'>
                    <br><br>
                    <input type="submit" value='Registration' class='kuld'>
                    <br>
                    <a href="./?l=login">Login</a>

                </form>
            </div>
        <?php
                $file = 'adattarolas.txt';
                if( isset($_POST['regUsername'])) {
                    if($_POST['regUsername'] != '' and $_POST['regPassword'] != '') {
                        $adat = $_POST['regUsername'] . "; " . $_POST['regPassword'] . "\r\n";
                        
                        $fp = fopen( $file, "a" ) ;
                        $ertekek = fwrite( $fp, $adat ) ;
                        fclose( $fp ) ;
                        $_SESSION['verification'] = 'register';
                    }
                }
            
        }


        
        ?>

</body>
</html>