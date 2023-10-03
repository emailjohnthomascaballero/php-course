<!-- File Reading Exercise:

Create a text file named "sample.txt" and write a few lines of text in it. Use PHP to open and read the contents of this file and then display the content on a webpage. -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Handling</title>
</head>
<body>
  
<?php 

$file = fopen("sample.txt", "r");

if ($file) {
  $content = ''; // Initialize an empty variable to store the file content

  while (($line = fgets($file)) !== false) {
    $content .= $line; // Append each line to the content variable
  }
  fclose($file);
  echo $content;

} else {
  echo "Unable to open the file.";
}

?>


</body>
</html>