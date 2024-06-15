<?php
// Example PHP backend code
$searchTerm = $_POST['term'];

// Assuming this is your table data or you query your database here
$data = array(
    array("John Doe", "john@example.com"),
    array("Jane Smith", "jane@example.com"),
    array("Mike Johnson", "mike@example.com")
);

$results = array();

// Loop through the data to find matching results
foreach ($data as $row) {
    if (stripos($row[0], $searchTerm) !== false) { // Assuming you're searching by name
        $results[] = $row[0]; // Add matching name to results
    }
}

echo json_encode($results);
?>
