<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        // Serialize the form data
        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();

        xhr.open("POST", "bookhere.php", true);

        xhr.onload = function () {
            if (xhr.status === 200) {
                try {
                    const response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // If booking is successful, show a confirmation alert
                        alert("Booking saved successfully!");
                    } else {
                        // If there's an error, display the error message in an alert
                        alert("Error: " + response.error);
                    }
                } catch (error) {
                    alert("An error occurred while processing the request.");
                }
            }
        };

        xhr.send(formData);
    });
});
</script>
