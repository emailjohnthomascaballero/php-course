<!-- Functions: -->
<!-- Understand how to define and call functions in PHP.
Know the concepts of function parameters and return values. -->

<?php 

// Defining Functions:

// To define a function in PHP, use the function keyword, followed by the function name and a pair of parentheses. The function may also have parameters that it accepts as input. Here's the basic syntax:
function functionName(){
  echo "function called" . "<br>";
}

functionName();

// parameters: This is an optional list of parameters the function accepts. Parameters are variables that hold values passed to the function.
// Here's an example of a simple function:
function greet($name){
  echo "your name: $name <br>";
}

greet("John"); // Calls the greet function with the name "John"




// Return Values:

// Functions can also return values using the return statement. This allows you to capture the result of a function call and use it elsewhere in your code.

// Here's an example of a function that returns the sum of two numbers:
function add($num1, $num2) {
  return $num1 + $num2;
}

echo add(5, 1) . "<br>";




// Built-in Functions:

// PHP also comes with many built-in functions that perform common tasks, such as string manipulation, date/time operations, and database interactions. You can use these functions in your code without defining them yourself.

// For example, the strlen() function calculates the length of a string:
$text = "Hello, World!";
echo "text length: " . strlen($text);



// Function parameters and return values are crucial for creating modular and reusable code. Functions can accept data through parameters, process it, and then provide a result through return values. These concepts help make your code more organized, maintainable, and efficient.
?>