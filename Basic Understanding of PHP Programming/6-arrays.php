<!-- Arrays:
Learn about arrays in PHP, both indexed and associative arrays, and how to manipulate array data. -->

<?php 

// Indexed Arrays:

// Indexed arrays use numeric indexes to access elements. The first element is at index 0, the second at 1, and so on. Here's how you create and manipulate indexed arrays:




// 1. Creating an Indexed Array:
// You can create an indexed array using the array() construct or the shorthand []:
$colors = array("black", "blue", "green");

$fruits = ["banana", "watermelon", "apple"];



// 2. Accessing Elements:
// You can access elements by their index:
echo $colors[0] . "<br>";



// 3. Accessing Elements:
// You can access elements by their index:
$colors[1] = "yellow"; // Modifies the second element
$colors[] = "purple"; // Adds a new element at the end



// 4. Counting Elements:
// Use the count() function to get the number of elements in an indexed array:
echo count($colors) . "<br>";





// Associative Arrays:

// Associative arrays use named keys (strings) to access elements. Each element is associated with a unique key. Here's how you create and manipulate associative arrays:



// 1. Creating an Associative Array:
// Create an associative array by specifying key-value pairs:
$person = ["first_name" => "John", "last_name" => "Caballero"];



// 2. Accessing Elements:
// Access elements by their keys:
echo $person["last_name"] . "<br>";



// 3. Adding and Modifying Elements:
// You can add or modify elements in an associative array:
$person["age"] = 20; // Adds a new key-value pair
$person["last_name"] = "Smith"; // Modifies an existing value

echo count($person) . "<br><br>";




// Arrays are incredibly versatile and can be used for a wide range of tasks, from storing lists of items to building more complex data structures. They are fundamental to many programming tasks and play a crucial role in data manipulation and storage in PHP.





// Indexed Arrays Exercises:

// 1. Create an indexed array named $numbers with values 1, 2, 3, 4, and 5. Use a loop to display each value on a new line.
$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $number) {
  echo $number . "<br>";
}



// Create an indexed array with the names of three of your favorite fruits. Use a loop to display each fruit's name.
$fruits = ["apple", "banana", "cherry"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}





// Associative Arrays Exercises:

// 1. Create an associative array named $student with keys "first_name" and "last_name" and set them to your first and last name. Display the student's full name.
$student = ["first_name" => "John", "last_name" => "Caballero"];

$fullname = $student["first_name"] . " " . $student["last_name"];
echo $fullname . "<br>";




// 2. Create an associative array named $book with keys "title" and "author" and set them to the title and author of your favorite book. Display the book's details.
$book = ["title" => "The Joy of PHP ", "author" => "Alan Forbes"];

echo "Book title: " . $book["title"] . "<br>";
echo "Book Author" . $book["author"];




// These exercises will help you practice working with both indexed and associative arrays in PHP. They cover creating arrays, accessing elements, and using loops to display array data.

?>