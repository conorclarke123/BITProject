<?php
include "db_conn.php";

        
  $queryread2 = "SELECT * FROM ACHIEVEMENTS WHERE achievement_id= 4";
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



  .container {
        display: flex;
        align-items: center;
        justify-content: center
      }
      img {
        max-width: 100%
      }
      .image {
        flex-basis: 70%;
        order: 2;
      }
      .text {
        color: #CD5C5C;
        padding-right: 20px;
        font: italic 10px "Fira Sans", serif;
      }
</style>
</head>
<body>

<div class="sidenav">
    <a href="home.php"><img src="img/homeicon.png" width="50" height="50"> Home</a>
    <a href="achievementsunlocked.php"><img src="img/achievements.png" width="50" height="50"> Achievements</a>
  <a href="#"><img src="img/progressicon.png" width="60" height="50"> Progress</a>
  <a href="#"><img src="img/difficultyicon.png" width="60" height="50"> Difficulty</a>
  <a href="#"><img src="img/bookclub.png" width="60" height="50"> Book Club</a>
  <a href="logout.php"><img src="img/logout.png" width="60" height="50"> Log Out</a>
</div>

<div class="content">
    <h2><img src="img/edumatetiny.png"></h2>
  <p> 
      
  </p>
  <?php
             
             while($row3 = $resultread2->fetch_assoc()){
                 
                 $achievementid = $row3["achievement_id"];
                 $achievementname = $row3["achievement_name"];
                 $achievementimg = $row3["achievement_img"];
                 $achievementdescription = $row3["achievement_description"];
                 
                 echo"' <div class='container'>
      

<div class='image'>
        <img src='img/locked.png'>
      </div>
      <div class='text'>
        <h1></h1>
      </div>
    </div>";
                 
             }?>


</body>
</html>