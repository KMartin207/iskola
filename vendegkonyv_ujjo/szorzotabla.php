
<style>
    table {
        background-color: #007500; 
    }
    td {
        text-align: right;
        padding: 5px;
        background-color: #8AFF8A;
        border-radius: 5px;
    }

    td:hover {
        background-color: yellow;
    }
</style>

<?php

if( isset($_GET['m']) )    $m = $_GET['m'] ;
else                       $m = ''         ;

print "<table>";
for($i = 1; $i <= $m; $i++) {
    print "<tr>";
    for($k = 1; $k <= $m; $k++) {
        print "<td>" . $i * $k . "</td>";
    }

    print "</tr><br>";

}
print "</table>";

?>