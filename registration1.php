<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="registration1.css">
<title> CSS Login Screen Tutorial </title>
</head>
<body><nav class="navbar">
        <div class="nav-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="loginpage.php">Login</a></li>
            <li><a href="registration.php">Create Account</a></li>
        </div>
    </nav>
  
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>REGISTER</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form action="registration.php" method="post">
        <form class="login-form">
          <input type="text" placeholder="username" name="name"/>
          <input type="password" placeholder="password" name="pass" />
           Female <input type="radio" name="gender" value="female"/>
            Male<input type="radio"  name="gender" value="male"/> 
            <button><a input type="submit" href="loginpage.php" style="text-decoration: none;">Register</a></button>
          
        </form>
      </div>
    </div>

</body>
</html>