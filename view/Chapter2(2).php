<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST Method</title>
    <link rel="stylesheet" href="../styles/Chapter2(2).css">
</head>

<body>
    <div id="container">
        <header>
            <h2 id="title">This chapter is about GET and POST methods</h2>
        </header>
        <main>
            <form action="chapter2(2).php" method="post" class="form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="UserName">
                <label for="password">Password:</label>
                <input type="password" id="password" name="Password">
                <input type="submit" value="Login" class="submit-button">
            </form>

            <div class="output">
                <?php
                if (isset($_POST["UserName"]) && isset($_POST["Password"])) {
                    echo "<p>Username: " . htmlspecialchars($_POST["UserName"]) . "</p>";
                    echo "<p>Password: " . htmlspecialchars($_POST["Password"]) . "</p>";
                }
                ?>
            </div>

            <div class="info">
                <ul>
                    <li><b>POST :</b> Data is packaged in the body of the HTTP request (now nothing will be shown in the URL but successfully submitted)</li>
                    <li>More secure</li>
                    <li>No data limit</li>
                    <li>Better for submitting credentials</li>
                </ul>
            </div>
            <a href="Chapter3.php" class="next-link">Next chapter</a>
        </main>
    </div>
</body>

</html>