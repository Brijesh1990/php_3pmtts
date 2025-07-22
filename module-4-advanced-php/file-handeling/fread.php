<?php 
$file= fopen("example.txt", "r+"); // Open a file for reading and writing
//$result=fread($file, filesize("example.txt")); // Read the entire file
// if ($result === false) {
//     echo "Error reading file.";
// } else {
//     echo "File content: <br>";
//     echo nl2br($result); // Display the content with line breaks
// }


$result=fread($file, 4); // Read the first 100 bytes of the file
if ($result === false) {
    echo "Error reading file.";
} else {
    echo "File content: <br>";
    echo nl2br($result); // Display the content with line breaks
}
?>