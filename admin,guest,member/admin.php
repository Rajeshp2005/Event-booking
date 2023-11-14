<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f7f7f7;
        }

        .dashboard {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
        }

        .account-status {
            margin-bottom: 20px;
        }

        .account-status span {
            font-weight: bold;
            color: #333;
        }

        .booking-info {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Admin Dashboard</h1>

        <div class="account-status">
            <p>Account Status: <span>Active</span></p>
            <form action="/php/login.php" method="POST">
                <input type="submit" name="status" value="Deactivate Account">
            </form>
        </div>

        <div class="booking-info">
            <p>Number of Events Booked: <span>5</span></p>
        </div>
    </div>
</body>
</html>
