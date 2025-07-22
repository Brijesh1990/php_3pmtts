<?php 
$file=fopen("javascript.txt","w+") or die("Unable to open file!");
fwrite($file, "Hello, World!\nThis is a test file.\n");
fclose($file);
echo "File written successfully.";

// This code opens a file named "javascript.txt" in write mode (`w+`), writes two lines of text to it, and then closes the file. If the file cannot be opened, it will terminate with an error message.

// The `fwrite` function is used to write data to the file, and it returns the number of bytes written. If the file does not exist, it will be created. If it exists, its content will be truncated before writing.


// Note: Make sure you have the necessary permissions to write to the file in the specified directory.

// You can modify the file name and content as needed.

// This code demonstrates basic file handling in PHP, specifically writing to a file using the `fwrite` function.



?>