<!DOCTYPE html>
<html>
<head>
    <title>Welcome to the Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background: url(/img/login.avif)no-repeat,rgba(0, 0, 0, 0.8);
            background-size: cover;
          
            
        }
        
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0);
        }
        
        .hello {
            width: 24%;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0);
            text-align: justify;
            align-items: center;
            justify-content: center;
        }
        h1 {
            text-align: center;
            color: black;
            font-size: 2rem;
            margin-bottom: 60px;
            
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
            font-size: 1.5rem;
            text-decoration: none;
            color: black;
            
            
        }
        
        .btn:hover {
            background-color: wheat;
            transition: all .3s ease-in;
        }
        
       
        .fa {
            
            margin-right: 10px;
            

        
        }
      

    </style>
</head>
<body>
    <div class="container fade-in">
        <h1><em><u>TASBIR:WE CLICK FOR MEMORIES</u></em></h1>
        </div>
       
        <div class="hello">
            <a href="/php/login.php" class="btn"><i class="fas fa-user"></i><em> Member Login</em></a>
            <a href="/php/index1.php" class="btn"><i class="fas fa-eye"></i> <em>Visitor Login</em></a>
            <a href="/php/regestration.php" class="btn"><i class="fas fa-user-plus"></i> <em>Register</em></a>
        </div>
   
    
</body>
</html>
