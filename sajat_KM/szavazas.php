<h1>Szavazás</h1>


<?php

if(!isset( $_SESSION['szavazva'] ))
{
print "


<form action='szavazas_ir.php' method='post' target='kisablak'>

        <input type='radio' name='evszak' value='1'> Tavasz <br>
        <input type='radio' name='evszak' value='2'> Nyár <br>
        <input type='radio' name='evszak' value='3'> Ősz <br>
        <input type='radio' name='evszak' value='4'> Tél <br><br>

        <input type='submit' value='Szavazok'>

</form>


";
}
else
{
    $fajlnev = "szavazas.txt";

    $fp = fopen($fajlnev, "r");
    $sz = fread( $fp, filesize($fajlnev) );
    fclose( $fp );

$allas = explode( ";", $sz )  ;
$ossz = array_sum( $allas )   ;

$a[0] = round( $allas[0] / $ossz *100);
$a[1] = round( $allas[1] / $ossz *100);
$a[2] = round( $allas[2] / $ossz *100);
$a[3] = round( $allas[3] / $ossz *100);

print "

    <style>
        table tr td span
        {
            display          : block ;
            height           : 16px  ;  //a szám és a px között nincs szóköz
            background-color : #484  ;
        }

    </style>



    <table>
        <tr><td> Tavasz:   <td>  $allas[0]%  <td> <span style='width:".($a[0]*3)."px;'></span>
        <tr><td> Nyár:     <td>  $allas[1]%  <td> <span style='width:".($a[1]*3)."px;'></span>
        <tr><td> Ősz:      <td>  $allas[2]%  <td> <span style='width:".($a[2]*3)."px;'></span>
        <tr><td> Tél:      <td>  $allas[3]%  <td> <span style='width:".($a[3]*3)."px;'></span>

    </table>
    
";

}
?>

<iframe name='kisablak' width='0' height='0' frameborder='0' ></iframe>