<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Calendar</title>
    <style>
        .calendar {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            border-collapse="collapse"

        }

        .calendar h2 {
            text-align: center;
        }

        .calendar .month {
            display: flex;
            flex-wrap: wrap;
        }

        .calendar .day {
    width: calc(100% / 7);
    text-align: center;
    padding: 10px;
    border: 1px solid #ccc;
    box-sizing: border-box; /* Ensure padding is included in the width calculation */
}
.marked {
    background-color: #ffcc00;
    color: #000;
    border: 1px solid #ccc;
    box-sizing: border-box; /* Ensure padding and border are included in dimensions */
}




    </style>
</head>
<body>
    <div class="calendar">
        <h2>Exercise Calendar</h2>
        <?php 
        // Include display_calendar.php to display the calendar
        include 'display_calendar.php'; 
        ?>
    </div>
</body>
</html>
