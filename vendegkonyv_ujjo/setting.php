<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
</head>
<body>
    <style>
        .popup {
            background-color: grey;
            position: fixed;
            inset: 0px;
            width: 12rem;
            height: 150px;
            
            margin: auto;
            padding: 20px;
        }
    </style>

    <div class='popup'>
        <button onclick="history.back()">X</button>
        <form method='post'>
            Születésnap: <input type="text" name='szuletes'>
            Életkor: <input type="text" name="eletkor">
            Felhasználónév: <input type="text" name='felhasz'>
            <input type="submit" value="Mentés">
        </form>
        
        
    </div>

    <?php
        if( isset($_POST['submit'])) {
            $fp = fopen('adattarolas.txt', 'a+');

            $adat = fappend();

        }
    ?>

</body>
</html>