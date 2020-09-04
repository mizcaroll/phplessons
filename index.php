<?php
include "header.php";
?>
<section>
  <div class="Main">
  <h1>Hi there</h1>
  </div>
</section>


</body>
</html>

<!-- <?php?> -->

<!-- creating your own functions. In this lesson, i called one function (newCalc) twice using separate variables in each instance <?php
$x = 120;

function newCalc($x) {
$newnum = $x * 0.75;
echo "Here is 75% of your value: ".$newnum;
}
newCalc($x);
echo "<br>";
$a = 30;
newCalc($a);
?> -->

<!-- foreach loop is used with arrays. It refers to an array and loops through it. <?php
$array = array("Mbithe","Tata","Papa","Vitus","Ndunge");
foreach ($array as $loopdata) {
echo "My name is ".$loopdata."<br>";
}
?> -->

<!-- we use a for loop when we know exactly how many times we're going to loop beforehand. e.g we can start $x at 0 or even 5 if we wanted.<?php
for ($x=0; $x<=10; $x++) {
  echo "hi<br>";
  }
  ?> -->

<!-- In do while loop, the statement must be executed AT LEAST ONCE before the condition is tested to be true or false.<?php
$x=1;
do {
  echo "hi there<br>";
  $x++;
}
while ($x <= 5); 
?> -->

<!-- while loop <?php
$x=1;
while ($x < 5) {
  echo "hi there<br>";
  $x++;
}
?> -->

<!-- this code prints out what day of the week it is using system defined function w. <?php
$dayofweek = date("w");

switch ($dayofweek) {
case 1:
  echo "It is Monday";
break;
case 2:
  echo "It is Tuesday";
break;
case 3:
  echo "It is Wednesday";
break;
case 4:
  echo "It is Thursday";
break;
case 5:
  echo "It is Friday";
break;
case 6:
  echo "It is Saturday";
break;
case 0:
  echo "It is Sunday";
break;
}
?> -->

<!-- php exercise. Building a calculator
<form>
<input type="text" name="num1" placeholder="Number 1">
<input type="text" name="num2" placeholder="Number 2">
<select name="operator">
<option>None</option>
<option>Add</option>
<option>Subtract</option>
<option>Multiply</option>
<option>Divide</option>
</select>
<br>
<button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is</p>
<?php
if (isset($_GET['submit'])) {
  $result1 = $_GET['num1'];
  $result2 = $_GET['num2'];
  $operator = $_GET['operator'];
  switch ($operator) {
case "None": 
  echo "ERROR - You need to select a method";
break;
case "Add": 
  echo $result1 + $result2;
break;
case "Subtract": 
  echo $result1 - $result2;
break;
case "Multiply": 
  echo $result1 * $result2;
break;
case "Divide": 
  echo $result1 / $result2;
break;
  }
}
?> -->

<!-- <?php
//switch statement. All different possible answers are written inside the curly brackets.
//useful if you just need to check for answers and not conditions
$x = 8;
switch ($x) {
case 1:
  echo "The answer is 1";
break;
case "number":
  echo "The answer is number";
break;
case 3:
  echo "The answer is 3";
break;
case 4:
  echo "The answer is 4";
break;
default:
echo "There is no answer";
}
?> -->

<!-- another if statement lesson <?php
$x=1;
if ($x==1) {
  echo "Carol is very determined to learn php.";
}
elseif ($x==2) {
  echo "Carol is kinda determined.";
}
else {
  echo "Carol is lazy.";  
}
?> -->

<!-- <?php
//logical operators. || is OR operator. && is AND operator. 
// xor operator means only one of the conditions has to be true. Not both.
$x=10;
$y=20;
if ($x==$y or 1==1) {
  echo "True";
}
?> -->

<!-- <?php
//increment and decrement operators
// ++ before $x means you'll add 1, then echo out variable x.
$x=10;
echo ++$x;
?> -->

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