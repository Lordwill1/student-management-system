<?php
session_start(); // Ensure the session is started

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];

    echo "
    <link rel='stylesheet' type='text/css' href='style.css'>


    <script type='text/javascript'>
        function showAlert(message) {
            var alertBox = document.createElement('div');
            alertBox.className = 'alert-box';
            alertBox.innerHTML = message + '<button onclick=\"this.parentElement.style.display=\'none\';\">&times;</button>';
            document.body.appendChild(alertBox);

            setTimeout(function() {
                alertBox.style.display = 'none';
            }, 5000); // Hide after 5 seconds
        }

        document.addEventListener('DOMContentLoaded', function() {
            showAlert('$message');
        });
    </script>
    ";
}
?>
