<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW PASSWORD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="max-width: 400px;margin-left:30%;margin-top:5%;">
        <form action="finalnew.php" method="post">
        <div class="froum-group mb-3">
                                <label for="">user_id again</label>
                                <input type="text" name="user_id" class="form-control"required>
                            </div>
             <div class="froum-group mb-3">
                <label for="">enter the new password</label>
                    <input type="password" name="newpassword" class="form-control" required>
                    </div>
                    <div class="froum-group mb-3">
                                <button type="submit" name="changepassword" class="btn btn-primary"></a>Change password</button>
                            </div>
                 </form>           
</body>
</html>