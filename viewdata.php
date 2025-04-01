<?php
session_start();


if (!isset($_SESSION['view'])) {
    header("Location: index.php"); 
    exit();
}



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <style>
        body{
            background: linear-gradient(to right, #004d7a, #008793);
        }
        table {
    width: 70%;
    border-collapse: collapse;
    font-family: 'Arial', sans-serif;
    margin-left: 300px;
    margin-top: 50px;
    

    
  
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #4CAF50;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 1px;
}

td {
    background-color: #f9f9f9;
    color: #333;
    font-size: 14px;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}




td:hover {
    background-color: #e1e1e1;
}

th, td {
    transition: background-color 0.3s ease;
}

table caption {
    font-size: 1.5em;
    margin: 20px 0;
    color: #333;
}

table, th, td {
    border: 1px solid #ddd;
}

table {
    border-radius: 10px;
    overflow: hidden;
}

    </style>
</head>
<body>
<?php include 'sidebar.php'; ?>
    <table>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>User type</th>
        <th>preferred Username</th>
        <th>Password</th>
        <th>Account Number</th>
        <th>Pan Details</th>
        </tr>
        <?php
        $conn =mysqli_connect("localhost","root","","Intern_task2");
      
        $sql="SELECT  fname, lname, email, phone, address, user_type, pref_name, password, account_no, pan_details FROM create_account";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
             echo "<tr><td>".$row["fname"]. "</td><td>".$row["lname"]."</td><td>".$row["email"]. "</td><td>".$row["phone"]. "</td><td>".$row["address"]. "</td><td>".$row["user_type"]. "</td><td>".$row["pref_name"]. "</td><td>".$row["password"]."</td><td>".$row["account_no"]. "</td><td>".$row["pan_details"]."</td></tr>" ;

            }
        }
        $conn->close()
        ?>

    </table>
    
</body>
</html>