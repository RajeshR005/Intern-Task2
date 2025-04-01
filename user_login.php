<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

if(!empty($username)||!empty($_password)) 
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
    $query ="SELECT pref_name,password from create_account where pref_name='$user' and password ='$pass'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1)
    {
      $_SESSION["user"]=$username;
      header("location:user_website.php");
    }
    else{
      echo "Username or password is incorrect";
    }


  }
  ?>

          

