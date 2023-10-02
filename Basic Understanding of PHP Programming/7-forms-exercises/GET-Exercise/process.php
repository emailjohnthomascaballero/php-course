<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php

if (isset($_GET["city"])) {
  $city = $_GET["city"];
  echo "Your city: $city";
} else {
  echo "Form not submitted";
}

?>

</body>
</html>