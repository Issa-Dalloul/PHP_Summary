<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies and Sessions in PHP</title>
    <link rel="stylesheet" href="../styles/chapter11.css">
</head>

<body>
    <div id="container">
        <header>
            <h2>This chapter is about Cookies and Sessions in PHP</h2>
        </header>
        <main>
            <p>In web development, cookies and sessions are mechanisms to maintain state between HTTP requests in a stateless protocol like HTTP.</p>

            <h3>Sessions</h3>
            <p>Sessions are a way to store user data on the server for later use. When a user visits a website, a unique session ID is generated for that user. This session ID is then stored in a cookie on the user's browser. The server uses this session ID to identify the user and retrieve their session data.</p>
            <p>Sessions are typically used to store sensitive information like user authentication details or shopping cart contents. Since session data is stored on the server, it is more secure than cookies.</p>

            <h3>Cookies</h3>
            <p>Cookies are small pieces of data that websites store on a user's browser. Cookies are sent with every HTTP request to the same domain, allowing websites to remember user preferences or track user behavior.</p>
            <p>Cookies can be either session cookies or persistent cookies. Session cookies are stored temporarily and are deleted when the user closes their browser. Persistent cookies are stored on the user's device for a specified period and can be accessed even after the user closes their browser.</p>
            <p>Cookies are commonly used for tasks like remembering login credentials, tracking user behavior for analytics, or personalizing content for users.</p>

            <?php
            // Start a session
            session_start();

            // Check if the user is logged in
            if (isset($_SESSION['username'])) {
                echo "<p>Welcome back, {$_SESSION['username']}!</p>";
                echo "<p><a href='logout.php'>Logout</a></p>";
            } else {
                // Check if the form is submitted
                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];

                    // Set session variable
                    $_SESSION['username'] = $username;

                    // Set cookie to remember username for 1 day
                    setcookie('username', $username, time() + (86400 * 30), "/");
                    echo "<p>Hello, $username! You are now logged in.</p>";
                } else {
            ?>
                    <form action="Chapter11.php" method="post" class="login-form">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                        <br>
                        <input type="submit" value="Login" name="submit">
                    </form>
            <?php
                }
            }
            ?>
        </main>
        <footer>
            <a href="Chapter12.php" class="next-link">Next chapter</a>
        </footer>
    </div>
</body>

</html>