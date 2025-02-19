
<style>

input {
    display: flex;
    width: 200px;
    margin-left: 10%;
}

#tartalom { 
    margin-left: 20%;
}

img {
    margin-left: 10%;
}

</style>



<h1>Random user</h1>

<?php

$fk = @fopen("https://randomuser.me/api/", "r");

$json = fread($fk, 8192);
fclose($fk);

$adat = json_decode($json);

$kep = $adat->results[0]->picture->large;
$nev = $adat->results[0]->name->first . " " . $adat->results[0]->name->last;
$orszag = $adat->results[0]->location->country;
$email = $adat->results[0]->email;
$phone = $adat->results[0]->phone;
$number = $adat->results[0]->location->street->number;
$name = $adat->results[0]->location->street->name;
$varos = $adat->results[0]->location->city;
$nem = $adat->results[0]->gender;
$birthdate = $adat->results[0]->dob->date;
$username = $adat->results[0]->login->username;
$password = $adat->results[0]->login->password;
$photo = $adat->results[0]->picture->large;

?>

<form method="post">
    <div id="tartalom">

        <img src='<?php print isset($_POST['submit']) ? $photo : ''; ?>'>
        <br>
        Teljes név: <input type="text" name="nev" value="<?php print isset($_POST['submit']) ? $nev : ''; ?>"><br>
        Nem: <input type="text" name="nem" value="<?php print isset($_POST['submit']) ? $nem : ''; ?>"><br>
        Születési dátum: <input type="text" name="szuletes" value="<?php print isset($_POST['submit']) ? $birthdate : ''; ?>"><br><br>
        Lakhely <br>
        Ország:<input type="text" name="orszag" value="<?php print isset($_POST['submit']) ? $orszag : ''; ?>"><br>
        Város: <input type="text" name="varos" value="<?php print isset($_POST['submit']) ? $varos : ''; ?>"><br><br>
        E-mail: <input type="text" name="email" value="<?php print isset($_POST['submit']) ? $email : ''; ?>"><br>
        Telefonszám: <input type="text" name="phone" value="<?php print isset($_POST['submit']) ? $phone : ''; ?>"><br>
        Felhasználónév:<input type="text" name="username" value="<?php print isset($_POST['submit']) ? $username : ''; ?>"><br>
        Jelszó: <input type="text" name="password" value="<?php print isset($_POST['submit']) ? $password : ''; ?>"><br>
    

        <input type="submit" value="Próba" name="submit">

    </div>
</form>
