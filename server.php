<?php
session_start();
include("db_conn.php");

$username="";
$email="";
$errors = array();

if(isset($_POST['reg_user'])){
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $teacherid = mysqli_real_escape_string($conn, $_POST['teacherid']);
    $teachername = mysqli_real_escape_string($conn, $_POST['teachername']);
    $dob = mysqli_real_escape_string($conn, $_POST['DOB']);
    $academicstandard = mysqli_real_escape_string($conn, $_POST['academicstandard']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
    $marketing = mysqli_real_escape_string($conn, $_POST['marketingemails']);
    
    if(empty($username)){ array_push($errors, "Username is required");}
    if(empty($email)){ array_push($errors, "Email is required");}
    if(empty($password_1)){ array_push($errors, "Password is required");}
    
    if($password_1 != $password_2){
        array_push($errors, "The two passwords do not match");
    }
    
    $user_check_query = "SELECT * FROM STUDENT WHERE username='$username'OR email='$email' LIMIT 1";
    $result= mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if($user){
        if($user['username'] === $username){
            array_push($errors, "Username already exists");
        }
        
        if($user['email'] === $email){
            array_push($errors, "email already exists");
        }
    }
    
    if(count($errors)==0){
        $password = $password_1;
        
        $query = "INSERT INTO STUDENT (first_name, last_name, email, teacher_id, teacher_name, dob, academic_standard, username, password, marketing_emails) VALUES ('$firstname', '$lastname', '$email', '$teacherid', '$teachername', '$dob', '$academicstandard', '$username', '$password', '$marketing')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: home.php');
    }
}

    

	
?>