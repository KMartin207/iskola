<?php
    session_start();

    print_r($_POST);

    $fajlnev = "vendegkonyv_adatok.txt";

    $nev = $_POST['teljesnev'];
    $szoveg = $_POST['szoveg'];
    $datum = date("Y.m.d");
    $index = 0;
    

    if(empty($nev))
    {
        print"A név mezőt kötelező kitölteni.";
    }
    else
    {
        if(!file_exists($fajlnev))
        {
            $fp = fopen($fajlnev, "w");
            fwrite($fp, "($nev | $szoveg | $datum | $index); \n\n");
            fclose($fp);
        }
        else
        {
            $fp = fopen($fajlnev, "a");
            fwrite($fp, "($nev | $szoveg | $datum | $index); \n\n");
            fclose($fp);
        }
    }


?>