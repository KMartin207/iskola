<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

    $file = "felhasznalok/" . $_SESSION['username'] . ".txt";
    $fu = fopen($file, 'r');
    $adat = fread($fu, filesize($file)); 

    $adatok = explode("\n", $adat);
    

    $_SESSION['egyenleg'] = $adatok[1];
    

    if( isset($_POST['submit']) and !($_SESSION['egyenleg'] < 100)) {
        $symbol1 = 'kepek/' . rand(0, 2) . '.png';
        $symbol2 = 'kepek/' . rand(0, 2) . '.png';
        $symbol3 = 'kepek/' . rand(0, 2) . '.png';

        print
        "
            <div>
                <div>
                    <img src='$symbol1'>
                    <img src='$symbol2'>
                    <img src='$symbol3'>
                </div>
                
        ";
        
        $row = 1;
        $fp = file($file, FILE_IGNORE_NEW_LINES);
        $fp[$row] = $_SESSION['egyenleg'] - 50;
                
        file_put_contents($file, implode("\n", $fp));
        print "  <script>  location.href=location.href  </script> " ;

        
        if( $symbol1 == $symbol2 and $symbol2 == $symbol3) {
            $_SESSION['egyenleg'] = $_SESSION['egyenleg'] + 500;
            $row = 1;
            $fp = file($file, FILE_IGNORE_NEW_LINES);
            $fp[$row] = $_SESSION['egyenleg'] + 500;
                    
            file_put_contents($file, implode("\n", $fp));
            print "  <script>  location.href=location.href  </script> " ;

        }
    }
    else {
        print "
        <div>
            <div>
                <img src='kepek/0.png'>
                <img src='kepek/0.png'>
                <img src='kepek/0.png'>
            </div>
        </div>
        ";
    }

    print "     
                <form method='post' enctype='multipart/form-data'>
                    <input type='submit' value='Pörgetés' name='submit'>
                </form>
            </div>
    ";
    

?>

    
</body>
</html>