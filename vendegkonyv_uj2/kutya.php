<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
        if( isset($_GET['k']) )    $k = $_GET['k'] ;
        else                       $k = ""         ;
        if( $k=="akita"        )  print "Akita" ; else
        if( $k=="mix"   )  print "Mix"  ; else
        if( $k=="labrador"   )  print "Labrador"  ; else
        if( $k=="chihuahua"   )  print "Chihuahua"  ; else
        if( $k=="corgi"   )  print "Corgi"  ; else
                             print "404 kütyü "             ;
    ?>
    </title>
</head>
<body>

<div id='menu' style="margin: 10px;">
      <a href='./?p=API&g=kutya&k=akita'> Akita </a>
      <a href='./?p=API&g=kutya&k=mix'   > Mix   </a>
      <a href='./?p=API&g=kutya&k=labrador'   > Labrador   </a>
      <a href='./?p=API&g=kutya&k=chihuahua'   > Cihuahua   </a>
      <a href='./?p=API&g=kutya&k=corgi'   > Corgi   </a>
      
</div>

<div id='tartalom'>
<?php
    if( $k==""        )  print "<h1>Kutya képek</h1>"  ; else
	if( $k=="akita"        )  print "<h1>Akita</h1>"  ; else
	if( $k=="mix"   )  print "<h1>Mix</h1>"    ; else
    if( $k=="labrador"   )  print "<h1>Labrador</h1>"    ; else
    if( $k=="chihuahua"   )  print "<h1>Chihuahua</h1>"    ; else
    if( $k=="corgi"   )  print "<h1>Corgi</h1>"    ;
?>
</div>



<?php


$fk = @fopen("https://dog.ceo/api/breed/" . $k . "/images/random", "r");
if($fk) {
    $json = fread($fk, 8192);
    fclose($fk);

    $adat = json_decode($json);
}

if( isset($adat)){
    $kep = $adat->message;
    print "<img src='$kep' style='width: 300px; height=300px;'>";
}



?>
    
</body>
</html>



