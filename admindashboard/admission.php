<?php

session_start();

    $host="localhost";
    $user="root";
    $password="";
    $db="schoolproject";

    $data=mysqli_connect($host,$user,$password,$db);
    
    $sql="SELECT * from admission";

    $result=mysqli_query($data,$sql);
?>


<!DOCTYPE html>
<html>
<head>

<?php
include 'admin_css.php';
?>


</head>
<body>

	<header class="header">
		
		<a href="">Admin Dashboard</a>

		<div class="logout">
			
			<a href="../logout.php" class="btn btn-primary">Logout</a>

		</div>

	</header>

<?php

include 'admin_sidebar.php';

?>
	

	<div class="content">
        <center>
		
		<h1 > <br> ADMISSION</h1>

        <br>

        <table border="1px">
            <tr>
                <th style="padding: 10px; font-size: 15;">Name</th>
                <th style="padding: 10px; font-size: 15;"> Email</th>
                <th style="padding: 10px; font-size: 15;">Phone</th>
                <th style="padding: 10px; font-size: 15;">Message</th>
            </tr>

            <?php
            
            while($info=$result->fetch_assoc())
            {
            ?>

            <tr>
                <td style="padding: 10px;">
                    <?php echo "{$info['name']}"; ?>
                </td>
                <td style="padding: 10px;">
                    <?php echo "{$info['email']}"; ?>
                </td>
                <td style="padding: 10px;">
                    <?php echo "{$info['phone']}"; ?>
                </td>
                <td style="padding: 10px;">
                    <?php echo "{$info['message']}"; ?>
                </td>
            </tr>
            
            <?php
            
            }
            ?>



        </table>

        </center>
	</div>

</body>
</html>