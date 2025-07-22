<?php 
$file="example.txt"; // Specify the file to be deleted
if (file_exists($file)) {
    if (unlink($file)) { // Attempt to delete the file
        echo "File '$file' deleted successfully.";
    } else {
        echo "Error deleting file '$file'.";
    }
} else {
    echo "File '$file' does not exist.";
}
