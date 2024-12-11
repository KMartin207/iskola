<?php
session_start() ;

print_r($_POST) ;

$fajlnev = "szavazas.txt";
if(!file_exists($fajlnev))
{
    $fp = fopen( $fajlnev, "w" );
    fwrite( $fp, "0;0;0;0" );
    fclose($fp);
}

$m = $_POST['evszak'] ;

$fp = fopen($fajlnev, "r");
$sz = fread( $fp, filesize($fajlnev) );
fclose( $fp );

$allas = explode( ";", $sz );


$allas[$m-1]++ ;




$sz = implode( ";", $allas );


$fp = fopen( $fajlnev, "w" );
    fwrite( $fp, $sz );
    fclose($fp);


$_SESSION['szavazva'] = 1;

print"

<script>

parent.location.href = parent.location.href

</script>


";

?>