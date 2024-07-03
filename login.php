<?php      
    require "connection.php";

    if(isset($_POST["register"]))
    {
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($connection, $email);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $sqli = "select *from register where email = '$email' and password = '$password'";  
        $result = mysqli_query($connection, $sqli);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            header("Location:UserProfile.php");     
        }  
        else{  
            echo "<h1> Invalid Username and Password</h1>"; 
           
        }
       
    }  
   
?>  




<!DOCTYPE html>
<html>
<head> 
    <title>Login Page</title>
    <style>

        .container {
    margin: 90px;
   margin-left:350px;
    padding: 30px;
    float: center;
    position: center;
    width: 400px;
    height:300px ;
    text-align: left;
    background-color: #080808;
    border: 10px solid #f9661c;
    border-radius: 7px;
    box-shadow: 0 0 10px rgba(9, 9, 9, 0.987);
    
}

h1 {
    font-size: 24px;
}

form {
    text-align: right;
    
}
h2{
    text-align: center;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    position: center;
    
    
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 2px solid #fa7533;
    border-radius: 5px;
    margin-right: 20%;
}

button{
width: 20%;
    
  padding: 5px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}
div{
    
    background: transparent;
    

}
form{
      color: #0d0d0d;
      padding: 50px; 
      margin-right:100%;
      padding-right: 100%;
  
        
}


.container{
    background: transparent;
    
}

.label{

    padding: 20px;
    
}
h1{
    color: #09035f;
    margin-left: 10%;

}


p{
    font-family: 'sans-serif';
    
    font-display: block;

}
    
    table {
      border-collapse: collapse;
      width: 100%;
      tab-size: 2%;
      
    }

   
  body{
    background-color: rgb(250, 244, 244);
  }
  


    </style>
</head>
<body>
    
       
   
<center>

    
<form action="login.php" method="POST">
        <div class="container">
            <h2>Login</h2>
            
            <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit"name="register">LogIn</button>
      
      <label>
      <p>Don't have an account? <a href="register.php">Register here</a></p>
      
      </label>
        
        </div>
    </center> 
               
</body>
</html>
