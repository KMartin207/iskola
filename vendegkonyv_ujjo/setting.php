<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
</head>
<body>
    <style>

        .notification {
            background-color: yellow;
            inset: 0px;
            width: 20rem;
            height: 150px;
            display: flex;
            justify-content: center;
            margin: auto;
            padding: 20px;
            padding-bottom: 30px;
        }

        .gomb {
            text-decoration: none;
            color: black;
        }

        .popup {
            background-color: grey;
            position: fixed;
            inset: 0px;
            width: 30rem;
            height: 25rem;
            padding: 20px;
            
            margin: auto;
            padding: 20px;
            padding-bottom: 100px;
            box-shadow: 2px 7px 14px;
        }

        .input-design {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);

        }

    </style>
    

<?php

    if( isset($_SESSION['elmentve'])) {
        print "
            <div class='notification'> 
                <p>Sikeresen megváltoztattad az adatokat!</p>
                <a href='./?l=belepve&p=setting' class='gomb'>X</a>
            </div>
        ";
        unset($_SESSION['elmentve']);
    }
    

?>
    


    <div class='popup'>
        <button onclick="history.back()" style='font-size: 20px; '>X</button>
        <form method='post'>
            <div class='input-design'>
                Felhasználónév: <input type="text" name='felhasz'><br><br>
                Életkor: <input type="text" name="eletkor" placeholder="<?php if(isset($_SESSION['kor'])) print $_SESSION['kor']; ?>"><br><br>
                Jelszó: <input type="text" name='jelsz'> <br><br>
                Kód beállítás: <input type="text" name='kod'><br><br> 
                <input type="submit" value="Mentés">
            
            
        </form>

        <form method='post'>
                <br>
                A fiók törléséhez írd be a jelszót! <br>
                <input type="text" name='deleteAccPass'><br>
                <input type="Submit" value="Töröl">
            </div>
        </form>
        
        
    </div>

    <?php
    



        $file = 'felhasznalok/' . $_SESSION['username'] . '.txt';
        if( isset($_POST['eletkor']) and $_POST['eletkor'] != '' ) {
            if( !($_POST['eletkor'] > 100) and !($_POST['eletkor'] < 1) ) {
                $row = 2;
                $fp = file($file, FILE_IGNORE_NEW_LINES);
                $fp[$row] = $_POST['eletkor'];
                
                file_put_contents($file, implode("\n", $fp));

                $fp = fopen( $file , "r" ) ;
                $adat = fread($fp, filesize($file));
                fclose( $fp ) ;

                $ertekek = explode("\n", $adat);

                $_SESSION['kor'] = $ertekek[2];
                $_SESSION['elmentve'] = 'true';
                print "  <script>  location.href=location.href  </script> " ;
            }
            else {
                print "
                    <div class='notification'>
                        <p>Kérlek 1-től 100-ig adj meg egy számot!</p>
                        <a href='./?l=belepve&p=setting' class='gomb'>X</a>
                    </div>
                ";
            }
            
        }

        if( isset($_POST['felhasz']) and $_POST['felhasz'] != "") {

            $newFelhasz = 'felhasznalok/' . $_POST['felhasz'] . '.txt';
            
            rename('felhasznalok/' . $_SESSION['username'] . '.txt', 'felhasznalok/' . $_POST['felhasz'] . '.txt');
            $_SESSION['username'] = $_POST['felhasz'];
            $_SESSION['elmentve'] = 'true';
            print "  <script>  location.href=location.href  </script> " ;
        }

        if( isset($_POST['jelsz']) and $_POST['jelsz'] != "") {

            $row = 0;
            $fp = file($file, FILE_IGNORE_NEW_LINES);
            $fp[$row] = $_POST['jelsz'];
            
            file_put_contents($file, implode("\n", $fp));
            $_SESSION['elmentve'] = 'true';
            print "  <script>  location.href=location.href  </script> " ;
        }

        if( isset($_POST['kod']) and $_POST['kod'] != '' ) {
            if( strlen($_POST['kod']) == 4 ) {
                $row = 3;
                $fp = file($file, FILE_IGNORE_NEW_LINES);
                $fp[$row] = $_POST['kod'];
                
                file_put_contents($file, implode("\n", $fp));
                $_SESSION['elmentve'] = 'true';
                print "  <script>  location.href=location.href  </script> " ;
            }
            else {
                print "
                    <div class='notification'>
                        <p>A kódnak 4 számjegyből kell állnia!</p>
                        <a href='./?l=belepve&p=setting' class='gomb'>X</a>
                    </div>
                ";
            }
            
        }

        if( isset($_POST['deleteAccPass']) ) {
            $fp = fopen( $file , "r" ) ;
            $adat = fread($fp, filesize($file));
            fclose( $fp ) ;

            $ertekek = explode("\n", $adat);
            if( $ertekek[0] == $_POST['deleteAccPass']) {
        
                session_destroy();
                print "<script>  location.href=location.href  </script>";
                unlink($file);
                header("Location: index.php/?l=oke");
				exit();
                
                
            }
            else {
                print "
                    <div class='notification'>
                        <p>Helytelen jelszót adtál meg!</p>
                        <a href='./?l=belepve&p=setting' class='gomb'>X</a>
                    </div>
                    
                ";
            }
        }

    ?>

</body>
</html>