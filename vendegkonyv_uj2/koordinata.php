
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    td, th{
        border: solid 2px black;
        padding: 5px;
    }
</style>
<h1>Várható időjárás</h1>

<div id="tables-container"></div>
<?php
$fk = @fopen("https://api.infojegyzet.hu/idojaras/", "r");

if($fk) {

    $json = "";
	while (!feof($fk))  $json .= fread($fk, true);
    fclose($fk);

    $adat = json_decode($json, true);
    
    $elso = $adat["location"]["name"];

    print $elso;
}

"<script>
    const container = document.getElementById('tables-container');
</script>"

for ($i = 0; $i < 48; $i++) {
    "<script>
        <?php
            $szamlalo = date("H");
            $fok = $adat["forecast"]["forecastday"][$szamlalo]["temp_c"];
        ?>

        let table = document.createElement("table");
        table.border = "1";  // opcionális, hogy látható legyen a táblázat

        let row = document.createElement("tr");

        let cell1 = document.createElement("td");
        cell1.textContent = "<?php print $elso?>";

        let cell2 = document.createElement("th");
        cell2.textContent = "Óra";

        let cell3 = document.createElement("td");
        cell3.textContent = "<?php print $fok?>";

        let cell4 = document.createElement("td");
        cell4.textContent = i;

        row.appendChild(cell1);
        row.appendChild(cell2);
        row.appendChild(cell3);
        row.appendChild(cell4);

        table.appendChild(row);

        container.appendChild(table);
    </script>"
}
?>






<script>
     

    for (let i = 0; i < 48; i++) { 

        
    }
</script>
<table>
    <tr>
        <td>kep</td>
        <th>ora</th>
        <td>fok</td>
    </tr>
    <tr>
        <td>kep</td>
        <th>ora</th>
        <td>fok</td>
    </tr>
</table>

<div style=' margin: 18px 0 18px 48px; font-family: Courier; color:#226;'>
		<pre><?php print_r($adat); ?></pre>
	</div>
</body>
</html>




