<h1>Töltse ki vendégkönyvünket!</h1>




<?php

if(!isset($_SESSION['vendegkonyv']))
{
    print"

    <form action='vendegkonyv_ir.php' method='post' target='kisablak'>
    Írd ide a neved:<br>
    <input type='text' name='teljesnev' placeholder='Írd ide a nevedet'><br><br>
    Írd ide a véleményed:<br>
    <textarea cols='30' rows='10' name='szoveg'></textarea>
    <br>
    <input type='submit' value='Beküldés'>
    </form>


    <iframe name='kisablak' width='640' height='480' frameborder='1' ></iframe>
    ";

    
}




?>
