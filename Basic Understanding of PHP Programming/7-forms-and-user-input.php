<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
</head>
<body>

<!-- Forms and User Input:
Grasp the basics of processing data from HTML forms using PHP.
Learn how to access form data through the $_POST and $_GET superglobal arrays. -->

<!-- Forms and user input are fundamental aspects of web development, and PHP provides tools to process data submitted through HTML forms. You can access this data using the $_POST and $_GET superglobal arrays, depending on the HTTP method used in the form. Here's a basic overview:

  HTML Forms:
  
  HTML forms are used to collect user input and send it to the server for processing. They can include various input elements like text fields, radio buttons, checkboxes, and more. Here's a simple example of an HTML form: -->

<form action="7-forms.php" method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
  <input type="submit" value="Submit">
</form>

<!-- In this form, the action attribute specifies the URL to which the form data will be sent, and the method attribute specifies the HTTP method to use (e.g., post or get). -->



<?php 

// $_POST Superglobal:

// When the post method is used in the form, you can access the submitted data in PHP through the $_POST superglobal array. Here's how you can access the "name" field from the form:
// $name = $_POST["name"];

// You can process the data and perform actions in your PHP script based on the submitted form values.

// $_GET Superglobal:

// When the get method is used in the form, you can access the submitted data using the $_GET superglobal array. For example:
// $name = $_GET["name"];

// t's important to note that using the get method appends the form data to the URL, making it visible in the address bar. This is suitable for simple data retrieval but not recommended for sensitive information like passwords.

// In summary, GET is often used for retrieving data from the server, and it is suitable for requests that do not modify server data. It is typically used for search queries and navigating web pages. POST, on the other hand, is used for sending data to the server for actions that may modify server data. It is commonly used for form submissions, login requests, and other operations that involve data updates on the server. The choice between GET and POST depends on the specific requirements of your web application and the type of data you need to send.

?>

  
</body>
</html>


