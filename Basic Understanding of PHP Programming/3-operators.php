<!-- - [ ]  **Operators**:
- Be able to use basic operators like arithmetic, comparison, and logical operators in PHP. -->

<?php
// 1. Arithmetic Operators:

// Arithmetic operators are used to perform mathematical calculations.

// Addition (+): Adds two values together.
$sum = 5 + 3;
echo $sum . "<br>";

// Subtraction (-): Subtracts the right operand from the left operand.
$difference = 10 - 5;
echo $difference . "<br>";

// Multiplication (*): Multiplies two values.
$product = 5 * 5;
echo $product . "<br>";

// Division (/): Divides the left operand by the right operand.
$quotient = 100 / 5;
echo $quotient . "<br>";

// Modulus (%): Calculates the remainder of a division.
$remainder = 20 % 6;
echo $remainder . "<br>";

// Increment (++) and Decrement (--): These operators increase or decrease the value of a variable by 1.
$count = 5;
// $count++;
// echo $count;

$count--;
echo $count . "<br>";





// 2. Comparison Operators:
// Comparison operators are used to compare two values and return a boolean result (true or false).

// Equal (==): Checks if two values are equal, regardless of data type.
echo $result = (5 == '5') . "<br>";

// Identical (===): Checks if two values are equal and have the same data type.
echo $result = (5 === '5'); //result 0

// Not Equal (!=) and Not Identical (!==): These operators are the negations of == and ===, respectively.
echo $result = (5 != '5'); //result 0
echo $result = (5 !== '5') . "<br>";

// Greater Than or Less Than (>): Checks if the left or right operand is greater than the right operand.
echo $result = (8 > 3) . "<br>";

// Greater Than or Equal To (>=) and Less Than or Equal To (<=): These operators check if the left operand is greater than or equal to or less than or equal to the right operand, respectively.
echo $result = (8 >= 8) . "<br>";





// 3. Logical Operators:

// Logical operators are used to combine or manipulate boolean values.

// AND (&&): Returns true if both conditions are true.
echo $result = (true && true) . "<br>";

// OR (||): Returns true if at least one of the conditions is true.
echo $result = (true || false) . "<br>";

// NOT (!): Negates a boolean value.
echo $result = !true . "<br>";

// These operators are fundamental for creating conditional statements, loops, and performing calculations in your PHP code. Understanding how to use them effectively is essential for building dynamic and logical programs.





// Arithmetic Operators Exercises:
// 1. Calculate the sum of two numbers, 17 and 8.
echo $result = 17 + 8 . "<br>";

// 2. Find the difference between 45 and 23.
echo $difference = 45 - 23 . "<br>";

// 3. Multiply 6 by 9.
echo $result = 6 * 9 . "<br>";

// 4. Divide 100 by 5.
echo $result = 100 / 5 . "<br>";

// 5. Calculate the remainder when 15 is divided by 4.
echo $result = 15 % 4 . "<br>";





// Comparison Operators Exercises:

// 1. Check if 10 is equal to 20. Print the result.
$result = (10 == 20);
echo "Is 10 equal to 20? " . ($result ? "Yes" : "No") . "<br>";

// 2. Check if 15 is greater than 10. Print the result.
$result = (15 > 10);
echo "Is 15 greater than 10? " . ($result ? "Yes" : "No") . "<br>";

// 3. Check if 5 is less than or equal to 5. Print the result.
$result = (5 <= 5);
echo "Is 5 less than or equal to 5? " . ($result ? "Yes" : "No") . "<br>";

// 4. Check if "apple" is equal to "banana". Print the result.
$result = ("apple" == "banana");
echo "Is apple equal to banana? " . ($result ? "Yes" : "No") . "<br>";






// Logical Operators Exercises:

// 1. Check if both 8 and 12 are even numbers. Print the result.
$num1 = 8;
$num2 = 12;
$result = ($num1 %2==0 ? true : false) && ($num2 %2==0 ? true : false);
echo "Is 8 and 12 are even numbers? " . ($result ? "Yes" : "No") . "<br>";

// 2. Check if 10 is greater than 5 or 3 is less than 2. Print the result.
$result = (10 > 5 || 3 < 2);
echo "Is 10 greater than 5 or 3 is less than 2? " . ($result ? "Yes" : "No") . "<br>";

// 3. Check if either "cat" is equal to "dog" or "bird" is equal to "bird". Print the result.
$result = "cat" == "dog" || "bird" == "bird";
echo "Is cat equal to dog or bird is equal to bird? " . ($result ? "Yes" : "No");

?>