<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Workout Tracker</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="styles.css"> <!-- Add your custom CSS file here -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
</head>
<body>
    <header>
        <h1>Women's Workout Tracker</h1>
    </header>

    <!-- Calendar for tracking exercises -->
    <div id="calendar"></div>

    <!-- Buttons to mark exercises -->
    <div class="exercise-buttons">
        <button class="markExercise" data-exercise="Chest">Chest</button>
        <button class="markExercise" data-exercise="Back">Back</button>
        <button class="markExercise" data-exercise="Legs">Legs</button>
        <button class="markExercise" data-exercise="Abs">Abs</button>
        <button class="markExercise" data-exercise="Arms">Arms</button>
        <button class="markExercise" data-exercise="Cardio">Cardio</button>
    </div>

    <!-- Form for tracking exercise progress -->
    <form id="progress-form">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br>

        <label for="exercise">Exercise:</label>
        <input type="text" id="exercise" name="exercise" required><br>

        <label for="sets">Sets:</label>
        <input type="number" id="sets" name="sets" required><br>

        <label for="notes">Notes:</label>
        <textarea id="notes" name="notes"></textarea><br>

        <button type="submit">Add Progress</button>
    </form>

    <!-- Table to display exercise progress -->
    <table id="progress-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Exercise</th>
                <th>Sets</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table body will be dynamically populated with JavaScript -->
        </tbody>
    </table>

    <script>
        // Function to mark an exercise on the calendar
        function markExercise(exercise) {
            // Get today's date
            var today = moment().format('YYYY-MM-DD');

            // Add a new event for the selected exercise category
            $('#calendar').fullCalendar('renderEvent', {
                title: exercise + ' Workout',
                start: today,
                allDay: true
            });

            // Display confirmation message
            alert('Exercise marked on the calendar!');
        }

        $(document).ready(function() {
            $('#calendar').fullCalendar({
                // Set up calendar options here
                defaultView: 'month',
                editable: true,
                eventLimit: true
            });

            // Add event listener to all exercise buttons
            $('.markExercise').on('click', function() {
                var exercise = $(this).data('exercise');
                markExercise(exercise);
            });

            // Add event listener to form submission for tracking progress
            const form = document.getElementById("progress-form");
            const table = document.getElementById("progress-table").getElementsByTagName("tbody")[0];

            form.addEventListener("submit", function(event) {
                event.preventDefault();
                
                const date = document.getElementById("date").value;
                const exercise = document.getElementById("exercise").value;
                const sets = document.getElementById("sets").value;
                const notes = document.getElementById("notes").value;

                const newRow = table.insertRow();

                const dateCell = newRow.insertCell(0);
                const exerciseCell = newRow.insertCell(1);
                const setsCell = newRow.insertCell(2);
                const notesCell = newRow.insertCell(3);

                dateCell.textContent = date;
                exerciseCell.textContent = exercise;
                setsCell.textContent = sets;
                notesCell.textContent = notes;

                form.reset();
            });
        });
    </script>
</body>
</html>
