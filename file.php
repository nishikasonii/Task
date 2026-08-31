<?php

// 1. create a new text file named hello.txt.
// $file=fopen("hello.txt", "w");

// if($file){
//     echo "File Created Successfully!!";
//     fclose($file);
// }
// else{
//     echo "Failed to open file";
// }



// 2. Create a file named students.txt and write "Welcome to PHP File Handling" into it.
// $file2=fopen("students.txt", "w");

// if($file2){
//     $text="Welcome to PHP File Handling";
//     fwrite($file2, $text);
//     fclose($file2);
// }
// else{
//     echo "File Not Created";
// }



// 3. Open an existing file data.txt in read mode and display its contents.
// $file3=fopen("data.txt", "r");

// if($file3){
//     echo "File Opened Successfully!!" . "<br><br>";
//     // echo readfile("data.txt");                           
//     echo fread($file3, filesize("data.txt"));              
//     fclose($file3);
// }
// else{
//     echo "File Not Exist";
// }



// 4. Write a PHP program to check whether data.txt exists or not before opening it.
// $file4=file_exists("data.txt");

// if($file4){
//     echo "File Exists!!";
// }
// else{
//     echo "File Not Exists";
// }



// 5. Create a file test.txt, open it, and then close the file using fclose().
$file5=fopen("test.txt", "w");

if($file5){
    echo "File Opened Successfully!!" . "<br><br>";
    fclose($file5);
    echo "File Closed";
}
else{
    echo "File Not Exists";
}
?> 