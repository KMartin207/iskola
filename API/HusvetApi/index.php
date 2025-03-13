<?php
    header('Content-Type: application/json; charset=utf-8');
    
    if( isset($_GET['ev'])) $T = $_GET['ev'];
    else                    $T = './?T=' . date("Y");

    $A = $T % 19;
    $B = $T % 4;
    $C = $T % 7;
    $D = (19 * $A + 24) % 30;
    $E = (2 * $B + 4 * $C + 6 * $D + 5) % 7;




    $H = 22 + $D + $E;
    if( $E == 6 and $D == 29) $H = 50;
    if( $E == 6 and $D == 28 and $A > 10) $H = 49;

    if( $H <= 31) {
        $HVasarnap = 'Március ' . $H . '.';
        $Honap     = 'Március';

    }
    else {
        $HVasarnap = 'Április ' . ($H - 31) . '.';
        $Honap     = 'Április';

    }


    
    if( !($H - 33 < 1)) {
        $HPentek    = $Honap . " " . ($H - 33);
        $HHetfo     = $Honap . " " . ($H - 30);
    }
    else {
        $HPentek    = $Honap . " " . ($H - 2);
        $HHetfo     = "Április " . ($H - 30);
    }
    
    


    $tomb = array(      'ev'                =>  $_GET['ev'],
                        'nagypentek'        =>  $HPentek,
                        'husvetvasarnap'    =>  $HVasarnap,
                        'husvethetfo'       =>  $HHetfo,
                        //'punkosdvasarnap'   =>  $PVasarnap,
                        //'punkosdhetfo'      =>  $PHetfo

    );

    $json = json_encode( $tomb , JSON_UNESCAPED_UNICODE ) ;

    print $json ;

?>
