
<?php
    session_start();
    include("login.php");
    include("savingmembers.php");
?>

<?php

$user = $_POST["username"];
$psw = $_POST['psw1'];
$myfile=fopen("members.txt","r") or die("Unable to open file!");
$arr=array();
$n=0;
$n1=0;

if($_SESSION["login"]==1)
{
    while(!feof($myfile))
    {
        $arr[$n]=fgets($myfile);
        $n++;
    }
    fclose($myfile);
    for($i=0;$i<$n;$i++)
    {
        $a= preg_split("/:/",$arr[$i]);
        if(strcasecmp($a[0],$user) == 0 && strcasecmp($a[1],$psw) == 0 )
        {
            echo "Username: ".$user.", Password:  ".$psw;
            break;
        }
        $n1++;
    }
    if($n1>=$n)
        echo "The Account can not be found.";
}
session_destroy();