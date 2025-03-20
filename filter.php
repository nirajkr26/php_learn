<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter Id</td>
    </tr>
    <?php
    foreach(filter_list() as $id=>$filter){
        echo "<tr><td>".$filter."</td><td>".filter_id($filter)."</td></tr>";
    }
    ?>
</table>

Open sidebar

ChatGPT

You said:
developa a quiz appliation in php that utilizes arrays,loops,and functions to manage and evaluate mcqs.the application should allow users to attempt a set of predefined questions,record their responses and calculate their scores dynamically
ChatGPT said:
Here's a simple PHP quiz application that:

Uses arrays to store questions and answers.
Uses loops to iterate through questions.
Uses functions to evaluate responses and calculate scores.
It consists of a single quiz.php file that displays MCQs, collects user responses, and calculates scores dynamically.


Answer in chat instead
This script:

Stores questions, options, and correct answers in an array.
Uses a loop to display questions and collect user responses.
Uses a function to evaluate answers and calculate the score dynamically.
Would you like to add features like a timer or result storage?






Is this conversation helpful so far?








Search

Reason

ChatGPT can make mistakes. Check important info.
?
ChatGPT says: This script: 1. Stores questions, options, and correct answers in an **array**. 2. Uses a **loop** to display questions and collect user responses. 3. Uses a **function** to evaluate answers and calculate the score dynamically. Would you like to add features like a timer or result storage?

<!-- 
Quiz App Php
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
<?php
session_start();

// Define questions and answers in an array
$questions = [
    ["question" => "What is the capital of France?", "options" => ["Paris", "London", "Berlin", "Madrid"], "answer" => 0],
    ["question" => "Which language runs in a web browser?", "options" => ["Java", "C++", "Python", "JavaScript"], "answer" => 3],
    ["question" => "What does HTML stand for?", "options" => ["Hyper Trainer Markup Language", "Hyper Text Markup Language", "Hyperlinks and Text Markup Language", "Home Tool Markup Language"], "answer" => 1],
    ["question" => "Which year was PHP created?", "options" => ["1995", "2000", "2010", "1990"], "answer" => 0],
    ["question" => "Who is known as the father of computers?", "options" => ["Charles Babbage", "Alan Turing", "Bill Gates", "Steve Jobs"], "answer" => 0]
];

// Function to calculate score
function calculateScore($questions, $responses) {
    $score = 0;
    foreach ($questions as $index => $q) {
        if (isset($responses[$index]) && $responses[$index] == $q['answer']) {
            $score++;
        }
    }
    return $score;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userResponses = isset($_POST['responses']) ? $_POST['responses'] : [];
    $score = calculateScore($questions, $userResponses);
    echo "<h2>Your Score: $score / " . count($questions) . "</h2>";
} else {
    echo '<form method="POST">';
    foreach ($questions as $index => $q) {
        echo "<p>" . ($index + 1) . ". " . $q['question'] . "</p>";
        foreach ($q['options'] as $optionIndex => $option) {
            echo "<label><input type='radio' name='responses[$index]' value='$optionIndex' required> $option</label><br>";
        }
    }
    echo '<br><input type="submit" value="Submit">';
    echo '</form>';
}
?>

