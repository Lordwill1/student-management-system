<?php
error_reporting(0);
session_start();
session_destroy();


if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];

    echo "
    <link rel='stylesheet' type='text/css' href='signup.css'>


    <script type='text/javascript'>
        function showAlert(message) {
            var alertBox = document.createElement('div');
            alertBox.className = 'alert-box';
            alertBox.innerHTML = message + '<button onclick=\"this.parentElement.style.display=\'none\';\">&times;</button>';
            document.body.appendChild(alertBox);

            setTimeout(function() {
                alertBox.style.display = 'none';
            }, 8000); // Hide after 8 seconds
        }

        document.addEventListener('DOMContentLoaded', function() {
            showAlert('$message');
        });
    </script>
    ";
}
?>