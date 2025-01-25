<?php
require 'db.php'; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $yoga_type = htmlspecialchars($_POST['yoga_type']);

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($yoga_type)) {
        try {
            $sql = "INSERT INTO registrations (name, email, phone, yoga_type) 
                    VALUES (:name, :email, :phone, :yoga_type)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':yoga_type', $yoga_type);

            if ($stmt->execute()) {
                echo "<div style='text-align: center; color: green; padding: 20px; font-size: 18px;'>
                        Registration successful! Thank you, $name.
                      </div>";
            } else {
                echo "<div style='text-align: center; color: red; padding: 20px; font-size: 18px;'>
                        Failed to register. Please try again.
                      </div>";
            }
        } catch (PDOException $e) {
            echo "<div style='text-align: center; color: red; padding: 20px; font-size: 18px;'>
                    Error: " . $e->getMessage() . "
                  </div>";
        }
    } else {
        echo "<div style='text-align: center; color: red; padding: 20px; font-size: 18px;'>
                Please fill in all the required fields.
              </div>";
    }
}
?>
