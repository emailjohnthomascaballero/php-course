<!-- Essential PHP Concepts to Master Before Learning Laravel -->

<?php
// php hello world
echo "Hello World<br>";

// Variables

// Step 1: Variable Declaration
// To create a variable in PHP, you need to choose a name and use the $ symbol followed by the name. Variable names in PHP are case-sensitive and must start with a letter or an underscore. They can contain letters, numbers, and underscores.
// $variableName

// Step 2: Assigning Values
// After declaring a variable, you can assign a value to it using the assignment operator (=). The value can be a number, a string, or any other data type.
$number = 10;
$string = "Hello, World!";

// Step 3: Variable Types

// PHP supports various data types for variables. The most common ones include:

// Integers (whole numbers)
// Floating-Point Numbers (numbers with decimal points)
// Strings (sequences of characters)
// Booleans (true or false values)
$integerVar = 5;
$floatVar = 5.9;
$stringVar = "John";
$boolVar = true;

// Step 4: Outputting Variables

// You can display the value of a variable using the echo or print statement. For example:
$variable = "Hello, World!<br>";
echo $variable;

// Step 5: Variable Interpolation

// In PHP, you can directly include variables inside double-quoted strings to interpolate their values. This is a convenient way to display variable values within strings.
$name = "John";
echo "Hello $name<br>";

// Exercise 1: Simple Math Operations

// Create two integer variables, $a and $b, and assign them values. Perform basic math operations (addition, subtraction, multiplication, division, and modulus) using these variables and display the results.
$a = 1;
$b = 2;
echo $a + $b . "<br>";
echo $b - $a . "<br>";
echo $a * $b . "<br>";
echo $b % $a . "<br>";

// Exercise 2: Concatenation

// Create two string variables, $firstName and $lastName, and assign them your first and last name. Concatenate these variables to form your full name and display it.
$firstName = "John";
$lastName = "Caballero";

echo $firstName . " " . $lastName . "<br>";

// Exercise 3: Boolean Logic

// Create two boolean variables, $isStudent and $isEmployed, and assign them values. Use these variables to create a message that describes your current status.
$isStudent = true;
$isEmployed = false;
echo "John currently student? " . $isStudent . "<br>";

// Exercise 4: Variable Interpolation

// Create a variable, $age, and assign your age to it. Use variable interpolation to display a message that includes your age within a sentence.
$age = 20;
echo "I am $age years old";


// Practice these exercises to solidify your understanding of PHP variables. Variables are the foundation of programming, and mastering them is essential as you move on to more complex PHP concepts.
?>