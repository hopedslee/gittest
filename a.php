<?php
// Assuming $date is in a valid date format (e.g., 'YYYY-MM-DD')
$date = '2023-10-06';

// Create a DateTime object from the given date
$dateObj = new DateTime($date);

// Calculate one week ago
$dateOneWeekAgo = clone $dateObj; // Clone to avoid modifying the original object
$dateOneWeekAgo->modify('-1 week');

// Calculate one week later
$dateOneWeekLater = clone $dateObj; // Clone to avoid modifying the original object
$dateOneWeekLater->modify('+1 week');

// Format the dates as strings
$oneWeekAgo = $dateOneWeekAgo->format('Y-m-d');
$oneWeekLater = $dateOneWeekLater->format('Y-m-d');

// Output the results
echo 'One week ago: ' . $oneWeekAgo . "\n";
echo 'One week later: ' . $oneWeekLater;
?>
