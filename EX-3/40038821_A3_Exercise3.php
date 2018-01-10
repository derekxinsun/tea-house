<html>
<body>
<h2>40038821_A3_ Exercise3</h2>
<h2>Welcome to visit this page~</h2>
<br>
<?php
function getVisit(){
    date_default_timezone_set('EST');// set time zone
    $time = strtotime('+1 hour');// summer  time
    $timeExpire =time() + 60*60*24*1  ;//seconds * minutes * hours * days + current time
    $history = date("H:i:s - M/d/Y",$time);// set last time history

    setcookie('lastVisit', $history , time()+(60*60*24*1));// set historical visit cookie

    //display the visit times
    if (!isset($_COOKIE['visits']))
        $_COOKIE['visits'] = 0;
        $visits = $_COOKIE['visits'] + 1;// assign visit times value
        setcookie('visits',$visits,$timeExpire);//set current visit cookie

    // display the first time vist, otherwise output last time's visit time
    if(!empty($_COOKIE['lastVisit']))
    {
        $lastVisitTime = $_COOKIE['lastVisit']; // assign last visit time value
        echo("Hello, this is your $visits time here. </br>");
        echo "Your last visit was @ ". $lastVisitTime;
    }
    else
        echo "Welcome! You are new here.";// first time visit message
}
?>

<?php
    getVisit();
?>

</body>
</html>