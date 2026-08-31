<?php
$students = [
[
    "name" => "Rahul",
    "marks" => [78, 85, 92]
],
[
    "name" => "Priya",
    "marks" => [65, 72, 80]
],
[
    "name" => "Amit",
    "marks" => [90, 88, 95]
],
[
    "name" => "Neha",
    "marks" => [45, 55, 60]
],
[
    "name" => "Ravi",
    "marks" => [30, 40, 35]
]
];

$pass=0;
$fail=0;
$highest_avg=[];
$passed_students=[];
$student_counter=0;

foreach($students as $student){
    $total_marks=0;
    $avg_marks=0;
    $student_counter++;
    $count=count($student['marks']);

    foreach($student['marks'] as $mark){
        $total_marks+=$mark;                   
        $avg_marks=$total_marks/$count;
    }

    $highest_avg[]=[
        "Name" => $student['name'],
        "Avg Marks" => $avg_marks
    ];

    // 1. Total marks
    // echo $student['name'] . " : " . $total_marks . "<br>";

    // 2. Average marks and 3. To round avg upto 2 decimal digit
    // echo $student['name'] . " : " . round($avg_marks, 2) . "<br>";

    // 4. if average is 60 or above → Pass, otherwise → Fail.
    if($avg_marks>=60){
        // echo $student['name'] . " : " . "Pass"  . "<br>";
        $passed_students[]=$student['name'];                // 9. Array of passsed students
        $pass++;
    }
    else{
        // echo $student['name'] . " : " . "Fail"  . "<br>";
        $fail++;
    }

    // 5. Student Name to upper case
    // echo strtoupper($student['name'])  . "<br>";
    // echo "<br><br>";
}

// 6. Toal no of pass and fail
// echo "Students passed : " . $pass . "<br>";
// echo "Students failed : " . $fail;

// 7. Find student with highest average  8. Find student with lowest average
$highest = max(array_column($highest_avg, 'Avg Marks'));
$lowest = min(array_column($highest_avg, 'Avg Marks'));
// echo $highest . "<br>";
// echo $lowest;

foreach($highest_avg as $student){
    if($student['Avg Marks'] == $highest){
        // echo "Highest Average : " . $student['Name'] . " - " . round($student['Avg Marks'], 2) . "<br>";
    }
    if($student['Avg Marks'] == $lowest){
        // echo "Lowest Average : " . $student['Name'] . " - " . round($student['Avg Marks'], 2);
    }
}

// 9. Print Array of passsed students
// echo "<pre>";
// print_r($passed_students);

// 10. in_array() to check whether a particular student name exists.
// foreach($passed_students as $stu){
//     if(in_array("Ravi", $passed_students)){
//         echo "Match Found !!";
//         break;  
//     }
//     else{
//         echo "Match Not Found";
//         break;
//     }
// };

// 11. Number of students
// echo "Number of students : " . count($students) . "<br>";
// echo "Number of subjects/marks : " . $count . "<br>";
// echo "Number of passed students : " . count($passed_students) . "<br>";

// $str= " Hello World ";
// echo strlen($str) . "<br>";
// echo trim($str) . "<br>";
// echo strrev($str) . "<br>";
// echo str_starts_with($str, "He") . "<br>";

?>