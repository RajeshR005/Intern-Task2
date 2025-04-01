<?php
session_start();


if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php"); 
    exit();
}

$username = $_SESSION['admin_logged_in'];
$_SESSION['view'] = "view"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
      
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #004d7a, #008793);
    color: #fff;
    display: flex;
    height: 100vh;
}




.main-content {
    margin-left: 270px;
    padding: 20px;
    flex: 1;
}

h1 {
    font-size: 28px;
}

/* Cards */
.cards {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.card {
    background: rgba(255, 255, 255, 0.2);
    padding: 20px;
    border-radius: 10px;
    width: 200px;
    text-align: center;
}

.card h3 {
    font-size: 20px;
    margin-bottom: 10px;
}



    </style>
</head>
<body>
<?php include 'sidebar.php'; ?>
    <div class="main-content">
        <h1>Welcome <?php echo $username; ?></h1>
        <p>Manage user accounts, view data, and perform administrative tasks.</p>

        <div class="cards">
            <div class="card">
                <h3>Total Users</h3>
                <p>125</p>
            </div>
            <div class="card">
                <h3>New Signups</h3>
                <p>12 Today</p>
            </div>
            <div class="card">
                <h3>Pending Requests</h3>
                <p>5</p>
            </div>
        </div>
    </div>
</body>
</html>
