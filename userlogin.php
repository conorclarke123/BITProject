<?php
             //override server settings to turn error display back on
            //server configuration settings can be seen using phpinfo function (week4 Lab3 exercise 4)
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

<link href="stylesheet.css" rel="stylesheet" type="text/css"/>
</head>
 
<body>
<div class="ui container"  >  
     
	<!-- nav -->
	<div class="ui grid stackable" style="background-color:blue;">
              
		<div class="row">
                    
			<div class="four wide column ">
                           
			</div>
                    <img src="img/edumatesmall.png">
			
		</div>
	</div>
</div>

    <form action="userlogin.php" method="post">

        <h2>STUDENT LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button> <a href="register.php">Click here to register an account</a>
  <p>
            
        </p>
    
     </form>
 
<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

   

        $sql = "SELECT * FROM STUDENT WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

               

                header("Location: home.php");

                exit();

            }else{

                header("Location: userlogin.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: userlogin.php?error=Incorect User name or password");

            exit();

        }

    }
    ?>
</body>
</html>

