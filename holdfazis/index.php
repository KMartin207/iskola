<?php
    header('Content-Type: application/json; charset=utf-8');
    
    if( isset( $_GET['datum'])) $datum = $_GET['datum'] ;
    else                        $datum = ''             ;
    
    if( isset( $_GET['db']))    $db = $_GET['db']       ;
    else                        $db = 3                 ;
    
    $idoOra = 29.53058867;
    $elteltIdoMaPercben = round(($idoOra * (24 * 60)) * 60);

    $ElteltTeliHold21 = mktime(20, 40, 0, 6, 24, 2021);

    if( $datum == '') {
        $ElteltTeliHoldMa = mktime(date('G'), date('i'), date('s'), date('m'), date('d'), date('Y'));
    }
    else {
        $datum = explode('-', $datum);
        $ElteltTeliHoldMa = mktime(0, 0, 0, $datum[1], $datum[2], $datum[0]);

    }
    

    if( $ElteltTeliHold21 < $ElteltTeliHoldMa ) {

        while ($ElteltTeliHold21 <= $ElteltTeliHoldMa) {
            $ElteltTeliHold21 = $ElteltTeliHold21 + $elteltIdoMaPercben;
        }


    }
    else {

        while ($ElteltTeliHold21 > $ElteltTeliHoldMa) {
            $ElteltTeliHold21 = $ElteltTeliHold21 - $elteltIdoMaPercben;
        }
            
        //$ElteltTeliHold21 = $ElteltTeliHold21 + $elteltIdoMaPercben;
    }
    

    $ossz = $ElteltTeliHold21;



    for($i = 0; $i < $db; $i++) {
        $tomb = array(  
            '[' . $i . ']' => date("Y.m.d. H:i", $ElteltTeliHold21 + $elteltIdoMaPercben),

                
        );

        $json = json_encode( $tomb , JSON_UNESCAPED_UNICODE ) ;

        print $json ;
    }
    

?>