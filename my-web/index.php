<?php

include 'config.php';


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $islogin =  mysqli_real_escape_string($conn, $_POST['login']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');
   if(isset($islogin)){
    $row = mysqli_fetch_assoc($select);
    $_SESSION['user_id'] = $row['id'];
    header('location:home.php');
   }
   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');

         if($insert){
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }




?>
<!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>Morden Login Page | AsmrProg</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>

        <div class="container" id="container">
            <div class="form-container sign-up">  
                <form action="" method="post">
                    <h1>Create Account</h1>
        
                    <div class="social-icon">
                        <a href="#" class="icon">
                            <i class="fa-brands fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fa-brands fa-github"></i>
                        </a>
        
                    </div>
                    <span>
                        or use your email to regist
                    </span>
                    <input type="text" name="name"
                    required placeholder="Name"
                    >
                    <input type="email" name="email"
                    required placeholder="Email"
                    >
                    <input type="password" name="password"
                    required placeholder="Password"
                    >
                    <select name="user_type" id="">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    
                    
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>

            
            <div class="form-container sign-in">
                <form>
                    <h1>Sign in</h1>
          
                    <div class="social-icon">
                        <a href="#" class="icon">
                            <i class="fa-brands fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fa-brands fa-github"></i>
                        </a>
        
                    </div>
                    <span>
                        or use your email's password
                    </span>
                   <input name="login" type="text" value="login" readonly hidden>
                    <input name="email" type="email"
                    placeholder="Email"
                    >
                    <input name="password" type="password"
                    placeholder="Password"
                    >
                    <a href="#">Forget Your Password ? </a>
                    <button>Sign In</button>
                </form>
                
            </div>
            <div class="toggle-container">
                <div class="toggle">

                    <div class="toggle-panel 
                    toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>Enter your personal details to use all of site features</p>
                        <button class="hidden" id="login">
                            Sign In
                        </button>
                    </div>

                    <div class="toggle-panel 
                    toggle-right">
                        <h1>Hello friend !</h1>
                        <p>Regist with your personal details to use all of site features</p>
                        <button class="hidden" id="register">
                            Sign Up
                        </button>
                    </div>
               
                </div>

            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>