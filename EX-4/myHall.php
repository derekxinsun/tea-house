<?php

if (isset($_GET['PHPSESSID'])){
    session_id($_GET['PHPSESSID']);
}
session_start();

echo "<h1>Welcome to buy our product!</h1>";
echo "<a href='shopProcess.php?teaid=sn001&teaname=Biluochun>Biluochun&".session_id()."'>Biluochun</a><br>";
echo "<a href='shopProcess.php?teaid=sn002&teaname=YellowChrysanthemum&".session_id()."'>Yellow Chrysanthemum</a><br>";
echo "<a href='shopProcess.php?teaid=sn003&teaname=Longjin&".session_id()."'>Longjin</a><br>";
echo "<a href='shopProcess.php?teaid=sn004&teaname=Puer&".session_id()."'>Puer</a><br>";
echo "<a href='shopProcess.php?teaid=sn005&teaname=WhiteTea&".session_id()."'>White Tea</a><br>";
echo "<a href='shopProcess.php?teaid=sn006&teaname=TieGuanyin&".session_id()."'>Tie Guanyin</a><br>";
echo "<a href='shopProcess.php?teaid=sn007&teaname=WhiteChrysanthemum&".session_id()."'>White Chrysanthemum</a><br>";
echo "<hr>";
echo "<a href='cart.php?".session_id()."'>Check your shopping list</a>";
?>