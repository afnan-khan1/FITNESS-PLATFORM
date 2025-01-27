document.addEventListener("DOMContentLoaded", function() {
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