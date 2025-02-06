<?php
	session_start() ;
?>
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
	                     print "404 kütyü "             ;

	print " - kütyübolt.hu" ;
?>
    </title>
  </head>

  <style>

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

    div#tartalom
    {
	padding          : 12px 48px      ;
	min-height       : 580px          ;
    }

    div#lablec
    {
	background-color : #BBB           ;
    }

  </style>

  <body>
    <div id='menu'>
      <a href='./'           > Kezdőlap    </a>
      <a href='./?p=kapcs'   > Kapcsolat   </a>
      <a href='./?p=eler'    > Elérhetőség </a>
      <a href='./?p=webshop' > Webshop     </a>
      <a href='./?p=forum'   > Fórum       </a>
      <a href='./?p=szavazas'> Szavazás    </a>
      <a href='./?p=vendegkonyv'> Vendégkönyv  </a>
	  <a href='./?p=API'> API  </a>
	  <a href='./?p=pénznem'> Pénznemek  </a>
    </div>

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
	if( $p=="pénznem")  include( "penz.php" )                 ; else
	                     include( "404.php" )                                 ;
?>
    </div>


<iframe name='kisablak' width=640 height=120 frameborder=1></iframe>

    <div id='lablec'>
<?php
	$fajlnev = date("Ymd") . ".txt" ;
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
