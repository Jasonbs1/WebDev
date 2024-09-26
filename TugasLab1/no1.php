<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Generator</title>
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
        .result {
            margin: 20px auto;
            width: 80%;
            text-align: center; /* Center the results */
        }
        .row {
            display: block;
            margin: 5px auto; /* Space between rows */
        }
    </style>
</head>
<body>

<h1>Palindrome Generator</h1>
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
 * Generate a string of palindromes.
 *
 * @param int $count Number of palindromes to generate.
 * @return string Formatted HTML output.
 */
function displayPalindromeResults($count) {
    $output = "<div class='result'>"; // Store results with a wrapper

    // Generate and display the palindromes
    for ($i = 1; $i <= $count; $i++) {
        $palindromeNumber = getPalindrome($i);
        $output .= formatResult($palindromeNumber, $i); // Pass the row number for formatting
    }
    
    $output .= "</div>"; // Close the wrapper
    return $output;
}

/**
 * Generate palindrome by constructing a symmetrical number.
 *
 * @param int $length Length of the palindrome number.
 * @return string The palindrome number.
 */
function getPalindrome($length) {
    $num = ""; // Initialize an empty string for the number
    // Create the first half of the palindrome
    for ($j = 1; $j <= $length; $j++) {
        $num .= $j; // Append numbers 1 to length
    }
    // Create the second half of the palindrome by reversing the first half
    $palindrome = $num . strrev(substr($num, 0, -1)); // Exclude the last digit for symmetry
    return $palindrome; // Return the generated palindrome
}

/**
 * Format the result to display.
 *
 * @param string $palindrome Palindrome number generated.
 * @param int $row The current row number.
 * @return string HTML formatted result.
 */
function formatResult($palindrome, $row) {
    // Calculate left margin to center the triangle
    $maxWidth = 50; // Adjust based on desired maximum width
    $marginLeft = ($maxWidth - ($row * 2)) . "px"; // Adjust the left margin dynamically
    
    // Create a row for the current palindrome with calculated margin
    return "<div class='row' style='margin-left: $marginLeft;'>" . $palindrome . "</div>";
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
