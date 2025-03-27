<?php
    header('Content-Type: application/json; charset=utf-8');
    
    if( isset( $_GET['datum'])) $datum = $_GET['datum'] ;
    else                        $datum = date('Y-m-d')   ;
    
    if( isset( $_GET['db']))    $db = $_GET['db']       ;
    else                        $db = 3                 ;
    
    $idoOra = 29.53058867;
    $elteltIdoMaPercben = round(($idoOra * (24 * 60)) * 60);

    $ElteltTeliHold = mktime(20, 40, 0, 6, 24, 2021);

    $koviMPercbe = round($ElteltTeliHold / $elteltIdoMaPercben);

    $MaElteltMP = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

    print $koviMPercbe;

    //print date('H') . " " . date('i') . " ". date('s') . " ". date('m') . " ". date('d') . " ". date('Y');
    $tomb = array(      
                    '[0]' => date("Y.m.d.", $koviMPercbe + $MaElteltMP),
                    
                    
    );

    $json = json_encode( $tomb , JSON_UNESCAPED_UNICODE ) ;

    print $json ;

?>
