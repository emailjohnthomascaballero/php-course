<?php

// The isset() function in PHP is used to check whether a variable or an array element exists and whether it has a value (i.e., it's not null). In the context of your code, isset($_POST["name"]) is used to check if a form field named "name" has been submitted and whether it contains a value when a form is submitted using the POST method.

if (isset($_POST["name"])) {
  $name = $_POST["name"];
  echo "Hello, $name!";
} else {
  echo "Form not submitted.";
}

// THIS IS ANOTHER METHOD:
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Check if the form was submitted using POST

//     // Retrieve the data from the form
//     $name = $_POST["name"];

//     // Store the data or do something with it
//     // For this example, we'll just display it
//     echo "Hello, $name!";
// } else {
//     // If the form was not submitted via POST, you can display an error message or redirect as needed.
//     echo "Form not submitted.";
// }
?>



<!-- In this script, we check if the form was submitted using the POST method. If it was, we retrieve the "name" field's value using $_POST["name"] and, in this example, we simply echo a greeting with the submitted name. You can replace this part with your desired data storage or processing logic.

Save the "process.php" script in the same directory as your HTML form.

When you fill out the form and click the "Submit" button, the data will be sent to "process.php," processed, and a response will be displayed.

To view the form, open the "form.html" file in a web browser, fill out the name field, and submit the form. You should see a response on the "process.php" page.

Please note that this is a very basic example, and in a real-world scenario, you might want to store the data in a database, perform more extensive validation and sanitation, and handle errors more gracefully. -->




<!-- This code checks if the "name" field is set in the $_POST array and, if so, displays a greeting.

Remember to validate and sanitize user input to prevent security issues like SQL injection or cross-site scripting (XSS) attacks.

Understanding how to work with HTML forms and process user input in PHP is crucial for building interactive and dynamic web applications. It enables you to create interactive web pages and gather user data for various purposes. -->