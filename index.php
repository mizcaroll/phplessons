<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>phplessons</title>
</head>
<body>
<?php

?>
</body>
</html>

<!-- <?php ?> -->


<!-- <?php
//Arrays
$names=array("Mbithe","Tata","Papa");
echo $names['0'];
?> -->

<!--this code replaces the name Caroline in Hi Caroline with Jackie <?php
echo str_replace("Caroline","Jackie","Hi Caroline");
?> -->

<!-- <h3>Hey sis, what's your name?</h3>
<form method="GET"> 
<input type="text" name="person">
<button>SUBMIT</button>
</form>
<br>
this code gets a name from the form's input variable and diaplays it
<?php
  $name = $_GET['person'];
echo $name." is a pretty lady.";
  ?>  -->

<!-- comaprison operators. == equal to, <> or != not equal to, === equal to and have the same datatype, !== not the same value and same datatype. <?php

$num = 10;
$num1 = 41;
if ($num == $num1) {
echo "The condition is true";
}
else {
  echo "The condition is idk";
}
?> -->

<!-- elseif statement. Allows us to add multiple outcomes <?php

$num = 6;

if ($num>6) {
echo "the condition is true";
}
elseif ($num>=6) {
echo "the elseif was executed";
}
else {
  echo "the condition is false";
}
?> -->

<!-- if else statement <?php
$num = 6;

if ($num>6) {
echo "the condition is true";
}
else {
  echo "the condition is false";
}
?> -->

<!-- operator precedence. BODMAS applies <?php

$num = (10+5) * 4;
echo $num;

?> -->

<!-- arithmetic and modular operators. e.g 5**5 is 5 to the power of 5<?php

$a=14;
$a++;
echo $a;

?> -->

<!-- string concatenation <?php

$string = "indeed";
$string .= ".com";
echo $string

?> -->