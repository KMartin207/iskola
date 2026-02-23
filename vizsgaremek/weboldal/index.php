<?php

    $adb = mysqli_connect("localhost", "root", "", "parkolorendszer");
    if(!$adb) {
        die("Kapcsolódási hiba: " . mysqli_connect_error());
    }

?>
