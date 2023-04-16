<?php
session_start();
$user_check = (isset($_SESSION['username']) && trim($_SESSION['username'])!='')?trim($_SESSION['username']):false;
if(!$user_check) header("Location: ../index.html");
else{
    // $ses_sql = mysqli_query($db,"SELECT username FROM users WHERE username='$user_check' ");
    // $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC); 
    // $$_SESSION['username']=$row['username'];
}
?>