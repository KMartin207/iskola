

<!DOCTYPE html>
<html>

  <head>
    <title>
<?php
	if( isset($_GET['p']) )    $p = $_GET['p'] ;
	else                       $p = ""         ;

	if( $p==""        )  print "Minőségi akciós kütyük" ; else
	if( $p=="kapcs"   )  print "Milyen kütyüt vegyek?"  ; else
	if( $p=="eler"    )  print "Hol vegyek kütyüt?"     ; else
	if( $p=="webshop" )  print "Kütyük online vására"   ; else
	if( $p=="forum"   )  print "Kütyü vélemények"       ; else
	if( $p=="szavazas"   )  print "Szavazás"            ; else
	if( $p=="vendegkonyv")  print "Vendégkönyv"         ; else
	if( $p=="API")  		print "API"         		; else
	if( $p=="pénznem")  		print "pénznem"         		; else
	if( $p=="szorzo")  		print "Szorzótábla"         		; else
	                     print "404 kütyü "             ;

	print " - kütyübolt.hu" ;
?>
    </title>

	<link rel="stylesheet" href="style.css">

  </head>

  <style>

	.kijel {
		background-color: blue;
		color: white;
		margin: auto;
		display:flex;
		margin-top: 5px;
	}

	.profil {
		background-color: blue;
		border-radius: 30px;
		margin: 10px;
		padding: 15px;
		color: white;
		display: inline-block;
	}

	.ikon {
		height: 30px;
		width: 30px;
		
	}

	.gomb {
		text-decoration: none;
		color: white;
	}

	.gomb:hover {
		color: grey;
	}

    body
    {
	margin           : 0              ;
	font-size        : 1.2em          ;
	font-family      : Verdana        ;
    }

    div#menu
    {
	background-color : #AAA           ;
	text-align       : center         ;
    }

    div#menu a
    {
	display          : inline-block   ;
	padding          : 6px            ;
	width            : 160px          ;
	color            : #666           ;
	text-decoration  : none           ;
	border           : solid 1px #AAA ;
    }

    div#menu a:hover
    {
	color            : #000           ;
	background-color : #DDD           ;
	border           : solid 1px #666 ;
    }



    div#lablec
    {
	background-color : #BBB           ;
	position: fixed;
	inset: 0px;
	width: 95%;
	height: 20px;
	padding: 20px;
	margin-top: 97%;
	
    }

	#menu-button {
		background-color : #AAA           ;
		text-align       : center         ;
		display: inline;
	}

  </style>

  <body>

	<div class='profil'>
		<?php 
			print "
				<div>
					Felhasználónév: $_SESSION[username]
					<br>
					Egyenleg: $_SESSION[egyenleg]
				</div>
			"; 
			
		?>
		<a href="./?l=belepve&p=setting"><img src="kepek/setting.png" class='ikon'></a>
		<br>
		
		<form method='post'>	
			<input type="submit" value="Kijelentkezés" name='kijel' class='kijel'>
		</form>

		<?php

			if( isset($_POST['kijel'])) {

				session_destroy();
				header("Location: index.php");
				exit();
			}
		?>

	</div>
	

	<?php
		


			print "
				<div id='menu'>
					<!--<a href='./l=belepve&'           > Kezdőlap    </a>-->
					<a href='./?l=belepve&p=kapcs'   > Kapcsolat   </a>
					<a href='./?l=belepve&p=eler'    > Elérhetőség </a>
					<a href='./?l=belepve&p=webshop' > Webshop     </a>
					<a href='./?l=belepve&p=forum'   > Fórum       </a>
					<a href='./?l=belepve&p=szavazas'> Szavazás    </a>
					<a href='./?l=belepve&p=vendegkonyv'> Vendégkönyv  </a>
					<a href='./?l=belepve&p=API'> API  </a>
					<a href='./?l=belepve&p=szorzo&m=10'> Szorzótábla  </a>
					<a href='./?l=belepve&p=idojaras'> Időjárás  </a>
					<a href='./?l=belepve&p=slot'> Slot  </a>
				</div>
			";


			print "
				<div id='menu-button'>
					<form method='post'>
						<input type='image' src='kepek/setting.png' class='ikon'>
					</form>
				
				</div>
			";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$pressed = 'true';

			}


		

	?>

    

    <div id='tartalom'>
<?php
	if( $p==""        )  print "<h1> Akciók, aktualitások </h1>"              ; else
	if( $p=="kapcs"   )  print "<h1> Vedd fel velünk a kapcsolatot! </h1>"    ; else
	if( $p=="eler"    )  print "<h1> Elérhetőségeink </h1>"                   ; else
	if( $p=="webshop" )  print "<h1> Vásárolj kínálatunkból </h1>"            ; else
	if( $p=="forum"   )  print "<h1> Kíváncsiak vagyunk a véleményedre </h1>" ; else
	if( $p=="szavazas")  include( "szavazas.php" )                            ; else
	if( $p=="vendegkonyv")  include( "vendegkonyv_form.php" )                 ; else
	if( $p=="API")  include( "API.php" )                 ; else
	if( $p=="setting")  include( "setting.php" )                 ; else
	if( $p=="szorzo")  include( "szorzotabla.php" )                 ; else
	if( $p=="idojaras")  include( "idojaras.php" )                 ; else
	if( $p=="slot")  include( "slot.php" )                 ; else
	                     include( "404.php" )                                 ;
?>
    </div>




    <div id='lablec'>
<?php
	$fajlnev = "./latogatottsag/" . date("Ymd") . ".txt" ;
	if( !file_exists($fajlnev) )
	{
		$fp = fopen( $fajlnev, "w" ) ;
		fwrite( $fp , "0" ) ;
		fclose( $fp ) ;
	}

	$fp = fopen( $fajlnev, "r" ) ;
	$n  = fread( $fp , filesize($fajlnev) ) ;
	fclose( $fp ) ;

	if( !isset($_SESSION['izom']) )
	{
		$n++ ;

		$fp = fopen( $fajlnev, "w" ) ;
		fwrite( $fp , $n ) ;
		fclose( $fp ) ;

		$_SESSION['izom'] = "évvége" ;
	}

	print "<span style='float:right'>Az oldalt eddig $n látogató látta ma.</span>" ;


	$ho    = array( "", "január", "február", "március", "április", "május", "június", "július", "augusztus", "szeptember", "okrtóber", "november", "december" ) ;
	$napok = array( "", "hétfő", "kedd", "szerda", "csütörtök", "péntek", "szombat", "vasárnap" ) ;
	print date("Y. ") . $ho[date("n")] . date(" d. ") . $napok[date("N")] ;
?>
    </div>

  </body>

</html>
