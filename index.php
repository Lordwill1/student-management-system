
<?php
error_reporting(0);
session_start();
session_destroy();


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


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student management system</title>
    <link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <label class="logo">W-School</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>

            <li><a href="signup/signup.php" class="btn btn-warning">Signup</a></li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_text">
            We Teach Students With Care
        </label>
        <img class="main_img" src="school.png" alt="school front view">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-4">
            <img class="welcome_img" src="schoolface.png" alt="Classroom">
        

            </div>

            <div class="col-md-8">

             <h1>Welcome to W-School</h1>

                <p>
                W International School is a co-educational institution. 
                W International School specializes in producing individuals of international repute. 
                To this end, the curriculum of GIS is structured to prepare students for global success. 
                Both teachers and students work as a team to ensure that students achieve their full potential. 
                We inspire our students to become excellent individuals who enjoy life and contribute to the lives of others. 
                With our state of the art hostels, classes and more, our students feel at home, though, away from home. 
                All students are encouraged to take an active part in the life of the school, participating in sporting, academic and national events. 
                Students are encouraged to take responsibilities for their actions, and to behave in a mature and sensible way at all times, both in the school and outside the school.
                </p>
            </div>

        </div>

    

    </div>

    <center>
        <h1>Our Teachers</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="teacher1.jpg">
                <p>My name is Sales guru, I am cream of well informed and qualified lead-learners with a passion for the young minds to help them realize their full potentials.</p>

            </div>

            <div class="col-md-4">
                <img class="teacher" src="teacher3.jpg">
                <p>My name is Cynthia, I am cream of well informed and qualified lead-learners with a passion for the young minds to help them realize their full potentials.</p>

            </div>

            <div class="col-md-4">
                <img class="teacher" src="teacher2.jpg">
                <p>My name is Joshua, I am cream of well informed and qualified lead-learners with a passion for the young minds to help them realize their full potentials.</p>

            </div>
            
        </div>
    </div>

    <center>
        <h1> <br> <br>Our Courses</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="courses" src="webdev.jpg">
                <h3>Web Developer</h3>

            </div>

            <div class="col-md-4">
                <img class="courses" src="graphics.jpg">
                <h3>Graphics Designer</h3>

            </div>

            <div class="col-md-4">
                <img class="courses" src="marketing.jpg">
                <h3>Marketing</h3>

            </div>
            
        </div>
    </div>

    <center>
        <h1>Admission Form</h1>
    </center>

    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text" >Name</label>
                <input class="input_deg" type="text" name="name">
            </div>

            <div class="adm_int">
                <label class="label_text" >Email</label>
                <input class="input_deg" type="text" name="email">
            </div>

            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>

            <div class="adm_int">
                <label class="label_text" >Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>
            <div>
                <input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
            </div>
        </form>
    </div>

    <footer>
        <h3 class="footer_txt">All @copyright reserved by Silicon Africa</h3>
    </footer>
</body>
</html>