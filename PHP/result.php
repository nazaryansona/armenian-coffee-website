<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php

$conn = new mysqli("localhost", "root", "", "coffee_db");

$country = $_POST['country'];
$coffee_type = $_POST['coffee_type'];
$cups = $_POST['cups'];
$time = $_POST['time'];
$social = $_POST['social'];
$taste = $_POST['taste'];
$fortune = $_POST['fortune'];

// CHECKBOX (important)
$place_score = 0;
if (!empty($_POST['place'])) {
    foreach ($_POST['place'] as $p) {
        $place_score += $p;
    }
}

// TOTAL SCORE
$score = $coffee_type + $cups + $time + $social + $taste + $fortune + $place_score;

// SAVE TO DATABASE
$sql = "INSERT INTO quiz_results (country, coffee_type, cups, time, social, taste, fortune)
VALUES ('$country', '$coffee_type', '$cups', '$time', '$social', '$taste', '$fortune')";

$conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <link rel="stylesheet" href="../Style/style.css?v=123">
</head>
<body>

<header class="main-header">
    <div class="logo">☕ Armenian Coffee</div>
    <nav class="nav-menu">
        <a href="..">Home</a>
        <a href="../HTML/history.html">History</a>
        <a href="../HTML/gallery.html">Gallery</a>
        <a href="../HTML/culture.html">Culture</a>
        <a href="../HTML/places.html">Places</a>
        <a href="../HTML/recommendation.html">My Picks</a>
        <a href="../PHP/stats.php">Stats</a>
        <a href="../PHP/quiz.php" class="quiz-btn">Quiz</a>
    </nav>
</header>

<div class="quiz-container">

<h1>Your Result</h1>

    <?php

        
        // MAX SCORE = 14
        $percentage = round(($score / 14) * 100);

        echo "<p class='percentage'>Your Armenian level: $percentage%</p>";

        if ($score <= 4) {
            echo "<h2 class='result-title'>Tourist Level</h2>";
            echo "<p>You enjoy coffee… but Armenian culture is still new to you!</p>";
        }
        elseif ($score <= 8) {
            echo "<h2 class='result-title'>Getting There</h2>";
            echo "<p>You’re starting to understand the Armenian coffee vibe 👀</p>";
        }
        elseif ($score <= 11) {
            echo "<h2 class='result-title'>Almost Armenian</h2>";
            echo "<p>You could easily pass as Armenian in a coffee conversation 😄</p>";
        }
        else {
            echo "<h2 class='result-title'>Certified Armenian 🇦🇲🔥</h2>";
            echo "<p>You belong at every Armenian coffee table ☕</p>";
        }

    ?>

</div>

<footer>
    Armenian Coffee Project © 2026
</footer>

</body>
</html>