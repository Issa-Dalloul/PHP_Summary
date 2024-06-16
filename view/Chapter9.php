<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String Functions in PHP</title>
    <link rel="stylesheet" href="../styles/chapter9.css">
</head>

<body>
    <div id="container">
        <header>
            <h2>This chapter is about String Functions in PHP</h2>
        </header>
        <main>
            <h3>String functions:</h3>
            <ul>
                <li><strong>strtolower()</strong> - Converts all letters to lowercase</li>
                <li><strong>strtoupper()</strong> - Converts all letters to uppercase</li>
                <li><strong>trim()</strong> - Removes all spaces from the beginning and end of a string</li>
                <li><strong>str_pad()</strong> - Pads a string to a new length</li>
                <li><strong>str_replace()</strong> - Replaces all occurrences of the search string with the replacement string</li>
                <li><strong>strlen()</strong> - Returns the length of a string</li>
                <li><strong>strpos()</strong> - Finds the position of the first occurrence of a substring in a string</li>
                <li><strong>substr()</strong> - Returns a part of a string</li>
                <li><strong>ucfirst()</strong> - Converts the first character of a string to uppercase</li>
                <li><strong>lcfirst()</strong> - Converts the first character of a string to lowercase</li>
                <li><strong>ucwords()</strong> - Capitalizes the first letter of each word in a string</li>
                <li><strong>strrev()</strong> - Reverses a string</li>
                <li><strong>str_shuffle()</strong> - Randomly shuffles a string</li>
                <li><strong>strcmp()</strong> - Compares two strings (case-sensitive)</li>
                <li><strong>explode()</strong> - Splits a string by a specified delimiter into an array</li>
                <li><strong>implode()</strong> - Joins array elements into a string with a specified delimiter</li>
                <li><strong> Check the code and uncomment to test these functions </strong></li>
            </ul>

            <?php
            //             $name = "Issa";
            //             // strtolower() - Converts all letters to lowercase
            // $name = strtolower($name);
            // echo "{$name} - strtolower() converts all letters to lowercase<br>";

            // // strtoupper() - Converts all letters to uppercase
            // $name = strtoupper($name);
            // echo "{$name} - strtoupper() converts all letters to uppercase<br>";

            // // trim() - Removes all spaces from the beginning and end of a string
            // $name = trim($name);
            // echo "{$name} - trim() removes all spaces from the beginning and end of a string<br>";

            // // str_pad() - Pads a string to a new length
            // $name = str_pad($name, 10, "a");
            // echo "{$name} - str_pad() pads the string with 'a' to a length of 10 characters<br>";

            // // str_replace() - Replaces all occurrences of the search string with the replacement string
            // $name = str_replace("A", "s", $name);
            // echo "{$name} - str_replace() replaces 'A' with 's' in the string<br>";

            // // strlen() - Returns the length of a string
            // $length = strlen($name);
            // echo "{$length} - strlen() returns the length of the string<br>";

            // // strpos() - Finds the position of the first occurrence of a substring in a string
            // $position = strpos($name, "s");
            // echo "{$position} - strpos() finds the position of the first occurrence of 's' in the string<br>";

            // // substr() - Returns a part of a string
            // $substring = substr($name, 0, 4);
            // echo "{$substring} - substr() returns a part of the string starting at position 0 with a length of 4 characters<br>";

            // // ucfirst() - Converts the first character of a string to uppercase
            // $name = ucfirst($name);
            // echo "{$name} - ucfirst() converts the first character of the string to uppercase<br>";

            // // lcfirst() - Converts the first character of a string to lowercase
            // $name = lcfirst($name);
            // echo "{$name} - lcfirst() converts the first character of the string to lowercase<br>";

            // // ucwords() - Capitalizes the first letter of each word in a string
            // $name = ucwords($name);
            // echo "{$name} - ucwords() capitalizes the first letter of each word in the string<br>";

            // // strrev() - Reverses a string
            // $reversedName = strrev($name);
            // echo "{$reversedName} - strrev() reverses the string<br>";

            // // str_shuffle() - Randomly shuffles a string
            // $shuffledName = str_shuffle($name);
            // echo "{$shuffledName} - str_shuffle() randomly shuffles the string<br>";

            // // strcmp() - Compares two strings (case-sensitive)
            // $comparison = strcmp($name, "Issa");
            // echo "{$comparison} - strcmp() compares the string with 'Issa' (case-sensitive)<br>";

            // // explode() - Splits a string by a specified delimiter into an array
            // $nameArray = explode(" ", "This is a test");
            // echo implode(", ", $nameArray) . " - explode() splits the string 'This is a test' by spaces into an array<br>";

            // // implode() - Joins array elements into a string with a specified delimiter
            // $joinedString = implode("-", $nameArray);
            // echo "{$joinedString} - implode() joins the array elements into a string with '-' as the delimiter<br>";
            ?>
            ?>

        </main>
        <footer>
            <a href="Chapter10.php" class="next-link">Next chapter</a>
        </footer>
    </div>
</body>

</html>