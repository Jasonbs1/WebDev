<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Multiplication Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="number"] {
            padding: 10px;
            width: 50px;
            text-align: center;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 60%;
        }
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Palindrome Multiplication Generator</h1>
<form method="post" action="">
    <label for="iterations">Enter number of palindromes (1-50):</label>
    <input type="number" id="iterations" name="iterations" min="1" max="50" required>
    <input type="submit" value="Generate">
</form>

<?php

// Constants for input validation
define('MAX_LIMIT', 50);
define('MIN_LIMIT', 1);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['iterations'])) {

    // Retrieve and sanitize user input
    $iterations = (int) $_POST['iterations'];
    
    // Validate that input is within range
    if ($iterations >= MIN_LIMIT && $iterations <= MAX_LIMIT) {
        // Generate and display palindromes
        echo displayPalindromeResults($iterations);
    } else {
        // Show error message if the input is invalid
        echo generateErrorMessage($iterations);
    }
}

/**
 * Generate a string of palindromes using mathematical approach.
 * Example: 1, 11, 111, 1111 and then squares them.
 *
 * @param int $count Number of palindromes to generate.
 * @return string Formatted HTML output.
 */
function displayPalindromeResults($count) {
    $output = "<div style='text-align: center;'>"; // Store results with a wrapper

    // Generate and display the palindromes
    for ($i = 1; $i <= $count; $i++) {
        $palindromeNumber = getPalindrome($i);
        $squareResult = pow($palindromeNumber, 2);
        $output .= formatResult($palindromeNumber, $squareResult);
    }
    
    $output .= "</div>"; // Close the wrapper
    return $output;
}

/**
 * Generate palindrome using mathematical properties (instead of string manipulation).
 * This can be done using powers of 10 and summing up the numbers.
 *
 * @param int $length Length of the palindrome number.
 * @return int The palindrome number.
 */
function getPalindrome($length) {
    $palindrome = 0;
    for ($j = 0; $j < $length; $j++) {
        $palindrome += pow(10, $j); // Adds 1, 10, 100... to form 1, 11, 111...
    }
    return $palindrome;
}

/**
 * Format the result to display in the desired format.
 *
 * @param int $palindrome Palindrome number generated.
 * @param int $result The square of the palindrome.
 * @return string HTML formatted result.
 */
function formatResult($palindrome, $result) {
    // Displaying the result as a table row instead of centered paragraph
    return "<table align='center' border='1'><tr><td>{$palindrome} x {$palindrome}</td><td>{$result}</td></tr></table>";
}

/**
 * Generate an error message when input validation fails.
 *
 * @param int $input The invalid input.
 * @return string HTML formatted error message.
 */
function generateErrorMessage($input) {
    return "<p style='text-align: center;'>Error: '{$input}' is not within the valid range of " . MIN_LIMIT . " to " . MAX_LIMIT . ".</p>";
}

?>

</body>
</html>
