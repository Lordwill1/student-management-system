<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup Form</title>

	<link rel="stylesheet" type="text/css" href="signup.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="school.png" class="body_deg">

	<nav>
        <label class="logo">W-School</label>

        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
        </ul>
    </nav>


    <div align="center" class="admission_form">
		
        <form action="signup_check.php" method="POST" class="signup_form">
            <div class="adm_int">
				<h1 class="texth1">Signup</h1>
                <label class="label_text" >Username</label>
                <input class="input_deg" type="text" name="username">
            </div>

            <div class="adm_int">
                <label class="label_text" >Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>

            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>

            <div class="adm_int">
				<label class="label_text">Usertype</label>
				<select class="option_text" name="user-type" id="user-type">
				<option class="option_text" value="admin">admin</option>
				<option class="option_text" value="student">student</option>
				</select>
            </div>

			<div class="adm_int">
				<label class="label_text">Password</label>
				<input class="input_deg" type="text" name="password">
            </div>
            <div>
                <input class="btn btn-primary" id="submit" type="submit" value="Signup" name="signup">
            </div>
        </form>
    </div>
	

</body>
</html>
