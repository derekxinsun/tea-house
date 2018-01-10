<?php

    session_start();

        if(isset($_POST["submit"]))
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $user = $_POST["username"];
            $psw = $_POST['psw1'];
            $myfile=fopen("members.txt","r") or die("Unable to open file!");
            $arr=array();
            $n=0;
            $n1=0;
            $n2=0;
            while(!feof($myfile))
            {
                $arr[$n]=fgets($myfile);
                $n++;
            }
            fclose($myfile);
            if($user == "" || $psw == "")
            {
                echo "<script>alert('please enter username and password.');</script>";
            }
            else if(!preg_match("/^[ A-Za-z0-9.!#$%&’*+^_`~?{|}]+@[a-zA-Z0-9]+(?:\.com)*$/",$user))
            {
                echo "<script>alert('Your Email address does not match the pattern.');</script>";
                include ("savingmembers.php");

            }
            else if((!preg_match("/[a-zA-Z0-9]{8,}/",$psw)))
            {
                echo "<script>alert('The password does not match the pattern.');</script>";
                include ("savingmembers.php");
            }
            else
            {
                for($i=0;$i<count($arr);$i++)
                {
                    $pair=preg_split("/:/", $arr[$i]);
                    if(strcasecmp($pair[0],$user)!=0)
                    {
                        $n1++;
                    }
                }
                if($n1>=count($arr))
                {
                    echo "<script>alert('The username does not exist.');</script>";
                    include ("savingmembers.php");
                }
                else
                {
                    for($i=0;$i<count($arr);$i++)
                    {
                        $pair=preg_split("/:/", $arr[$i]);
                        if(strcasecmp($pair[0],$user)==0&&strcasecmp($pair[1],$psw)==0)
                        {
                            $_SESSION["login"]=1;
                            include("savingmembers.php");
                            break;
                        }
                        $n2++;
                    }
                    if($n2>=count($arr))
                    {
                        echo "<script>alert('The password does not exist.');</script>";
                        include("savingmembers.php");
                    }
                }
            }
        }
?>