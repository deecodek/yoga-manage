<?php
// Database connection (adjust according to your configuration)
$conn = new mysqli('localhost', 'root', '', 'yoga'); // Update with your database details

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get POST data
    $user_id = 1; // This can be fetched from session or authentication system
    $full_name = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $class_id = htmlspecialchars($_POST['classType']);

    // Prepare and execute SQL query
    $query = "INSERT INTO registration (user_id, full_name, email, phone, class_id)
              VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("issss", $user_id, $full_name, $email, $phone, $class_id);

        if ($stmt->execute()) {
            // Get the last inserted registration ID
            $registration_id = $stmt->insert_id;

            echo "<script>
                alert('Booking successfully submitted! QR code will be downloaded.');
                window.location.href = 'classes.php'; // Redirect back to classes page
            </script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close(); // Close the database connection
?>
