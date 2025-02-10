<?php
$d = date("h");
echo ($d % 2 == 0) ? "even day" : "bad day";

echo "\n";

$m = trim(fgets(STDIN));
if ($m > 33 && $m < 50) {
    echo "d GRADE";
} elseif ($m > 49 && $m < 65) {
    echo "c GRADE";
} elseif ($m > 64 && $m < 80) {
    echo "b GRADE";
} elseif ($m > 79 && $m < 90) {
    echo "a GRADE";
} elseif ($m > 89 && $m < 101) {
    echo "a+ GRADE";
} else {
    echo "Invalid input";
}

echo "\n";

switch ($m % 10) {
    case 0:
        echo "It's a multiple of 10";
        break;
    case 1:
        echo "It's 1 more than a multiple of 10";
        break;
    case 2:
        echo "It's 2 more than a multiple of 10";
        break;
    case 3:
        echo "It's 3 more than a multiple of 10";
        break;
    case 4:
        echo "It's 4 more than a multiple of 10";
        break;
    case 5:
        echo "It's 5 more than a multiple of 10";
        break;
    case 6:
        echo "It's 6 more than a multiple of 10";
        break;
    case 7:
        echo "It's 7 more than a multiple of 10";
        break;
    case 8:
        echo "It's 8 more than a multiple of 10";
        break;
    case 9:
        echo "It's 9 more than a multiple of 10";
        break;
    default:
        echo "Invalid input";
}

$author = "valmiki";

switch ($author) {
    case "valmiki":
        echo "Ramayan";
        break;
    case "mark mivereni":
        echo "Trading in the zone";
        break;
    case "j.k. rowling":
        echo "Harry Potter";
        break;
    case "george orwell":
        echo "1984";
        break;
    default:
        echo "Author not found";

}

?>