
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$fk = @fopen("https://api.infojegyzet.hu/idojaras/", "r");

if($fk) {

    $json = fread($fk, 8192);
    fclose($fk);

    $adat = json_decode($json);
    
}
print "df";
?>
</body>
</html>




