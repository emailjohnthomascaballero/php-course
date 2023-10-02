<!-- HTML Form and $_POST Exercises:

1. Create an HTML form with a text input field for a user's name and a submit button. Create a PHP script to display a welcome message using the $_POST superglobal when the form is submitted.

2. Extend the form from the previous exercise to include additional fields for the user's age and favorite color. Modify the PHP script to display a message that includes the user's age and favorite color. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
</head>
<body>

<form action="process.php" method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
  <br>
  <label for="age">Age:</label>
  <input type="number" name="age" id="age">
  <br>
  <label for="color">Color:</label>
  <input type="text" name="color" id="color">
  <br>
  <input type="submit" value="Submit">
</form>

</body>
</html>


<!-- These exercises help you practice processing data from HTML forms using PHP and accessing form data through the $_POST and $_GET superglobal arrays. They cover basic form creation and data retrieval. -->