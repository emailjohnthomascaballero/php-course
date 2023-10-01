<!-- Control Structures:
Learn how to use control structures, such as if, else, while, for, and switch, for making decisions and creating loops in your code. -->

<?php
// 1. if and else Statements:
// The if statement is used to execute a block of code if a condition is true. You can also use an else statement to specify code that should run when the condition is false.
$age = 17;
if ($age >= 18) {
  echo "you are an adult." . "<br>";
} else {
  echo "you are an minor." . "<br>";
}


// 2. while Loop:

//   The while loop executes a block of code repeatedly as long as a specified condition is true.
$count = 1;
while ($count <= 5) {
  echo $count . "<br>";
  $count++;
}


// 3. for Loop:

//   The for loop is used to execute a block of code a specific number of times. It includes an initialization, a condition, and an increment/decrement statement.
for ($i = 1; $i <= 5; $i++) {
  echo "Iteration $i <br>";
}


// 4. foreach Loop:

//   The foreach loop is designed for iterating over arrays and objects. It simplifies looping through the elements of an array.
$fruits = array("banana", "avocado", "watermelon");

foreach ($fruits as $fruit) {
  echo "$fruit <br>";
}


// 5. switch Statement:

//   The switch statement is used for multiple conditional tests. It can be a more concise way to handle multiple conditions compared to using a series of if statements.
$day = "Friday";

switch ($day) {
  case "Monday":
    echo "It`s the start of the week." . "<br>";
    break;
  case 'Friday':
    echo "It`s almost weekend." . "<br>";
    break;
  default:
    echo "It`s a regular day." . "<br>";
}





// If and Else Exercises:

// Write a PHP script that checks if a number is even or odd and displays an appropriate message.
$num = 9;
if ($num % 2 == 0) {
  echo "number is even. <br>";
} else {
  echo "number is odd. <br>";
}

// Create a PHP program that checks if a user's age is greater than or equal to 18 and displays a message whether the user can vote or not.
$age = 17;
if ($age >= 18) {
  echo "access granted to vote. <br>";
} else {
  echo "access denied to vote. <br>";
}




// While and For Loop Exercises:

// Write a PHP program to display numbers from 1 to 10 using a while loop.
$count = 1;
while ($count <= 10) {
  echo "count to: $count <br>";
  $count++;
}

// Create a PHP script that prints the first 5 multiples of 3 using a for loop.
for ($i = 1; $i <= 3; $i++) {
  echo $i * 3 . "<br>";
}

echo "<br>";

for ($i = 3; $i <= 15; $i+=3) {
  echo "$i<br>";
}

// Switch Statement Exercises:

// Write a PHP program that takes a day of the week as input and uses a switch statement to display a message based on the input (e.g., "It's a workday" for Monday to Friday and "It's the weekend" for Saturday and Sunday).
$day = "Saturday";

switch($day){
  case 'Saturday':
  case 'Sunday':
    echo "It's the weekend";
    break;
  default:
    echo "It's a workday";
}



// Control structures are crucial for controlling the flow of your code, making decisions, and creating loops to perform repetitive tasks. They enable you to build more complex and dynamic programs. Practice using these control structures to become comfortable with them.
?>