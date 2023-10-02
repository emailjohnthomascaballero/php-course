<?php 
if (isset($_POST["name"])) {
  $name = $_POST["name"];
  echo "Hello, $name";
} else {
  echo "Form not submitted.";
}
?>