<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET and POST Methods</title>
    <link rel="stylesheet" href="../styles/Chapter2.css">
</head>

<body>
    <div id="container">
        <header>
            <h2 id="title">This chapter is about GET and POST methods</h2>
        </header>
        <main>
            <form action="chapter2.php" method="get" class="form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="UserName">
                <label for="password">Password:</label>
                <input type="password" id="password" name="Password">
                <input type="submit" value="Login" class="submit-button">
            </form>

            <div class="output">
                <?php
                if (isset($_GET["UserName"]) && isset($_GET["Password"])) {
                    echo "<p>Username: " . htmlspecialchars($_GET["UserName"]) . "</p>";
                    echo "<p>Password: " . htmlspecialchars($_GET["Password"]) . "</p>";
                }
                ?>
            </div>

            <div class="info">
                <p>Read the Code for some comments:</p>
                <ul>
                    <li><b>GET :</b> Data is appended to the URL (look at the URL after you login)</li>
                    <li>Data is not secure</li>
                    <li>Character limit</li>
                    <li>GET requests can be cached</li>
                    <li>Better for a search page</li>
                </ul>
            </div>
            <a href="Chapter2(2).php" class="next-link">Learn about POST</a>
        </main>
    </div>
</body>

</html>