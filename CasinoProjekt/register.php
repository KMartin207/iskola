<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box">
        
        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password,Balance) VALUES('$username','$email','$age','$password', 1000)") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>

    

            <h1>Register</h1>
            <form action="" method="post">
                <div class="field input">
                    <label for="username"><b>Username</b></label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>
        
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
        
                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
        
                <div class="field input">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password">
                </div>
        
                <div class="field">
                    <p>What color do you want to be the default background?</p>
                    <input type="radio" id="option" name="option" value="b" checked>
                    <label for="b">Black</label>

                    <input type="radio" id="option" name="option" value="w">
                    <label for="w">White</label>
                </div>

                <div class="field">
                    <input type="submit" name="submit" id="submit" value="Login">
                </div>

                <div class="link">
                    Already a member?<a href="login.php">Sign In</a>
                    
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
    
</body>
</html>