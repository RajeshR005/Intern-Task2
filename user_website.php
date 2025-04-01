<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prince Banking Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            text-align: center;
        }
        .header {
            background: #004d7a;
            color: white;
            padding: 15px;
            font-size: 24px;
            display: flex;
            
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        .logo {
            height: 50px;
        }
        .nav{
            margin-left: 400px;
        }
        .nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
            
        }
        .container {
            margin-top: 20px;
            padding: 20px;
        }
        .logout-btn {
            background: red;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 20px;
           
            font-size: 16px;
            position: absolute;
            right: 20px;
            top: 10px;
        }
        h1{
            font-size: 20px;
        }
        .container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    color: #2c3e50;
}

p {
    color: #555;
}

.account-info, .transactions, .actions {
    margin-top: 20px;
    padding: 15px;
    background: white;
    border-radius: 8px;
    box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
    text-align: left;
}

h3 {
    color: #2980b9;
}

ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    background: #ecf0f1;
    padding: 8px;
    margin: 5px 0;
    border-radius: 5px;
}

button {
    background: #3498db;
    color: white;
    border: none;
    padding: 10px 15px;
    margin: 5px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}




    </style>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: index.php");
        exit();
    }
    $username = $_SESSION['user'];
    ?>

    <div class="header">
        <img src="./assests/untitled design (8).png" alt="Prince Banking Services" class="logo">
        <h1>Prince Banking Services</h1>
        <div class="nav">
            <a href="#">Home</a>
            <a href="#">Accounts</a>
            <a href="#">Transactions</a>
            <a href="#">Loans</a>
            <a href="#">Support</a>
        </div>
        <form action="logout.php" method="post" style="display:inline;">
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

    <div class="container">
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>Your trusted banking partner.</p>

    <div class="account-info">
        <h3>Account Overview</h3>
        <p><strong>Account Number:</strong> 1234 5678 9012</p>
        <p><strong>Balance:</strong> $5,250.75</p>
    </div>

    <div class="transactions">
        <h3>Recent Transactions</h3>
        <ul>
            <li>🔹 $200 - Online Shopping (Mar 30, 2025)</li>
            <li>🔹 $1,500 - Salary Credit (Mar 28, 2025)</li>
            <li>🔹 $50 - Netflix Subscription (Mar 25, 2025)</li>
        </ul>
    </div>

    <div class="actions">
        <h3>Quick Actions</h3>
        <button>Transfer Money</button>
        <button>Pay Bills</button>
        <button>View Statements</button>
    </div>

    
</div>

</body>
</html>
