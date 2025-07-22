<?php
// append a file
$file = fopen("example.txt", "a+"); // Open the file in append mode
if ($file) {
    // Write a new line to the file
    fwrite($file, "This is a new line added to the file.\n");
    echo "New line added successfully.<br>";
} else {
    echo "Failed to open file.<br>";
}
?>