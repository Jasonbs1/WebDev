<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Two Sorted Arrays</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Merge Two Sorted Arrays</h1>

<form method="post">
    <label for="nums1">Enter nums1 (comma-separated, with zeros at the end):</label><br>
    <input type="text" id="nums1" name="nums1" required><br><br>
    
    <label for="m">Enter the number of valid elements in nums1:</label><br>
    <input type="number" id="m" name="m" required min="0"><br><br>
    
    <label for="nums2">Enter nums2 (comma-separated):</label><br>
    <input type="text" id="nums2" name="nums2" required><br><br>
    
    <label for="n">Enter the number of elements in nums2:</label><br>
    <input type="number" id="n" name="n" required min="0"><br><br>
    
    <input type="submit" value="Merge Arrays">
</form>

<?php

class Solution {
    /**
     * Merge two sorted arrays nums1 and nums2 into a single sorted array.
     * The result is stored in nums1, which has enough space to hold elements of nums2 as well.
     * 
     * @param Integer[] $nums1 The first array (with extra space at the end to hold elements of nums2)
     * @param Integer $m The number of valid elements in $nums1 (ignores trailing zeros)
     * @param Integer[] $nums2 The second array to merge into $nums1
     * @param Integer $n The number of elements in $nums2
     * @return NULL The function modifies $nums1 in place, no return value is needed.
     */
    function merge(&$nums1, $m, $nums2, $n) {
        // Step 1: Remove the extra trailing elements in nums1
        while (count($nums1) > $m) {
            array_pop($nums1); // Remove extra elements from nums1
        }

        // Step 2: Add all elements of nums2 to nums1
        for ($i = 0; $i < $n; $i++) {
            array_push($nums1, $nums2[$i]); // Append each element of nums2
        }

        // Step 3: Sort nums1
        asort($nums1); // Sort the merged array
    }
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize user input
    $nums1 = array_map('intval', explode(',', trim($_POST['nums1']))); // Convert input to array of integers
    $m = intval($_POST['m']);
    $nums2 = array_map('intval', explode(',', trim($_POST['nums2']))); // Convert input to array of integers
    $n = intval($_POST['n']);

    // Create an instance of Solution
    $solution = new Solution();

    // Call the merge function
    $solution->merge($nums1, $m, $nums2, $n);

    // Output the merged array
    echo "<h2>Merged Array:</h2>";
    echo "<table>";
    echo "<tr><th>Final Merged Array</th></tr>";
    echo "<tr><td>" . implode(', ', $nums1) . "</td></tr>"; // Display the result
    echo "</table>";
}
?>

</body>
</html>
