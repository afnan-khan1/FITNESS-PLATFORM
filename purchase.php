<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Plan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Purchase a Plan</h1>
    <form action="process_purchase.php" method="POST">
        <h2>Fitness Plans</h2>
        <div>
            <input type="radio" id="plan1" name="plan" value="1_month" required>
            <label for="plan1">1 Month - $50</label>
        </div>
        <div>
            <input type="radio" id="plan2" name="plan" value="6_months">
            <label for="plan2">6 Months - $250</label>
        </div>
        <div>
            <input type="radio" id="plan3" name="plan" value="1_year">
            <label for="plan3">1 Year - $450</label>
        </div>

        <h2>Nutrition Plan</h2>
        <div>
            <input type="radio" id="nutrition" name="plan" value="nutrition">
            <label for="nutrition">Nutrition Plan - $150 per month</label>
        </div>

        <h2>Group Workout Sessions</h2>
        <div>
            <input type="radio" id="group_workout" name="plan" value="group_workout">
            <label for="group_workout">Group Workout - $20 per session</label>
        </div>

        <button type="submit">Purchase</button>
    </form>
</body>
</html>
