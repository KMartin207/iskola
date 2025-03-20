<?php

header('Content-Type: application/json; charset=utf-8');

if( isset($_GET['jel']))    $jel    =   $_GET['jel'];
else                        $jel    =   ''          ;

//print $jel[9];

if( $jel[0] == 8 and strlen($jel) == 10) {
    
    $ossz = 0;
    
    for( $i = 0 ; $i < 9 ; $i++ ) {

        $ossz = $ossz + ($jel[$i] * ($i + 1));
    }

    $tizedik = $ossz % 11;
}


if( isset($tizedik) and $tizedik == $jel[9]) {

    $kezdEv = 1867;
    $kezdHo = 1;
    $kezdNap = 1;


    $elteltNap = $jel[1];

    for( $i = 2 ; $i < 6 ; $i++ ) {

        $elteltNap = $elteltNap . $jel[$i];
    }

    $elteltEv = $elteltNap / 365;

    print $kezdEv + $elteltEv;


    $tomb = array(  'jel'           =>  $jel        ,
                    //'szul_datum'    =>  $szul_datum ,
                    'error'         => '0'
                );

    $json = json_encode( $tomb , JSON_UNESCAPED_UNICODE ) ;

    print $json ;
}
else {
    $tomb = array(      'error'         =>  '1'
                );

    $json = json_encode( $tomb , JSON_UNESCAPED_UNICODE ) ;

    print $json ;
}




?>