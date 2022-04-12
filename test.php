<?php
include "db_conn.php";
$queryread = "SELECT * FROM STUDENT";
        $resultread = $conn -> query($queryread);
        
        if(!$resultread){
            echo $conn-> error;
        }
        
  $queryread2 = "SELECT * FROM COURSEDETAILS WHERE course_complete= 0";
        $resultread2 = $conn -> query($queryread2);
        
        if(!$resultread2){
            echo $conn-> error;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>EduMate</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #00cccc;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>



<div class="content">
    <h2><img src="img/edumatetiny.png"> <a href="home.php" <button class="button button2"><img src="img/plus.png" width="50" height="50" </button></a><a href="home.php" <button class="button button2"><img src="img/chat.png" width="50" height="50" </button></a><a href="home.php" <button class="button button2"><img src="img/menu.png" width="50" height="50" </button></a></h2>
  <p> <?php
             
             while($row2 = $resultread->fetch_assoc()){
                 
                 $username = $row2["username"];
             
             echo "<h1>Welcome back $username</h1>" ;
             }
                 ?>
      <a href="home.php" <button class="button button2">In Progress </button></a> <a href="homecompleted.php" <button class="button button4">Completed</button></a>
  
      
  
  </p>
  <?php
             
             while($row3 = $resultread2->fetch_assoc()){
                 
                 $courseid = $row3["course_id"];
                 $coursename = $row3["course_name"];
                 $courseimg = $row3["course_img"];
                 
           echo"
  <div class='gallery'>
  <a target='_blank' href='#'>
    <img src='$courseimg' alt='' width='600' height='400'>
  </a>
  <div class='desc'>$coursename</div>
             </div>";}?>



</body>
</html>