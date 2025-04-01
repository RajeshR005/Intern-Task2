<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $user_type = $_POST['user_type'];
    $pref_name = $_POST['pref_name'];
    $password = $_POST['password'];
    $account_no = $_POST['account_no'];
    $pan_details = $_POST['pan_details'];
    
    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($address) && !empty($user_type)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "intern_task2";
        
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $select = "SELECT email, pref_name FROM create_account WHERE   email=? or pref_name=? LIMIT 1";
        $insert = "INSERT INTO create_account (fname, lname, email, phone, address, user_type, pref_name, password, account_no, pan_details) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($select);
        $stmt->bind_param("ss", $email,$pref_name);
        $stmt->execute();
        $stmt->bind_result($email,$pref_name);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if ($rnum == 0) {
            $stmt->close();
            
            $stmt = $conn->prepare($insert);
            
            $stmt->bind_param("ssssssssss", $fname, $lname, $email, $phone, $address, $user_type, $pref_name, $password, $account_no, $pan_details);
            
            if ($stmt->execute())
            $query ="SELECT password from login where  password ='$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1)
             {
                header("Location: admin_Dashboard.php");
            }
                
    if($user_type=="account_holder"){
                    header("location:index.php");
                }
            }else {
                echo "<script>alert(' Username or Email already exists!'); window.history.back();</script>";
            }
        } 
        
        $stmt->close();
        $conn->close();
    

?>
