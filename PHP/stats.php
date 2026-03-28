<?php
$conn = new mysqli("localhost", "root", "", "coffee_db");

// TOTAL USERS
$total_query = "SELECT COUNT(*) as total FROM quiz_results";
$total_result = $conn->query($total_query);
$total = $total_result->fetch_assoc()['total'];

// AVERAGE SCORE (approx)
$avg_query = "SELECT AVG(coffee_type + cups + time + social + taste + fortune) as avg_score FROM quiz_results";
$avg_result = $conn->query($avg_query);
$avg_score = round($avg_result->fetch_assoc()['avg_score'], 1);

// convert to percentage (max ~14)
$percentage = round(($avg_score / 14) * 100);

// MOST COMMON COFFEE TYPE
$coffee_query = "
SELECT coffee_type, COUNT(*) as count 
FROM quiz_results 
GROUP BY coffee_type 
ORDER BY count DESC 
LIMIT 1
";
$coffee_result = $conn->query($coffee_query);
$coffee_data = $coffee_result->fetch_assoc();

$coffee_text = "Unknown";

if ($coffee_data) {
    if ($coffee_data['coffee_type'] == 2) $coffee_text = "Black coffee ☕";
    elseif ($coffee_data['coffee_type'] == 1) $coffee_text = "Coffee with milk 🥛";
    else $coffee_text = "Tea lovers 🍵";
}

// COFFEE FORTUNE TRUST
$fortune_query = "
SELECT COUNT(*) as trust 
FROM quiz_results 
WHERE fortune = 2
";
$fortune_result = $conn->query($fortune_query);
$fortune = $fortune_result->fetch_assoc()['trust'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Statistics</title>
    <link rel="stylesheet" href="../Style/style.css?v=123">
</head>
<body>

<header class="main-header">
    <div class="logo">☕ Armenian Coffee</div>

    <nav class="nav-menu">
        <a href="../HTML/index.html">Home</a>
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

    <h1>📊 Coffee Quiz Statistics</h1>

    <div class="stats-box">
        <h2>Total Participants</h2>
        <p><?php echo $total; ?></p>
    </div>

    <div class="stats-box">
        <h2>Average Armenian Level</h2>
        <p><?php echo $percentage; ?>%</p>
    </div>

    <div class="stats-box">
        <h2>Most Popular Coffee</h2>
        <p><?php echo $coffee_text; ?></p>
    </div>

    <div class="stats-box">
        <h2>People Who Trust Coffee Reading 🔮</h2>
        <p><?php echo $fortune; ?></p>
    </div>

</div>

<footer>
    Armenian Coffee Project © 2026
</footer>

</body>
</html>