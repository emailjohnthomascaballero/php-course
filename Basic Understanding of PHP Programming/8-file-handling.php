<!-- File handling in PHP is a fundamental skill that allows you to read and write files, making your scripts more powerful and versatile. Here's how to get started with file handling in PHP: -->

<?php

// Reading Files:

// To read the contents of a file, you'll typically follow these steps:

// 1. Open the File: Use the fopen() function to open the file. This function takes two arguments: the filename and the mode ("r" for reading).

// $file = fopen("8-example.txt", "r");





// 2. Read the File: Use functions like fgets(), fread(), or file() to read the content. For example, using fgets():
// $content = fgets($file);






// 3. Close the File: Don't forget to close the file using fclose().
// $fclose($file);





// Example of Reading and Writing a File:

// Here's an example that reads the contents of a file named "8-example.txt" and writes the content to another file named "output.txt":

// Open the input file for reading
$inputFile = fopen("8-example.txt", "r");

// Open the output file for writing (creates it if it doesn't exist)
$outputFile = fopen("8-output.txt", "w");

// Read and write line by line
while ($line = fgets($inputFile)) {
  fwrite($outputFile, $line);
}

// Close both files
fclose($inputFile);
fclose($outputFile);



?>


<!-- Make sure to handle errors and exceptions when working with files, and always close the file when you're done to free up system resources.

File handling is a crucial part of many PHP applications, from reading and writing configuration files to processing large datasets. It's essential to understand how to perform these operations securely and efficiently. -->