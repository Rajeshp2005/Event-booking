
<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
</head>
<body>
    <h2>Welcome to My Profile</h2>
    <form action="changepassword.php" method="post">
        <label for="name">Name:</label>
        <input type="name" name="name" required>
        <label for="oldpassword">Old Password:</label>
        <input type="password" name="oldpassword" required>
        <br>
        <label for="newpassword">New Password:</label>
        <input type="password" name="newpassword" required>
        <br>
        <input type="submit" value="Change Password">
    </form>
    <br>
    <a href="/admin,guest,member/front.php">Logout</a>
</body>
</html>
