<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<style>
    #valto {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #valto-tartalom {
        background: grey;
        border-radius: 5px 5px 10px;
        padding: 10px;
    }
    
    #gomb {
        margin-left: 60px;
    }
    input {
        margin-left: 5px;
        size: 10px;
    }
    

</style>

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

if( isset($_POST['valto_bol'])) $bol = $_POST['valto_bol']  ;  
if( isset($_POST['valto_bol'])) $bol_ertek = $adat->rates->$bol ;

if( isset($_POST['valto_ba'])) $ba = $_POST['valto_ba']  ;  
if( isset($_POST['valto_ba'])) $ba_ertek = $adat->rates->$ba ;

if( isset($_POST['ertek'])) $ertek = $_POST['ertek'];

if( isset($_POST['ertek'])) $eredmeny = round((($ertek * $ba_ertek) / $bol_ertek)) ; 









?>

<div id='valto'>
    <div id='valto-tartalom'>


        <form method='post'>
            <select name='valto_bol' placeholde='EUR'>
                <option><?php if( isset($_POST['valto_bol'])) print $_POST['valto_bol']; else print '---Válassz!---'?></option>
                <option>HUF</option>
                <option>EUR</option>
                <option>USD</option>
                <option>CHF</option>
                <option>GBP</option>
                <option>CZK</option>
                <option>HRK</option>
                <option>PLN</option>
                <option>JPY</option>
                <option>BTC</option>
            </select>
            <br>
            <input type="text" value='<?php if( isset($_POST['ertek'])) print $ertek; ?>' disabled>
            <br>
            <input type="text" name='ertek'>
            <br>
            <br>
            <select name='valto_ba'>
                <option><?php if( isset($_POST['valto_bol'])) print $_POST['valto_ba']; else print '---Válassz!---'?></option>
                <option>HUF</option>
                <option>EUR</option>
                <option>USD</option>
                <option>CHF</option>
                <option>GBP</option>
                <option>CZK</option>
                <option>HRK</option>
                <option>PLN</option>
                <option>JPY</option>
                <option>BTC</option>
            </select>
            <br>
            <input type="text" disabled value='<?php if( isset($_POST['valto_bol'])) print $eredmeny; ?>'>

            <br><br>
            <input type="Submit" value="Váltás" id='gomb'>

        </form>
    </div>
</div>

</body>
</html>