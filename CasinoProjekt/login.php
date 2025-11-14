<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box">
        <?php 
             
             include("php/config.php");
             if(isset($_POST['submit'])){
               $username = mysqli_real_escape_string($con,$_POST['username']);
               $password = mysqli_real_escape_string($con,$_POST['password']);

               $result = mysqli_query($con,"SELECT * FROM users WHERE Username='$username' AND Password='$password' ") or die("Select Error");
               $row = mysqli_fetch_assoc($result);

               if(is_array($row) && !empty($row)){
                   $_SESSION['valid'] = $row['Email'];
                   $_SESSION['username'] = $row['Username'];
                   $_SESSION['age'] = $row['Age'];
                   $_SESSION['id'] = $row['Id'];
                   $_SESSION['option'] = $row['Option1'];
               }else{
                   echo "<div class='message'>
                     <p>Wrong Username or Password</p>
                      </div> <br>";
                  echo "<a href='login.php'><button class='btn'>Go Back</button>";
        
               }
               if(isset($_SESSION['valid'])){
                   header("Location: index.php");
               }
             }else{

           
           ?>
            <h1>Login</h1>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" name="submit" id="submit" value="Login">
                </div>
                <div class="link">
                    Don't have account?<a href="register.php"> Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
    

</body>
</html>