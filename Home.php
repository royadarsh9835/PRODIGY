<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Welcome page</title>
<style>

body {
   
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(238, 229, 229);
            background-image: url('img.jpg');
              background-repeat: no-repeat;
          background-size: cover;  
        }
        
        h1{
            text-align: center;
            padding-top: 15%;
        }
        nav {
            text-align: center;
            margin-top: 50px;
            float: center;
            
        }
        nav a {
            text-decoration: none;
            color: #060606;
            padding: 15px 30px;
            margin: 0 10px;
            
            border-radius: 10px;
            background-color:#030303;
            transition: background-color 0.3s ease;
            background: linear-gradient(to right,  #f9fd11, hsl(110, 98%, 48%));
            border-radius: 10px;
            box-shadow: rgba(223, 229, 227, 0.2) 0px 7px 29px 0px;
            cursor: pointer;
            font-weight: bold;
        }
        nav a:hover {
            background-color: #ddd;
            
             background: white;
             outline: 1px solid rgb(230, 227, 227);
              color: rgb(24, 22, 22);
                   border: none;
  }
    
</style>
</head>
<body>
    <h1>Welcome Secure User 
        Authentication</h1>
        <nav>
            <a href="Register.php">Registration</a>
            <a href="login.php">Login</a>
        </nav>
    
</body>
</html>