<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plan = $_POST['plan'];

    $prices = [
        "1_month" => 50,
        "6_months" => 250,
        "1_year" => 450,
        "nutrition" => 150,
        "group_workout" => 20
    ];

    $total_cost = $prices[$plan];

    echo "<h1>Purchase Summary</h1>";
    echo "<p>Selected Plan: " . str_replace("_", " ", ucfirst($plan)) . " - $" . $prices[$plan] . "</p>";
    echo "<h2>Total Cost: $" . $total_cost . "</h2>";

    // Here you can add the code to process the payment and store the purchase information in your database
}
?>
