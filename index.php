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
    
    <h2>Login Here!</h2>
    
    
    <form action="user_login.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" required=""><br><br>
        <label>Password</label>
        <input type="password" name="password" required=""><br><br>
        <button type="submit" name="log_auth" class="loginbt">Login</button><br><br>
        <label>Don't have an account?<span><a href="createaccount.php" >Create Account</a></span></label>
        
      
        
    </form>
    
    <a href="adminlogin.php" class="admin">Admin login</a>
    
   
</body>
</html>