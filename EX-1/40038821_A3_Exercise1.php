<?php

function factorial($int_Num)
{
    $int_Res = 1;
    if (is_int($int_Num) and ($int_Num>0)) {
        for ($i = 1; $i <= $int_Num; $i++) {
            $int_Res = $i * $int_Res;
        }
        return $int_Res;
    } else {
        return false;
    }
}

function mostFrequent($str){
    $new_Str = strtolower($str);
    $mostFrequent = 1;
    $frequent= 0;
    $item="";
    for ($i=0; $i<strlen($new_Str); $i++) {
        for ($j=$i; $j<strlen($new_Str); $j++)
        {
            if ($new_Str[$i] == $new_Str[$j])
                $frequent++;
            if ($mostFrequent<$frequent)
            {
                $mostFrequent=$frequent;
                $item = $new_Str[$i];
            }
        }
        $frequent=0;
    }
    return ($item." ( " .$mostFrequent." times ) ") ;
}

function uppercaseFirst($str){
    return ucwords($str);
}

function splitSort($str){
    for ($i=0;$i<strlen($str);$i++){
        return "str[" . $i . "] = " . $str[$i] . "\n";
    }
}

function dayAfterTomorrow(){
    $d=strtotime("+2 days");
    return date("d/m/Y",$d);
}
function findUnique($arr){
    return(array_unique($arr));
}

function formatHash($salary) {
    asort($salary);
    $str_output = '<table border=\"1\" style=\'align-text:center;border-collapse: collapse\'><tr><td><strong>full-names</strong></td><td><strong>annual salaries</strong></td></tr>';
    foreach ($salary as $key => $value) {
        $str_output .= '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
    };
    $str_output.='</table>';
    return $str_output;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>40038821_A3_Exercise1</title>
    <style>
        span {font-family: "Arial Black", Courier, monospace;}
    </style>
</head>
<body>
<h2>40038821_A3_ Exercise1</h2>
<div>
    <h3>A. Function: <span>factorial</span></h3>
    <h4>Parameter(s): Number</h4>
    <p><strong>Input: </strong>6</p>
    <p><strong>Output: </strong>
        <?php
        echo factorial(6);
        ?>
    </p>
    <hr/>

    <h3>B. Function: <span>mostFrequent</span></h3>
    <h4>Parameter(s): String Array</h4>
    <p><strong>Input: </strong>heLlowOrld</p>
    <p><strong>Output: </strong>
        <?php
        echo mostFrequent("heLlowOrld");
        ?>
    </p>
    <hr/>

    <h3>C. Function: <span>uppercaseFirst</span></h3>
    <h4>Parameter(s): String</h4>
    <p><strong>Input: </strong>"i love my son"</p>
    <p><strong>Output: </strong>
        <?php

        echo uppercaseFirst("i love my son");
        ?>
    </p>
    <hr/>

    <h3>D. Function: <span>splitSort</span></h3>
    <h4>Parameter(s): None</h4>
    <p><strong>Input: </strong>"hellomylove"</p>
    <p><strong>Output: </strong>
        <?php
        echo splitSort("hellomylove");
        ?>
    </p>
    <hr/>


    <h3>E. Function: <span>dayAfterTomorrow</span></h3>
    <h4>Parameter(s): None</h4>
    <h4><strong>Output: </strong>
        <?php
        echo dayAfterTomorrow();
        ?>
    </h4>
    <hr/>

    <h3>F. Function: <span>findUnique</span></h3>
    <h4>Parameter(s): Array</h4>
    <p><strong>Input: </strong>["apple","banana","melon","apple","cherry","lemon","cherry"]</p>
    <p><strong>Output: </strong>
        <?php
        var_dump( findUnique(array("apple","banana","melon","apple","cherry","lemon","cherry")));
        ?>
    </p>
    <hr/>

    <h3>G. Function: <span>formatHash</span></h3>
    <h4>Parameter(s): Associative Array</h4>
    <p><strong>Input: </strong>["A"=> "120,000", "B"=> "100,000","C"=>"80,000", "D" => "150,000", "E"=>"200,000"]</p>
    <p><strong>Output: </strong>
        <?php
        echo formatHash(array("A"=> "120000", "B"=> "100000","C"=>"80000", "D" => "150000", "E"=>"200000"));
        ?>
    </p>
    <hr/>
</div>
</body>
</html>