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
if (isset($_POST["name"])) {
  $name = $_POST["name"];
  $age = $_POST["age"];
  $color = $_POST["color"];

  echo "Hello, $name, your age: $age and your favorite color: $color";
} else {
  echo "Form not submitted.";
}
?>

</body>
</html>