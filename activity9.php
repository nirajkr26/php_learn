<?php
$students = [
    [
        "ID" => 101,
        "Name" => "Alice",
        "Grades" => [
            "Math" => 85,
            "Science" => 90,
            "English" => 78
        ]
    ],
    [
        "ID" => 102,
        "Name" => "Bob",
        "Grades" => [
            "Math" => 75,
            "Science" => 80,
            "English" => 82
        ]
    ],
    [
        "ID" => 103,
        "Name" => "Charlie",
        "Grades" => [
            "Math" => 92,
            "Science" => 88,
            "English" => 95
        ]
    ]
];

function calculateGrades(&$student) {
    $total = array_sum($student["Grades"]);
    $count = count($student["Grades"]);
    $average = $total / $count;
    $student["Total"] = $total;
    $student["Average"] = round($average, 2);
    $student["Grade"] = assignGrade($average);
}

function assignGrade($average) {
    if ($average >= 90) return "A";
    elseif ($average >= 80) return "B";
    elseif ($average >= 70) return "C";
    elseif ($average >= 60) return "D";
    else return "F";
}

foreach ($students as &$student) {
    calculateGrades($student);
}

function displayStudents($students) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Name</th><th>Math</th><th>Science</th><th>English</th><th>Total</th><th>Average</th><th>Grade</th></tr>";
    
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>{$student['ID']}</td>";
        echo "<td>{$student['Name']}</td>";
        echo "<td>{$student['Grades']['Math']}</td>";
        echo "<td>{$student['Grades']['Science']}</td>";
        echo "<td>{$student['Grades']['English']}</td>";
        echo "<td>{$student['Total']}</td>";
        echo "<td>{$student['Average']}</td>";
        echo "<td>{$student['Grade']}</td>";
        echo "</tr>";
    }
    
    echo "</table>";
}

displayStudents($students);
?>
