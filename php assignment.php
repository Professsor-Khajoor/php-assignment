<?php

$students = array(
    array('English' => 90, 'Maths' => 80, 'Science' => 70),
    array('English' => 85, 'Maths' => 75, 'Science' => 65),
    array('English' => 95, 'Maths' => 90, 'Science' => 80)
    // Add more students' marks here
);

$numberOfStudents = count($students);

for ($i = 0; $i < $numberOfStudents; $i++) {
    $studentMarks = $students[$i];
    $totalMarks = $studentMarks['English'] + $studentMarks['Maths'] + $studentMarks['Science'];

    echo "Marks for student " . ($i + 1) . " are: " . $totalMarks . "\n"; 
}

$englishTotal = 0;
$mathsTotal = 0;
$scienceTotal = 0;

foreach ($students as $student) {
    $englishTotal += $student['English'];
    $mathsTotal += $student['Maths'];
    $scienceTotal += $student['Science'];
}

$englishAverage = $englishTotal / $numberOfStudents;
$mathsAverage = $mathsTotal / $numberOfStudents;
$scienceAverage = $scienceTotal / $numberOfStudents;

echo "\n";
echo "Average English marks for the whole class: " . $englishAverage . "\n";
echo "Average Maths marks for the whole class: " . $mathsAverage . "\n";
echo "Average Science marks for the whole class: " . $scienceAverage . "\n";

