// // Fetch logged dates from PHP variable
// var loggedDates = <?php echo json_encode($logged_dates); ?>;

// // Check if logged dates array is not empty
// if (loggedDates && loggedDates.length > 0) {
//     // Loop through the logged dates array
//     loggedDates.forEach(function(date) {
//         // Get the element corresponding to the logged date and add class 'marked'
//         var markedDateElement = document.querySelector(`[data-date="${date}"]`);
//         if (markedDateElement) {
//             markedDateElement.classList.add('marked');
//         }
//     });
// }
