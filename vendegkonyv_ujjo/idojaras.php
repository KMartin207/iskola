<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        table {
            margin: 25px;
            box-shadow: 2px 7px 14px;
        }
        th {
            font-size: 15px;
        }
        .tableHead {
            margin: 5px;
            box-shadow: 2px 7px 14px;
        }
        th, td {
            padding: 4px;
        }
    </style>

    <table>
        <tr class='tableHead'>
            <th>Időjárás</th>
            <th>várható hőmérséklet</th>
            <th>felhőtakaró aránya</th>
            <th>csapadék valószínűsége</th>
            <th>szélsebesség</th>
        </tr>
        <hr>
        
        <?php

        $fu   = fopen( "https://api.infojegyzet.hu/idojaras/" , "r" ) ;
        $json = "";
		while (!feof($fu))  $json .= fread($fu, 1024);

		fclose( $fu ) ;

		$adat = json_decode( $json ) ;
        for( $k = 0; $k < 2; $k++) {



            $kov48ora = date('j') + 48;
            $jelenleg = date('j');


            for($i = 0; $i <= 23; $i++) {
                $varhatoHomerseklet = $adat->forecast->forecastday[$k]->hour[$i]->temp_c;
                $felho              = $adat->forecast->forecastday[$k]->hour[$i]->cloud;
                $rainChance         = $adat->forecast->forecastday[$k]->hour[$i]->chance_of_rain;
                $windKph            = $adat->forecast->forecastday[$k]->hour[$i]->wind_kph;
                $ikon               = $adat->forecast->forecastday[$k]->hour[$i]->condition->icon;
                
                $ikon = "https:" . $ikon;
                
                print "
                    <tr>
                        <td>$i:00</td>
                        <td>$varhatoHomerseklet</td>
                        <td>$felho</td>
                        <td>$rainChance</td>
                        <td>$windKph</td>
                        <td><img src='$ikon'></td>
                    </tr>
                    <tr>
                        
                    </tr>
                ";
            }

        }
            
            
        ?>
    </table>
</body>
</html>