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
// function greet($name){
//   echo "your name: $name <br>";
// }

// greet("John"); // Calls the greet function with the name "John"




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
echo "text length: " . strlen($text) . "<br>";



// Function parameters and return values are crucial for creating modular and reusable code. Functions can accept data through parameters, process it, and then provide a result through return values. These concepts help make your code more organized, maintainable, and efficient.




// Defining and Calling Functions Exercises:
// 1. Create a PHP function called greet that takes a name as a parameter and displays a greeting message. Call this function to greet three different people.

function greet($name) {
  echo "Hello: $name <br>";
}

greet("John");
greet("Lee");
greet("Dar");



// 2. Define a function calculateArea that takes the length and width of a rectangle as parameters and returns its area. Call this function with different values and display the results.
function calculateArea($length, $width) {
  return $length * $width;
}

echo calculateArea(4, 3) . "<br>";






// Function Parameters and Return Values Exercises:

// 1. Create a function isEven that takes an integer as a parameter and returns true if it's even and false if it's odd. Call this function to check if numbers 3, 8, and 12 are even.
function isEven($int){
  return $int % 2 == 0;
}

echo isEven(4) . "<br>";





// Write a function isAdult that takes a person's age as a parameter and returns true if they are 18 or older, and false if they are not. Call this function to determine the adult status of a person aged 15, 21, and 17.
function isAdult($age) {
  if ($age >= 18) {
    return true;
  } else {
    return false;
  }
}

echo isAdult(18);




// These exercises help you practice defining functions, using function parameters, and working with return values in PHP. They are designed to reinforce your understanding of how functions work.


?>