
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="max-width: 500px;margin-left:32%;">
<div class="card mt-5">
                    <div class="card-header">
                        <h4>Change password</h4>
                    </div>
                    <div class="card-body">
<form action="changed.php" method="POST">
                            <div class="froum-group mb-3">
                                <label for="">enter the user id you want to change the password of</label>
                                <input type="text" name="user_id" class="form-control"required>
                            </div>
                            <div class="froum-group mb-3">
                                <label for="">enter the old password</label>
                                <input type="password" name="oldpassword" class="form-control" required>
                            </div>
                           
                            <div class="froum-group mb-3">
                                <button type="submit" name="continue" class="btn btn-primary"></a>Continue</button>
                            </div>
    </form>
    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>