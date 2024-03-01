<style>
  .login{
    width: 420px;
    background: transparent;
    border: 0.5px solid; 
    
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    color:white;
    border-radius: 10px;
    padding: 30px 40px;
    border-color:white;
    
  
    
    margin-left:-325px;
    height:400px;
    
  }
  
  .op{
    opacity: 0.5;
    height:180px;
    border-radius:10px;
    background:transparent;
  }

  ::placeholder{
    color:red;
    opacity:2;
    
  }

  body{
    background-image:url("images/loginfinal4.jpg");
    background-size:cover;
    background-repeat:no-repeat;
    }
h3{
  color:white;
  
}
p{
  color:white;
}
.trans{
  background:transparent;
  color:white;
  width:300px;
  border-radius:20px;
  padding:10px;
  border-color:white;
}
::placeholder{
  color:ghostwhite;
}
  
  
  
   
  

    

  
</style>







<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="forum.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<!--     <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input form-control form-control-lg" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input form-control form-control-lg" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button form-control form-control-lg"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
  </form> -->

                
  <section>
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form class="form" method="post" name="login">
          
<div class="login" >
  <div class="op">
          <!-- Email input -->
          <div class="form-outline mb-4">
          <input class="trans" type="text" id="one" class="login-input form-control form-control-lg" name="username" placeholder="Enter Username" autofocus="true"/>
          <i class='bx bxs-user'></i>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <input class="trans"type="password" id="two"class="login-input form-control form-control-lg" name="password" placeholder="Password"/>
    </div>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3" style="color:white;">
                Remember me
              </label>
            </div>
            <!-- <a href="#!" class="text-body">Forgot password?</a> -->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            
              <input type="submit" value="Login" name="submit" style="opacity:0.7; background-color:#236ba6; border:none; " class="login-button form-control form-control-lg btn btn-primary btn-lg"/>
            <p class="small fw-bold mt-2 pt-1 mb-0" style="color:white; text-shadow: #ecf0f6;">Don't have an account? <a href="registration.php"
                class="link-danger" style="color:yellow;">Register</a></p>
          </div>
    </div>

        </form>
      </div>
    </div>
  </div>
 
</section>

<?php
    }
?>
</body>
</html>
