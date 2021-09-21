<?php  
 $connect = mysqli_connect("localhost", "root", "", "nascomm");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:entry.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = password_hash($password, PASSWORD_DEFAULT);  
           $query = "INSERT INTO users(username, password) VALUES('$username', '$password')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $query = "SELECT * FROM users WHERE username = '$username'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
                          $_SESSION["username"] = $username;  
                          header("location:entry.php");  
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details")</script>';  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>PHP Login Registration</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           
           <style>
           * {
               margin: 0px;
               padding: 0px;
               }
               body {
               font-size: 120%;
               background: #F8F8FF;
               }
               .header {
               width: 30%;
               margin: 50px auto 0px;
               color: white; background: #5F9EA0;
               text-align: center;
               border: 1px solid #B0C4DE;
               border-bottom: none;
               border-radius: 10px 10px 0px 0px;
               padding: 20px;
               }
               form, .content {
               width: 30%;
               margin: 0px auto;
               padding: 20px;
               border: 1px solid #B0C4DE;
               background: white;
               border-radius: 0px 0px 10px 10px;
               }
               .input-group {
               margin: 10px 0px 10px 0px;
               }
               .input-group label {
               display: block;
               text-align: left;
               margin: 3px;
               }
               .input-group input {
               height: 30px;
               width: 93%;
               padding: 5px 10px;
               font-size: 16px;
               border-radius: 5px;
               border: 1px solid gray;
               }
               .btn {
               padding: 10px;
               font-size: 15px;
               color: white;
               background: #5F9EA0;
               border: none;
               border-radius: 5px;
               }
               .error {
               width: 92%;
               margin: 0px auto;
               padding: 10px;
               border: 1px solid #a94442;
               color: #a94442;
               background: #f2dede;
               border-radius: 5px;
               text-align: left;}
               .success {
               color: #3c763d;
               background: #dff0d8;
               border: 1px solid #3c763d;
               margin-bottom: 20px;
               }</style>
  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Login Registration</h3>  
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center">Login</h3>  
                <br />  
                <form method="post">  
                     <div class="input-group">
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br /> 
                </div>
                <div> 
                     <input type="submit" name="login" value="Login" class="btn" />  
                     <br />  
                     <p align="center"><a href="index.php">To Register</a></p>  
                </div>
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">Register</h3>  
                <br />  
                <form method="post">
                     <div class="input-group">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br>  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br>
                </div>
                <div>  
                     <input type="submit" name="register" value="Register" class="btn" />  
                     <br>  
                     <p align="center"><a href="index.php?action=login">To Login</a></p> 
                </div> 
                </form>  
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html> 