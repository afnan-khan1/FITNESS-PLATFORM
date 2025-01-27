<?php
session_start(); // Start the session

// Establish MySQL connection without username and password
$mysqli = new mysqli("localhost", "root", "", "OpticFitnessDB");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data and log the exercise
    $exercise_name = $_POST['exercise_name'];
    $duration = $_POST['duration'];
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];

    // Set the session email
    $_SESSION['user_email'] = $user_email;

    // Insert exercise data into the database
    $sql = "INSERT INTO exercise_logs (exercise_name, duration, user_name, user_email, log_date) VALUES (?, ?, ?, ?, NOW())";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("siss", $exercise_name, $duration, $user_name, $user_email);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to the calendar page after logging the exercise
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    // Close statement and connection
    $stmt->close();
    $mysqli->close();
} else {
    // If the form was not submitted via POST, redirect to the exercise.html page
    header("Location: exercise.html");
    exit;
}
?>
