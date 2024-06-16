<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional Statements</title>
    <link rel="stylesheet" href="../styles/chapter3.css">
</head>

<body>
    <div id="container">
        <header>
            <h2 id="title">This chapter is about conditional statements</h2>
        </header>
        <main>
            <form action="chapter3.php" method="get" class="form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="UserName">
                <label for="age">Enter Your Age:</label>
                <input type="number" id="age" name="Age">
                <input type="submit" value="Submit" class="submit-button">
            </form>

            <div class="output">
                <?php
                if (isset($_GET["Age"])) {
                    if ($_GET["Age"] >= 18) {
                        echo "<p>You're welcome, " . htmlspecialchars($_GET["UserName"]) . "</p>";
                    } elseif ($_GET["Age"] == 0) {
                        echo "<p>Haha, not funny, " . htmlspecialchars($_GET["UserName"]) . "</p>";
                    } else {
                        echo "<p>You cannot enter this site, " . htmlspecialchars($_GET["UserName"]) . "</p>";
                    }
                }
                ?>
            </div>

            <div class="info">
                <p>No need to do a section about how logical operators work:</p>
                <ul>
                    <li>For AND: <code>&&</code></li>
                    <li>For OR: <code>||</code></li>
                    <li>For NOT: <code>!</code></li>
                    <li>Some functions to be mentioned:</li>
                    <ul>
                        <li><code>isset()</code>: returns TRUE if a variable is declared and not null</li>
                        <li><code>empty()</code>: returns TRUE if a variable is not declared, false, null, or an empty string</li>
                    </ul>
                </ul>
            </div>
            <a href="Chapter4.php" class="next-link">Next chapter</a>
        </main>
    </div>
</body>

</html>