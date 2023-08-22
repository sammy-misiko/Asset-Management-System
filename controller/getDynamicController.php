<?php
include_once "../config/dbconnect.php";


// Retrieve the input from the AJAX request
$input = $_POST['input'];

// Escape the input to prevent SQL injection (better to use prepared statements, but for simplicity, we'll use mysqli_real_escape_string here)
$escapedInput = $conn->real_escape_string($input);

// Construct the SQL query
$sql = "SELECT serialno FROM asset_register WHERE Allocated_To = '$input'"; // Update 'your_table_name' and 'column_name' with your actual table and column names

// Execute the query and fetch data
$result = $conn->query($sql);

$options = array();

if ($result && $result->num_rows > 0) {
    // Loop through the fetched data and add options to the $options array
    while ($row = $result->fetch_assoc()) {
        $options[] = $row['serialno'];
    }
}

// Close the database connection
//$connection->close();

// Prepare the JSON response
$response = array('options' => $options);
echo json_encode($response);
?>
