<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

if(!empty($username)||!empty($password)) 
{
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="intern_task2";
     
    $conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
    if(isset($_POST['log_auth']))

    {
      echo $user =$_POST['username'];
      echo $pass =$_POST['password'];
    }
    $query ="SELECT username,password from login where username='$user' and password ='$pass'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1)
    { $_SESSION['admin_logged_in'] = $username;
      header("location:admin_Dashboard.php");
    }
    else{
      echo "Username or password is incorrect";
    }


  }
  ?>

          

