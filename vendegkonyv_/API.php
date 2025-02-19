<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
        if( isset($_GET['g']) )    $g = $_GET['g'] ;
        else                       $g = ""         ;
        if( $g=="kutya"        )  print "kutya" ; else
        if( $g=="randuser"   )  print "randuser"  ; else
        if( $g=="penz"   )  print "penz"  ; else
        if( $g=="koordinata"   )  print "koordinata"  ; else
                             print "404 kütyü "             ;
    ?>
    </title>
</head>
<body>
    
</body>
</html>


<div id='menu' style='margin: 10px;'>
      <a href='./?p=API&g=kutya' > Kutya </a>
      <a href='./?p=API&g=randuser' > Random felhasználó </a>
      <a href='./?p=API&g=penz'   > Penz   </a>
      <a href='./?p=API&g=koordinata'   > Koordinata   </a>

      
</div>

<?php
if($g=="kutya") include("kutya.php"); else
if($g=="randuser") include("randuser.php"); else
if($g=="penz") include("penz.php"); else
if($g=="koordinata") include("koordinata.php");
?>


