<!DOCTYPE html>
<html>
<head>
    <title>Welcome to the Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background: url(/img/wed1.jpg)no-repeat;
            background-size: cover;
            background-position: absolute;
        }
        
        .container {
            width: 850px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0);
        }
        
        h1 {
            text-align: center;
            color: black;
            font-size: 2rem;
            margin-bottom: 60px;
            
        }
        p{
            text-align: center;
            justify-content: center;
            color: black;
            font-size:2rem;
        }
        
        .btn {
           
            display: flex;
            flex-direction: row;
            text-align: center;
            justify-content: center;
            cursor: pointer;
            padding: 10px 20px;
            margin: 50px;
            border-radius: 10px;
            font-weight: bold;
            text-decoration: none;
            color: black;
            transition: all .3s ease-in;
            
        }
        
        .btn:hover {
            background-color: wheat;
            
        }
        
       
        .fa {
            
            margin-right: 10px;
            

        
        }
      

    </style>
</head>
<body>
    <div class="container fade-in">
        <h1><em><u>WELCOME TO TASBIR:WE CLICK FOR MEMORIES</u></em></h1>
        <p><em><strong><u>please select an option:</u></em></strong></p>
        <div class="hello">
            <a href="http://127.0.0.1:8000/admin/login/?next=/admin/" class="btn"><i class="fas fa-lock"></i><em> Admin Login</em></a>
            <a href="/php/login.php" class="btn"><i class="fas fa-user"></i><em> Member Login</em></a>
            <a href="/php/index1.php" class="btn"><i class="fas fa-eye"></i> <em>Visitor Login</em></a>
            <a href="/php/regestration.php" class="btn"><i class="fas fa-user-plus"></i> <em>Register</em></a>
        </div>
    </div>
    
</body>
</html>
