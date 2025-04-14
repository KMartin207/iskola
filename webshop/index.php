
<style>
    div#nav {
        background-color: grey; 

        padding: 20px;
        padding-left: 70px;
        padding-right: 70px;
        font-size: 35px;
        max-width: fit-content;
        margin-left: auto;
        margin-right: auto;
    }

    a {
        text-decoration: none;
        padding: 10px;
        color: white;
    }

    a:hover {
        color: black;
        transition: all .4s ease;
        -webkit-transition: all .4s ease;
    }

    #box {
        background-color: blue; 
        
        max-width: fit-content;
        margin-left: auto;
        margin-right: auto;
    }


</style>

<?php

    //$adb = mysqli_connect( "localhost", "root", "", "foldrajz" ) ;

    if( isset( $_GET['p']))         $p = $_GET['p'];
    else                            $p = ''        ;

    print "
            <div id='nav'>
                <a href='./?p=fooldal'>Főoldal</a>
                <a href='./?p=parfum'>Parfümök</a>

            </div>
    ";


    if( $p == 'fooldal' ){

        for( $i = 0; $i <= 5; $i++) {
            print "
                <div id='layout'>
                    <div id=box>
                        <h1>Xerjoff</h1>
                    </div>

                </div>"
            ;
        }   
        

    }

    if( $p == 'parfum'){

        print "Patrik";

    }

?>