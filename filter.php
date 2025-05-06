
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

