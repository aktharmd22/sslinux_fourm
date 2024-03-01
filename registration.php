<style>
  body{
    background-image:url("images/registerfinal5.jpg");
    background-size:cover;
    background-repeat:no-repeat;

  }

  .reg{
    width: 420px;
    background: transparent;
    border: 0.5px solid; 
    
    backdrop-filter: blur(10px);
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    color:black;
    border-radius: 10px;
    padding: 30px 40px;
    border-color:black;
    margin-left:-300px;
    color:white;
   
    
  }
  .inp{
    opacity:0.5;
    background:transparent;
    color:white;
    
    
  }
  h3{
    color:white;
  }
  p{
    color:white;
  }
  #one{
    background:transparent;
    
    background-color: black;
    color:white;
border-radius:100px;
  }
  #two{
    background:transparent;
    color:white;
    background-color: black;
color: white;
border-radius:100px;
  }
  #three{
    background:transparent;
    color:white;
    background-color: black;
color: white;
border-radius:100px;
  }
  #four{
    background:transparent;
    color:white;
    background-color: black;
color: white;
border-radius:100px;
  }
  #five{
    background:transparent;
    color:black;
    background-color: black;
color: white;
border-radius:100px;
  }
  input::placeholder{
    font-weight: italic;
  
  color:white;
  
  
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
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $confirm_password = stripslashes($_REQUEST['confirm_password']);
        $confirm_password = mysqli_real_escape_string($con, $confirm_password);
        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($con, $phone);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password,confirm_password, email,phone, create_datetime)
                     VALUES ('$username', '" . md5($password) . "','" . md5($confirm_password) . "', '$email', '$phone','$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<!--     <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form> -->

    <section>
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form class="form" action="" method="post">
          

          <!-- username input -->
          <div class="reg">
            <div class="inp">
          <div class="form-outline mb-4">
          <input id="one" type="text" class="login-input form-control form-control-lg" name="username" placeholder="Enter Username" autofocus="true"/>
            
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
          <input id="two" type="text" class="login-input form-control form-control-lg" name="email" placeholder="Email Address">
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <input id="three" type="password" class="login-input form-control form-control-lg" name="password" placeholder="Password"/>
           
          </div>
          <!-- confirm password -->
          <div class="form-outline mb-3">
          <input id="four" type="password" class="login-input form-control form-control-lg" name="confirm_password" placeholder="confirm Password"/>
           
          </div>
          <div class="form-outline mb-3">
          <input id="five" type="tel" class="login-input form-control form-control-lg" name="phone" placeholder="Contact Number"/>
    </div>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label style="color:white;" class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <!-- <a href="#!" class="text-body">Forgot password?</a> -->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            
              <input style="border-radius:100px;" type="submit" name="submit" value="Register" class="login-button form-control form-control-lg btn btn-primary btn-lg">
                <p style="color:white;" class="link small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php" style="color:yellow;">Login here</a></p>
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
