<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>phplessons</title>
</head>
<body>
<h3>Hey sis, what's your name?</h3>
<form method="GET"> 
<input type="text" name="person">
<button>SUBMIT</button>
</form>
<br>
  <?php
  $name = $_GET['person'];
echo $name." is a pretty lady.";
  ?>
</body>
</html>



<!-- comaprison operators. == equal to, <> or != not equal to. <?php

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

<!-- arithmetic and modular operators <?php

$a=14;
$a++;
echo $a;

?> -->

<!-- string concatenation <?php

$string = "indeed";
$string .= ".com";
echo $string

?> -->