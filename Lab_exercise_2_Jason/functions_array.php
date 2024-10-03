<?php
include 'Student.php';
global $student1, $student2, $student3, $student4, $student5;

$Students = [$student1, $student2, $student3, $student4, $student5];

function greet($name) {
    return "Hello, $name";
}

foreach ($Students as $student) {
    echo greet($student -> name);
}
