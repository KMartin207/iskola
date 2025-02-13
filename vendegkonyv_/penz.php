<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

if(isset($_GET['v'])) $v = $_GET['v'];
else $v = "";

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
<hr>
<?php

$fu = @fopen('http://infojegyzet.hu/webszerkesztes/php/valuta/api/v1/arfolyam/', 'r');

$json = fread($fu, 8192);
fclose($fu);

$adat = json_decode($json);

$EUR = $adat->rates->EUR ;

//print_r($adat);

//$_POST['valto_bol'] = "EUR" ;

$bol = $_POST['valto_bol']  ;  
$bol_ertek = $adat->rates->$bol ;

$ba = $_POST['valto_ba']  ;  
$ba_ertek = $adat->rates->$ba ;

$ertek = $_POST['ertek'];

$eredmeny = ($bol_ertek * $ba_ertek) ; 




print $bol_ertek;




?>

<form method='post'>
    <select name='valto_bol'>
        <option>---Válassz!---</option>
        <option>EUR</option>
        <option>HUF</option>
        <option>USD</option>
    </select>
    <br>
    <input type="text" name='ertek'>
    <br>
    <br>
    <select name='valto_ba'>
        <option>---Válassz!---</option>
        <option>EUR</option>
        <option>HUF</option>
        <option>USD</option>
    </select>
    <br>
    <input type="text" disabled value='<?php print $eredmeny; ?>'>

    <br><br>
    <input type="Submit" value="Váltás">

</form>

</body>
</html>