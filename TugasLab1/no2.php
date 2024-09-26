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

// Example usage
$solution = new Solution();

// Define the input arrays and their sizes
$nums1 = [1, 2, 3, 0, 0, 0]; // nums1 with extra space (0s)
$m = 3; // Valid elements in nums1
$nums2 = [2, 5, 6]; // nums2
$n = 3; // Valid elements in nums2

// Call the merge function
$solution->merge($nums1, $m, $nums2, $n);

// Output the merged array
echo "Merged Array: ";
print_r($nums1); // Display the result
?>
