<?php
include "db_conn.php";
include "server.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>EduMate</title>
		<!-- links to load UI framework CSS-->	 
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" crossorigin="anonymous"> </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
 
<body>
<div class="ui container"  >  
     
	<!-- nav -->
        <div class="ui grid stackable" style="background-color:#00cccc;">
              
		<div class="row">
                    
			
                    <img src="img/edumatesmall.png">
			
			
		</div>
	</div>
        
        
      
    <p>
            
            
    </p>
    <div class="header">
    <h2>Register</h2>
    </div>
    
    <form method="post" action="register.php">
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="firstname" value="">
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lastname" value="">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" value="">
        </div>
        <div class="input-group">
            <label>Teacher ID</label>
            <input type="text" name="teacherid" value="">
        </div>
        <div class="input-group">
            <label>Teacher Name</label>
            <input type="text" name="teachername" value="">
        </div>
        <div class="input-group">
            <label>DOB</label>
            <input type="text" name="DOB" value="">
        </div>
        <div class="input-group">
            <label>Academic Standard</label>
            <input type="text" name="academicstandard" value="">
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <label>Marketing Emails</label>
            <input type="text" name="marketingemails">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="userlogin.php">Login</a>
        </p>
    </form>
    
    

		


        
        
	</div>
</div>
</body>
</html>