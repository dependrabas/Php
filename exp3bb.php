<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>

<h2>Student Information</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $student_name = $_GET['student_name'];
    $subject1 = $_GET['subject1'];
    $subject2 = $_GET['subject2'];
    $subject3 = $_GET['subject3'];

    $total_marks = $subject1 + $subject2 + $subject3;
    $average_marks = $total_marks / 3;

    echo "Student Name: $student_name <br>";
    echo "Subject 1 Marks: $subject1 <br>";
    echo "Subject 2 Marks: $subject2 <br>";
    echo "Subject 3 Marks: $subject3 <br>";
    echo "Total Marks: $total_marks <br>";
    echo "Average Marks: $average_marks <br>";
}
?>

</body>
</html>
