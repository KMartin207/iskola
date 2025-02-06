<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

print "A lekérdezés időpontja: " . date("H:i:s");

$fk = @fopen("https://api.coingecko.com/api/v3/exchange_rates", "r");

if($fk) {
    $json = "";
	while (!feof($fk))  $json .= fread($fk, 1024);
    fclose($fk);

    $adat = json_decode($json);
    $eur = $adat->rates->eur->value;
    $huf = $adat->rates->huf->value;
    $usd = $adat->rates->usd->value;
    $gbp = $adat->rates->gbp->value;
    $chf = $adat->rates->chf->value;
    $jpy = $adat->rates->jpy->value;
    $czk = $adat->rates->czk->value;
    $pln = $adat->rates->pln->value;
}




?>

<table>
    <tr>
        <th>Euró</th>
        <th>Amerikai dollár</th>
        <th>Angol font</th>
        <th>Svájci frank</th>
        <th>Japán jen</th>
        <th>Cseh korona</th>
        <th>Lengyel zloty</th>
    </tr>


    <tr>
        <td><?php print round($huf / $eur); ?></td>
        <td><?php print round($huf / $usd); ?></td>
        <td><?php print round($huf / $gbp); ?></td>
        <td><?php print round($huf / $chf); ?></td>
        <td><?php print round($huf / $jpy); ?></td>
        <td><?php print round($huf / $czk); ?></td>
        <td><?php print round($huf / $pln); ?></td>
    </tr>

</table>




</body>
</html>