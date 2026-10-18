<?php
$str = "This";
echo $str;
$lenn = strlen($str);
echo "<br>The length of the string is: " . $lenn . " . Thank you <br>";
echo "<br>The number of characters in the string is: " . str_word_count($str) . ". Thank you <br>";
echo "<br>The reverse of the string is : " . strrev($str) . ". Thank you <br>";
echo "<br>The search for is in this of the string is : " . strpos($str, "is") . ". Thank you <br>";
echo "<br>The replace string is : " . str_replace("is", "at", $str) . ". Thank you <br>";
// echo $lenn;
?>