<?php 

require "connection.php";

if(isset($_POST["register"]))
{
    $Firstname = $_POST["Firstname"];
    $Lastname = $_POST["Lastname"];
    $birthdate = $_POST['birthdate'];
    $email=$_POST["email"];
    $password= $_POST["password"];

    $insertQuery = "INSERT INTO `register`( `Firstname`, `Lastname`, `birthdate`, `email`, `password`) VALUES ('$Firstname','$Lastname','$birthdate','$email','$password')";
    $result = mysqli_query($connection, $insertQuery);

    if($result)
    {
        echo "<script>alert('Registeration Successfull')</script>";
        header("Location: UserProfile.php");      

    }
    else
    {
        die("Error" . mysqli_error($connection));
    }
}
?> 





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration Form</title>
 <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f8ebeb;
  margin: 0;
  padding: 0;
  background-image: url('p3.jpg');
  background-repeat: no-repeat;
    background-size:cover;

}
.form{
    color: #060606;
      padding: 50px; 
    margin: top 20%; ;
    
    
}

.container {
  color:rgb(4, 4, 4);
  font-weight: bold;
    
   float: center;
   margin-left: 30%;
   margin-right: 50%;
    padding:50px;
    border: 10px solid #fc873a;
    border-radius: 7px;
    box-shadow: 0 0 10px rgba(8, 8, 8, 0.987);
    background: transparent;
    box-sizing: 20px;
    width: 30%;
    margin-top: 3%;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  margin-bottom: 5px;
}

.input-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #f57438;
  border-radius: 5px;
  
    padding: 10px;
    margin-bottom: 10px;
    border: 2px solid #f36130;
    border-radius: 4px;
}


.input-group button {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}

.input-group button:hover {
  background-color: #0056b3;
}
h3 a{
  width: 20%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
  background-color: #0056b3;
}
 </style>
</head>
<body>
  <div class="container">
  <form action="Register.php" method="POST">
      <h2>Sign In</h2>
      <div class="input-group">
        <label for="username">First Name</label>
        <input type="text" id="Firstname" name="Firstname" required>
      </div>
      <div class="input-group">
        <label for="username">Last Name</label>
        <input type="text" id="Lastname" name="Lastname" required>
      </div>
      <div class="input-group">
        <label>Birth Date</label>
        <input type="date" placeholder="Enter birth date" name="birthdate" required />
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="input-group">
        <button type="submit"name="register">Sign In</button>
        <!-- <h3><br> <a href="login.php">Login</a></h3> -->
      </div>
    </form>
  </div>
</body>
</html>
