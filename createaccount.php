<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Account</title>
    <link rel="stylesheet" href="css/createaccount.css">
</head>
<body>
<div class="container">
    <h2>Create Your Account</h2>
    <div class="form-wrapper">
        <form action="successfulcreation.php" method="POST">
            <div class="form-left">
                <div class="row">
                    <div class="col">
                        <label>First Name</label>
                        <input type="text" name="fname" required>
                    </div>
                    <div class="col">
                        <label>Last Name</label>
                        <input type="text" name="lname" required>
                    </div>
                </div>

                <label>Email</label>
                <input type="email" name="email" required>

                <label>Phone Number</label>
                <input type="tel" name="phone" required>

                <label>Address</label>
                <textarea name="address" required></textarea>

                <label>User Type</label>
                <select name="user_type" id="user_type" required>
                    <option value="">Select</option>
                    <option value="admin">Admin</option>
                    <option value="account_holder">Account Holder</option>
                </select>

                <button type="submit">Create Account</button>
            </div>

            
            <div class="form-right" id="account_holder_fields" style="display: none;">
                <h4>Account Holder Info</h4>
                <label>Preferred Username</label>
                <input type="text" name="pref_name">

                <label>Password</label>
                <input type="password" name="password">

                <label>Account Number</label>
                <input type="text" name="account_no">

                <label>PAN Details</label>
                <input type="text" name="pan_details">
            </div>

            
            <div class="form-right" id="admin_fields" style="display: none;">
                <h4>Admin Password Verification</h4>
                <label>Admin Password</label>
                <input type="password" name="password">
            </div>
        </form>
    </div>
</div>

<script>
    const userTypeSelect = document.getElementById('user_type');
    const accountHolderFields = document.getElementById('account_holder_fields');
    const adminFields = document.getElementById('admin_fields');

    userTypeSelect.addEventListener('change', function () {
        const selected = this.value;
        if (selected === "account_holder") {
            accountHolderFields.style.display = 'block';
            adminFields.style.display = 'none';
        } else if (selected === "admin") {
            adminFields.style.display = 'block';
            accountHolderFields.style.display = 'none';
        } else {
            accountHolderFields.style.display = 'none';
            adminFields.style.display = 'none';
        }
    });
</script>
</body>
</html>
