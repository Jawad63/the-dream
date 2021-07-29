<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>The Dream</title>
</head>
   <body>
      <h1>Currency Converter in PHP Using form</h1>
         <div class="box">
            <form action="index.php" method="get">
            Enter Currency : <input type="text" name="input" />
            Select Currency :
               <select name="Dropdown">
                  <option value="USD">USD</option>
                  <option value="GBP">GBP</option>
                  <option value="ZAR">ZAR</option>
               </select>

               <input type="submit" name="submit" value="Convert" />

            </form>
         </div>
   </body>
</html>


<?php

if(isset($_GET['submit']))
{
    $cc_input = $_GET['input'];
    $cc_dropdown = $_GET["Dropdown"];

     if($cc_dropdown == "USD") {
            $output = $cc_input / 1.1810;
            echo $output . " Dollars";
        }
     else if($cc_dropdown == "GBP") {
            $output = $cc_input / 0.85;
            echo $output . " Pounds";

     }  else if($cc_dropdown == "ZAR") {
         $output = $cc_input / 17.4;
         echo $output . " Rands";
     }
     else {
         echo "FAIL";
     }
}

?>