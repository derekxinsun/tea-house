<?php

echo "<h1>The products already chosen in the Cart as below:</h1>";

if (isset($_GET['PHPSESSID'])){
    session_id($_GET['PHPSESSID']);
}
session_start();
foreach ($_SESSION as $value){
    echo "<br>".$value;
}

?>