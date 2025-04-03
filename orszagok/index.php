<style>
	div
	{
		border : solid 1px gray ;
	}

</style>

<?php

    $adb = mysqli_connect( "localhost", "root", "", "foldrajz" ) ;

    $tabla = mysqli_query( $adb , "
					SELECT * 
					FROM   orszagok 
					WHERE  foldr_hely LIKE '%Europa%'
    " ) ;

    while( $sor = mysqli_fetch_array( $tabla ) )
    print "
		<div>
			<h1><a href='javascript:' onclick='alert(\"$sor[allamforma]\")'>$sor[orszag]</a></h1> 
			<h2>$sor[fovaros]</h2> 
			$sor[foldr_hely]
		</div>
    " ;

    mysqli_close( $adb ) ;
?>