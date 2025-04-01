
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    
    color: #fff;
    display: flex;
    
}     
.sidebar {
    width: 250px;
    background: #222;
    padding: 20px;
    position: fixed;
    height: 100%;
    left:-15px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}

.sidebar h2 {
    color: #00bf72;
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    padding: 12px;
}

.sidebar ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    display: block;
    transition: 0.3s;
}

.sidebar ul li a:hover {
    background: #444;
    padding-left: 10px;
}
.logout {
    color: red !important;
    font-weight: bold;
}

    </style>

<div class="sidebar">
        <a href="admin_Dashboard.php" style="text-decoration:none;"><h2>Admin Panel</h2></a>
        <ul>
            <li><a href="viewdata.php">📂 View Users</a></li>
            <li><a href="createaccount.php">➕ Create Account</a></li>
            <li><a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=intern_task2">⚙️ Manage Database</a></li>
            
            <li><a href="logout.php" class="logout">🚪 Logout</a></li>
        </ul>
    </div>
