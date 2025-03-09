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
    
<style>
    <?php
    if( isset($_SESSION['verification'])) {

        echo "html {background-image: white;
            background-size: cover; /* Scales the image to cover the entire viewport */
    background-position: center; /* Centers the image */
    background-attachment: fixed; /* Keeps it fixed while scrolling */
            }";
    }
    else {
        echo "html {background-image: linear-gradient(to right, #051937, #004d7a, #008793, #00bf72, #a8eb12);}";
    }
    ?>
    

    
    h1 {
        font-size: 60px;
        color: white;
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
    
    #panel {
        background-color: grey;
        border-radius: 5px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        width: 30rem;
        height: 25rem;
        padding: 20px;
        color: black;
        box-shadow: 2px 7px 14px;
        display: flex;
        margin:auto;
        justify-content: center;
    }

    .wrong-panel {
        background-color: yellow;
        
        width: 20rem;
        height: 100px;
        display: flex;
        margin: auto;
        padding: 20px;
        padding-bottom: 10px;
    }

    .gomb {
        text-decoration: none;
        color: black;
    }

    .message {
        border: 2px solid black;
        padding: 5px;
        background-color: white;
        text-align: center;
    }
    
    .form-panel {
        margin-left: 17%;
    }

    .link {
        display: flex;
        margin: auto;
        justify-content: center;
    }

    .link-design {
        color: white;
        font-size: 20px;
        text-decoration: none;
        transition: 0.5s ease;
    }

    .link-design:hover {
        color: yellow;
    }
    
</style>

<?php

if (isset($_GET['l'])) $l = $_GET['l'];
else                   $l = '';


if( isset($_SESSION['verification'])) {

    include("fooldal.php");
}
else {

    if( $l == '') {
        $file = 'felhasznalok/';

        print "
            <div id=panel>

                <form method='post' enctype='multipart/form-data'>
                    <h1>Login</h1>
                    Username: <input type='text' name='username' class='ir'>
                    <br><br>
                    Password: <input type='password' name='password' class='ir'>
                    <br><br>
                    <input type='submit' value='Login' class='kuld'>
                    <br><br><br>
                    <div class='link'>
                        <a href='./?l=register' class='link-design'>Registration</a>
                        .|. 
                        <a href='./?l=pass-change'  class='link-design'>Enter with code</a>
                    </div>
                </form>
            </div>
        ";

        if( isset($_POST['username']) ) {

            $file = 'felhasznalok/' . $_POST['username'] . '.txt';
            if( file_exists($file)) {
                
                $adat = $_POST['username'] . ";" . $_POST['password'] . "\n";

                $fu = fopen("passUserProba.txt", "a");
                fwrite($fu, $adat); 
                fclose($fu);


                $fp = fopen( $file , "r" ) ;
                $adat = fread($fp, filesize($file));
                fclose( $fp ) ;
    
                $ertekek = explode("\n", $adat);


                if( $ertekek[0] == $_POST['password']) {
            
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['egyenleg'] = $ertekek[1];

                    $datum = date("Y. m. d.  /  H:i:s");
                    $adat = $_POST['username'] . "  /  " . $datum . "\n";

                    $fu = fopen("userLogs.txt", "a");
                    fwrite($fu, $adat);
                    fclose($fu);
    
                    if( $ertekek[2] != '') {
                        $_SESSION['kor'] = $ertekek[2];
                    }
    
    
                    $_SESSION['verification'] = 'true';
                    print "  <script>  location.href=location.href  </script> " ;
                }
            }
            else {
                print "
                    <div class='wrong-panel'> 
                        <p>Helytelen felhasználónév/jelszó :(</p>
                        <br>
                        <a href='./?l=pass-change'>Elfelejtetted a jelszavad?</a>
                        <a href='./?l='class='gomb'>X</a>
                    </div>
                ";
            }
        }
    }
    if( $l == 'register') {
        print "
            <div id=panel>

                <form method='post' enctype='multipart/form-data'>
                    <h1>Registration</h1>
                    Username: <input type='text' name='regusername' class='ir'>
                    <br><br>
                    Password: <input type='password' name='regpassword' class='ir'>
                    <br><br>
                    <input type='submit' value='Register' class='kuld'>
                    <br><br><br>
                    <div class='link'>
                        <a href='./?l=' class='link-design'>Login</a>
                    </div>

                </form>
            </div>
        ";
    
    
        if( isset($_POST['regusername'])) {

            $file = './felhasznalok/' . $_POST['regusername'] . '.txt';
    
            if( !file_exists($file) and $_POST['regusername'] != '' and $_POST['regpassword'] != '') {
                $fp = fopen( $file , "w" ) ;
                $adat = $_POST['regpassword'] . "\n" . 0;
                fwrite($fp, $adat);
                fclose( $fp ) ;
            }
            else {
                print "
                    <div class='wrong-panel'> 
                        <p>Kérlek add meg mind a kér értéket!</p>
                        <br>
                        <a href='./?l='class='gomb'>X</a>
                    </div>
                ";
            }
        }
    }  

    if($l == 'pass-change') {
        print "
            <div id=panel>

                <form method='post' enctype='multipart/form-data'>
                    <h1 style='text-align: center;'>Enter with code</h1>
                    <p class='message'>If you set an access code in your account, now you will be able to<br>enter your account by giving the correct username and code.</p>
                    <div class='form-panel'>
                        Username: <input type='text' name='cUsername' class='ir'>
                        <br><br>
                    
                        Code: <input type='password' name='cCode' class='ir'>
                        <br><br>
                        <input type='submit' value='Register' class='kuld'>
                        <br><br>
                    </div>
                    <div class='link'>
                        <a href='./?l=' class='link-design'>Login</a>
                    </div>
                </form>
            </div>
        ";

        if( isset($_POST['cUsername']) ) {

            $file = 'felhasznalok/' . $_POST['cUsername'] . '.txt';
            if( file_exists($file)) {
                $fp = fopen( $file , "r" ) ;
                $adat = fread($fp, filesize($file));
                fclose( $fp ) ;
    
                $ertekek = explode("\n", $adat);

                if( $ertekek[3] == $_POST['cCode']) {
            
                    $_SESSION['username'] = $_POST['cUsername'];
                    $_SESSION['password'] = $ertekek[0];
                    $_SESSION['egyenleg'] = $ertekek[1];
    
                    if( $ertekek[2] != '') {
                        $_SESSION['kor'] = $ertekek[2];
                    }
    
    
                    $_SESSION['verification'] = 'true';
                    print "  <script>  location.href=location.href  </script> " ;
                }
                else {
                    print "
                        <div class='wrong-panel'> 
                            <p>Wrong username/code :(</p>
                            <br>
                            <a href='./?l='>Would you like to use password?</a>
                            <a href='./?l=pass-change'class='gomb'>X</a>
                        </div>
                    ";
                }
            }
            else {
                print "
                    <div class='wrong-panel'> 
                        <p>Wrong username/code :(</p>
                        <br>
                        <a href='./?l='>Would you like to use password?</a>
                        <a href='./?l=pass-change'class='gomb'>X</a>
                    </div>
                ";
            }
        }
        


    }
}

    ?>




    


</body>
</html>

