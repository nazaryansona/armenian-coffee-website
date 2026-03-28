<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Coffee Quiz</title>
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

    <h1>☕ How Armenian Are You?</h1>
    <p>Answer the questions to find out!</p>

    <form action="result.php" method="POST">

        <!-- COUNTRY -->
        <div class="question">
            <label>Country</label>
            <input type="text" name="country" class="small-input" placeholder="Your Country">
        </div>

        <!-- Q1 -->
        <div class="question">
    <p>What kind of coffee do you usually drink?</p>

    <div class="option">
        <input type="radio" name="coffee_type" value="2">
        <span>Black coffee</span>
    </div>

    <div class="option">
        <input type="radio" name="coffee_type" value="1">
        <span>Coffee with milk</span>
    </div>

    <div class="option">
        <input type="radio" name="coffee_type" value="1">
        <span>I drink anything</span>
    </div>

    <div class="option">
        <input type="radio" name="coffee_type" value="0">
        <span>I prefer tea</span>
    </div>
</div>

        <!-- Q2 -->
        <div class="question">
            <p>How many cups do you drink daily?</p>

            <label><input type="radio" name="cups" value="0"><span>None</span></label>
            <label><input type="radio" name="cups" value="1"><span>1–2 cups</span></label>
            <label><input type="radio" name="cups" value="2"><span>3 or more</span></label>
            <label><input type="radio" name="cups" value="2"><span>Usually 1, but more if offered</span></label>
        </div>

        <!-- Q3 -->
        <div class="question">
            <p>When do you drink coffee?</p>

            <label><input type="radio" name="time" value="0"><span>Rarely</span></label>
            <label><input type="radio" name="time" value="1"><span>Only in the morning</span></label>
            <label><input type="radio" name="time" value="2"><span>Anytime</span></label>
            <label><input type="radio" name="time" value="0"><span>I don’t drink coffee</span></label>
        </div>

        <!-- Q4 -->
        <div class="question">
            <p>How do you prefer to drink coffee?</p>

            <label><input type="radio" name="social" value="0"><span>Alone</span></label>
            <label><input type="radio" name="social" value="1"><span>With close friends</span></label>
            <label><input type="radio" name="social" value="2"><span>With family</span></label>
            <label><input type="radio" name="social" value="3"><span>With anyone who wants to gossip 🤭</span></label>
        </div>

        <!-- Q5 -->
        <div class="question">
            <p>How do you like your coffee?</p>

            <label><input type="radio" name="taste" value="0"><span>Sweet</span></label>
            <label><input type="radio" name="taste" value="1"><span>Balanced</span></label>
            <label><input type="radio" name="taste" value="2"><span>Strong and bitter</span></label>
        </div>

        <!-- Q6 -->
        <div class="question">
            <p>Would you trust your future to an Armenian and a cup of coffee?</p>

            <label><input type="radio" name="fortune" value="2"><span>Yes</span></label>
            <label><input type="radio" name="fortune" value="1"><span>Maybe</span></label>
            <label><input type="radio" name="fortune" value="0"><span>No</span></label>
        </div>

        <!-- Q7 -->
        <div class="question">
            <p>Where do you usually drink coffee? (choose all that apply)</p>

            <label><input type="checkbox" name="place[]" value="1"><span>At home</span></label>
            <label><input type="checkbox" name="place[]" value="1"><span>At a café</span></label>
            <label><input type="checkbox" name="place[]" value="1"><span>With friends</span></label>
            <label><input type="checkbox" name="place[]" value="1"><span>At work</span></label>
        </div>

        <input type="submit" value="See Result ☕">

    </form>

</div>

<footer>
    Armenian Coffee Project © 2026
</footer>

</body>
</html>