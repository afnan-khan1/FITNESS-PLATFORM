<!-- // Start the session -->
<?php
// Establish MySQL connection
$mysqli = new mysqli("localhost", "root", "", "OpticFitnessDB");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get the logged user's email from the session
$user_email = $_SESSION['user_email'] ?? '';

// Function to get the number of days in a month
function getDaysInMonth($month, $year) {
    return cal_days_in_month(CAL_GREGORIAN, $month, $year);
}

// Get the current month and year
$month = isset($_GET['month']) ? intval($_GET['month']) : date('n');
$year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');

// Fetch logged exercises for the current month from the database
$logged_exercises = [];
if ($user_email) {
    $sql = "SELECT DAY(log_date) AS day, exercise_name FROM exercise_logs WHERE user_email = ? AND MONTH(log_date) = ? AND YEAR(log_date) = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sii", $user_email, $month, $year);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $logged_exercises[$row['day']][] = $row['exercise_name'];
    }

    $stmt->close();
}

// Close the connection
$mysqli->close();
?>

<!-- Display Logged Exercises -->
<div class="logged-exercises">
    <h2>Logged Exercises for <?php echo date('F Y', mktime(0, 0, 0, $month, 1, $year)); ?></h2>
    <?php if (empty($logged_exercises)) : ?>
        <p>No exercises logged for this month.</p>
    <?php else : ?>
        <ul>
            <?php foreach ($logged_exercises as $day => $exercises) : ?>
                <li>
                    <strong><?php echo date('F', mktime(0, 0, 0, $month, $day, $year)) . ' ' . $day; ?>:</strong>
                    <?php echo implode(', ', $exercises); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>

<!-- Display Calendar -->
<div class="calendar">
    <h2>Exercise Calendar - <?php echo date('F Y', mktime(0, 0, 0, $month, 1, $year)); ?></h2>
    <div class="month">
        <?php
        $days_in_month = getDaysInMonth($month, $year);
        for ($day = 1; $day <= $days_in_month; $day++) {
            $date = date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));
            $marked = isset($logged_exercises[$day]) ? 'marked' : '';
            echo '<div class="day ' . $marked . '" data-date="' . $date . '">';
            echo '<span>' . $day . '</span>';
            echo '</div>';
        }
        ?>
    </div>
    <style>
    .navigation button {
        background-color: #007bff; /* Blue color */
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px;
    }

    .navigation button a {
        text-decoration: none; /* Remove underline from the links */
        color: inherit; /* Inherit color from the parent */
    }

    .navigation button:hover {
        background-color: #0056b3; /* Darker shade of blue on hover */
    }
</style>

    <div class="navigation">
       <button ><a href="?month=<?php echo ($month == 1) ? 12 : $month - 1; ?>&year=<?php echo ($month == 1) ? $year - 1 : $year; ?>">Previous Month</a></button>
       <button> <a href="?month=<?php echo ($month == 12) ? 1 : $month + 1; ?>&year=<?php echo ($month == 12) ? $year + 1 : $year; ?>">Next Month</a></button>
       <button>  <a href="?month=<?php echo $month; ?>&year=<?php echo $year - 1; ?>">Previous Year</a></button>
       <button>   <a href="?month=<?php echo $month; ?>&year=<?php echo $year + 1; ?>">Next Year</a></button>
       <button><a href="?month=<?php echo date('n'); ?>&year=<?php echo date('Y'); ?>">Current Month</a></button>
       <button><a href="../index.php">Go back to homepage</a></button>



    </div>
</div>
