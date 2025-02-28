<?php
    session_start() ;
    
    

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
if (isset($_GET['l'])) $l = $_GET['l'];
else                   $l = '';

if( $l == '') {
    $file = 'felhasznalok/';

    print "
        <div id=login>

            <form method='post' enctype='multipart/form-data'>
                <h1>Login</h1>
                Username: <input type='text' name='username' class='ir'>
                <br><br>
                Password: <input type='password' name='password' class='ir'>
                <br><br>
                <input type='submit' value='Login' class='kuld'>
                <br>
                <a href='./?l=register'>Registration</a>

            </form>
        </div>
    ";
    $file = 'felhasznalok/' . $_POST['username'] . '.txt';
    $fp = fopen( $file , "r" ) ;
    $adat = fread($fp, filesize($file));
    fclose( $fp ) ;
    print $adat;
    
    if( file_exists($file) and $adat == $_POST['password']) {
    
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        print 'edn';
        print "  <script>  location.href=location.href  </script> " ;
    }

}



?>

<?php

    
    if( $l == 'register') {
        print "
            <div id=login>

                <form method='post' enctype='multipart/form-data'>
                    <h1>Registration</h1>
                    Username: <input type='text' name='regusername' class='ir'>
                    <br><br>
                    Password: <input type='password' name='regpassword' class='ir'>
                    <br><br>
                    <input type='submit' value='Register' class='kuld'>
                    <br>
                    <a href='./?l='>Login</a>

                </form>
            </div>
        ";
    
    
        if( isset($_POST['regusername'])) {

            $file = './felhasznalok/' . $_POST['regusername'] . '.txt';
    
            if( !file_exists($file)) {
                $fp = fopen( $file , "w" ) ;
                fwrite($fp, $_POST['regpassword']);
                fclose( $fp ) ;
            }
        }
    }
    

    


?>
    

</body>
</html>

