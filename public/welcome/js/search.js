$(document).ready(function() {
    // Handle form submission
    $('#search-form').submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Get the form data
        var formData = $(this).serialize();

        // Send an AJAX request to perform the search
        $.ajax({
            url: '/search', // Replace with the actual search endpoint URL
            type: 'GET',
            data: formData,
            success: function(response) {
                // Handle the search results
                // Update the UI with the search results
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.error(error);
            }
        });
    });
});
