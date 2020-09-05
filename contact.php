<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>contact</title>
</head>
<body>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>
<?php
if (!isset($_SESSION['username'])) {
  echo " You aren't logged in!";
  } 
  else {
    echo "logged in as ".$_SESSION['username'];
  }
?>
</body>
</html>