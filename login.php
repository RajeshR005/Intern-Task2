<?php
$username=$_POST['username'];
$password=$_POST['password'];

if(!empty($username)||!empty($_password)) 
{
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="intern_task2";
     
    $conn =new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

    }
    else{
        $select="   SELECT username from  login where username=? Limit 1";
        $insert="INSERT  Into login(
        username, password) values(?,?)";
          
        //checking the values
          $stmt=$conn->prepare($select);
          $stmt->bind_param("s",$username);
          $stmt->execute();
          $stmt->bind_result($username);
          $stmt->store_result();
          $rnum=$stmt->num_rows;

          if($rnum==0){
            $stmt->close();
            $stmt=$conn->prepare($insert);
            $stmt->bind_param("ss",$username,$password);
            $stmt->execute();
            echo "Login Successful";
          }
             else {
                echo  "User name already exists!";
            }
            $stmt->close();
            $conn->close();
        }
    }
          else{
            echo "Need all fields to login";
            die();
          }

          ?>

          

