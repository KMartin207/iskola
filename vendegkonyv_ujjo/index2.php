<?php
    session_start() ;
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
        background-color: grey;
        border-radius: 5px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        

    }

    
</style>
    
    <?php 

        if( isset($_SESSION['verification'] ))
         {

            include("fooldal.php");
        }  
        else  
     {
        
    print "
        <div id='login'>

            <form method='post'>
                <h1>Login</h1>
                Username: <input type=text name='username' class='ir'>
                <br><br>
                Password: <input type=password name='password' class='ir'>
                <br><br>
                <input type=submit value='Login' class='kuld'>
                <br>
                <a href='./?l=register'>Registration</a>

            </form>
        </div>
        
";

  
    }

            $file = 'adattarolas.txt';
            if( isset($_POST['username'])) {

                $lines = count(file($file));

                $fp = fopen( $file, "r" ) ;
                for($i = 0; $i < $lines; $i++) {
                    
                    $ertekek = fgets( $fp ) ;
                    $ertekek = str_replace("\r\n", "", $ertekek ) ;
                    
                    
                    
                    $user = explode(";", $ertekek);

                    if($_POST['username'] == $user[0] && $_POST['password'] == $user[1]) {
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['password'] = $_POST['password'];
                        $_SESSION['verification'] = 'true';
                        
                        print "    <script>  location.href=location.href  </script> " ;
                        
                        break;
                    }
                }
                fclose( $fp ) ;
                
                
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
                        $adat = $_POST['regUsername'] . ";" . $_POST['regPassword'] . "\r\n";
                        
                        $fp = fopen( $file, "a" ) ;
                        $ertekek = fwrite( $fp, $adat ) ;
                        fclose( $fp ) ;
                        
                    }
                }
            
        }


        
        ?>

</body>
</html>