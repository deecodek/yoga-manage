<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'yoga');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $reviewer_name = $_POST['reviewer_name'];
    $reviewer_email = $_POST['reviewer_email'];
    $review_text = $_POST['review_text'];
    $review_date = date('Y-m-d'); // Set today's date as review date

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO reviews (reviewer_name, review_date, review_text,reviewer_email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $reviewer_name, $review_date, $review_text, $reviewer_email);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
