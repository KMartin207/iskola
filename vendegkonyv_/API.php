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
                             print "404 kütyü "             ;
    ?>
    </title>
</head>
<body>
    
</body>
</html>


<div id='menu'>
      <a href='./?p=API&k=akita' > Akita </a>
      <a href='./?p=API&k=mix'   > Mix   </a>
      
</div>

<div id='tartalom'>
<?php
	if( $k=="akita"        )  print "<h1>Akita</h1>"  ; else
	if( $k=="mix"   )  print "<h1>Mix</h1>"    ; 
?>
</div>



<?php


$fk = @fopen("https://dog.ceo/api/breed/" . $k . "/images/random", "r");
if($fk) {
    $json = fread($fk, 8192);
    fclose($fk);

    $adat = json_decode($json);
}

$kep = $adat->message;

print "<img src='$kep'>";






?>

<div style=' margin: 18px 0 18px 48px; font-family: Courier; color:#226;'>
		<pre><?php print_r($adat); ?></pre>
	</div>