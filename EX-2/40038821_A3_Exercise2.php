<html>
<head>
    <style type="text/css" lang="eng">
        p{
            font-family: "Arial";
            font-size: inherit;
            cursor: pointer;
        }
    </style>
</head>
<body>
<p>
<h1>40038821_A3_Execise2</h1>
<h3>1- What is a query string and what purpose does it serve in server-side programming?</h3>
<ul>
    <li>
        A query string is the part of a uniform resource locator (URL) containing data that does not<br>
        fit conveniently into a hierarchical path structure. The query string commonly includes fields<br>
        added to a base URL by a Web browser or other client application<br>
        In this case, it's the part after fist question mark. <br>
        <br>
    </li>
    <li>
        The method attribute of form specifies which technique, get or post, will be used to pass the<br>
        form data to the server. The query string has an assignment statement for each control that<br>
        has a data value, with the name of the control as its left side and its value as its right side.<br>
        These assignment statements are separated by ampersands(&);<br>
    </li>
</ul>
<h3>2- Is a query string characteristic of a GET or POST request method?</h3>
<ul>
    <li>Yes, it is!When the get method is used, the browser attaches the query string to<br>
        the URL of the HTTP request, so the form data is transmitted to the server together with the URL.</li>
</ul>
<h3>3- Which part of the URL is considered the query string?</h3>
    <ul>
        <li>The part after first question (?) mark in URL</li>

    </ul>
<h3>4- How many different data parameters are being passed?</h3>
<ul>
    <li>3(age, name, number)</li>
</ul>
</p>
</body>
</html>
<br>
<br>
<br>
<br>
<?php
/**
 * Created by PhpStorm.
 * User: Derek Xin Sun
 * Date: 2017-08-07
 * Time: 3:09 PM
 */
$url = 'http://www.site.com/index.php?age=22&name=Obi+Wan+Kenobi&number=5435432156';
$getArr = parse_url($url);
//print_r($getArr);
$str_query= $getArr['query'];//get the string followed by ? mark
$getElement = explode('&',$str_query);// decompose it into array element
//print_r($str_query);
//print_r($getElement);

echo "<table border='1px' style='align-text:center;border-collapse: collapse'>";
foreach ($getElement as $value){
    $arr_Element = explode('=',$value);
    //var_dump($arr_Element);
    if(strcmp($arr_Element[1],"")==0){
        $pair[1]="No query string data found";
    }else{
        echo "<tr>
              <td style='padding:10px'>$arr_Element[0]</td>
              <td style='padding:10px'>$arr_Element[1]</td>
               </tr>";
    }
}
echo"</table>";
