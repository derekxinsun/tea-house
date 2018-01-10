<?php

//store in the session

if (isset($_GET['PHPSESSID'])){
    session_id($_GET['PHPSESSID']);
}
session_start();
$teaid=$_GET['teaid'];
$teaname=$_GET['teaname'];

$_SESSION[$teaid]=$teaname;

echo "<br>Shopping is successfully!";
echo "<br><a href = 'myHall.php?".SID."'>Continue shopping</a>";

?>

<?php


?>

