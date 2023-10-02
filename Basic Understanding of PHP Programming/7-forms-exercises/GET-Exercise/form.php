<!-- HTML Form and $_GET Exercise:

Create another HTML form with a text input field for a user's city and a submit button. Create a PHP script to display a message using the $_GET superglobal when the form is submitted. Make sure to use the get method in the form. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>

<form action="process.php" method="get">
  <label for="city">City:</label>
  <input type="text" name="city" id="city">
  <input type="submit" value="Submit">
</form>

</body>
</html>

<!-- These exercises help you practice processing data from HTML forms using PHP and accessing form data through the $_POST and $_GET superglobal arrays. They cover basic form creation and data retrieval. -->