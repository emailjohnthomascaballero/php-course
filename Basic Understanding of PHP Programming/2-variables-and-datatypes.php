<!-- Variables and Data Types: -->
<!-- Know how to declare and use variables in PHP. -->

<?php

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
echo "I am $age years old <br>";


// Practice these exercises to solidify your understanding of PHP variables. Variables are the foundation of programming, and mastering them is essential as you move on to more complex PHP concepts.



// 1. Array: Represents a collection of values.
$fruits = array("banana", "avocado", "watermelon");

// Object: Represents instances of user-defined classes.
class Person
{
  public $name; //property
}

$person = new Person(); //object (an instance) of the "Person" class and store it in the variable 
echo $person->name = "Bob" . "<br>"; //you can access object properties using the -> operator.
echo $person->name = "John" . "<br>"; //also immediately displays the value "Bob" using echo.


class PersonOne{
  public $name;
  public function sayHello(){
    echo "Hello, my name is " . $this->name;
  }
}

$personOne = new PersonOne();
echo $personOne->name = "Lee" . "<br>";
$personOne->sayHello(); //calling a function inside the object


// NULL: Represents a variable with no value.
$noValue = null;
// Database Values:
// In database interactions, NULL is used to represent missing or unknown data. When you query a database and a field has no value, it's often returned as NULL.

// Type Casting:
// You can convert data from one type to another, a process known as type casting or type conversion. For example:
$numberAsString = "69";
$number = (int) $numberAsString;

// Type Checking:
// You can check the data type of a variable using functions like is_int(), is_float(), is_string(), and is_bool().
if(is_int($number)){
  echo "the variable is integer";
}

// Understanding variables and data types is fundamental to programming in PHP. These concepts enable you to store and manipulate different kinds of information in your PHP scripts, making your code dynamic and flexible.

// These data types are essential for working with different types of information in your PHP programs. You can use these data types to store, manipulate, and display data in a variety of ways to make your PHP applications dynamic and versatile.
?>