<style>

div#kont
{
	float : left  ;
	width : 100px ;
}

div#lista
{
	float : left  ;
	width : 200px ;
}

div#reszlet
{
	float : left  ;
	width : 100px ;
}

</style>

<?php

    $adb = mysqli_connect( "localhost", "root", "", "foldrajz" ) ;

    if( isset($_GET['kontinens']))  $kontinens = $_GET['kontinens'];
    else                            $kontinens = ''                ;


    print "<div id=kont> 
                <a href='./?kontinens=europa'>Európa</a><br>
                <a href='./?kontinens=azsia'>Ázsia</a><br>
                <a href='./?kontinens=afrika'>Afrika</a><br>
                <a href='./?kontinens=amerika'>Amerika</a><br>
                <a href='./?kontinens=ausztralia'>Ausztrália</a><br>
          </div>";

    if( isset( $_GET['kontinens'])) {
      $tabla = mysqli_query( $adb , "
          SELECT * 
          FROM   orszagok 
          WHERE  foldr_hely LIKE '%$kontinens%'
      " ) ;


      print "<div id='lista'>" ;
      while( $sor = mysqli_fetch_array( $tabla ) )
      print "
      <a href='./?kontinens=$kontinens&oid=$sor[id]'>$sor[orszag]</a><br>
      " ;
      print "</div>" ;
    
    


        if( isset($_GET['oid']) )
        {
          $tabla = mysqli_query( $adb , "
                SELECT * , nepesseg/terulet*1000 AS nepsuruseg
                FROM   orszagok 
                WHERE  id = '$_GET[oid]'
          " ) ;
      
          $sor = mysqli_fetch_array( $tabla ) ;

          $nepsuruseg = $sor['nepesseg'] / $sor['terulet'] * 1000 ;

          print "

        <div id='reszlet'>
          Ország : $sor[orszag]  <br>

          Főváros: $sor[fovaros] <br>

          Terület: $sor[terulet] km<sup>2</sup><br>

          Népesség: $sor[nepesseg] ezer fő <br>

          Népsűrűség (MySQL): $sor[nepsuruseg] fő/km<sup>2</sup> <br>

        </div>

          " ;
        }
        else
        {

          $tabla = mysqli_query( $adb , "
                SELECT COUNT(orszag) AS orszagokSzama
                FROM   orszagok 
                WHERE  orszag = '%$kontinens%'
          " ) ;

          $sor = mysqli_fetch_array( $tabla ) ;


          
          print "

            <div id='reszlet'>
              Országok száma : $sor[orszagokSzama]  <br>

              Kontinens területe: $sor[terulet] km<sup>2</sup><br>

              Népesség: $sor[nepesseg] ezer fő <br>

              

            </div>

          " ;
        }
    }
    mysqli_close( $adb ) ;
?>