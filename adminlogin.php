<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="logo-container">
        <img src="assests/Untitled design (8).png" alt="Prince Banking Services Logo" class="logo-img">
    </div><br>
    <br>
    <h2>Admin</h2>
    <form action="admin_auth.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" required=""><br><br>
        <label>Password</label>
        <input type="password" name="password" required=""><br><br>
        <button type="submit" name="log_auth" class="loginbt">Login</button>
    </form>
    <a href="index.php" class="admin">User Login</a>
    
</body>
</html>