<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="registration1.css">
<title> CSS Login Screen Tutorial </title>
</head>
<body>
  
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
          <input type="text" placeholder="username" name="name" required/>
          <input type="password" placeholder="password" name="pass"  required />
           Female <input type="radio" name="gender" value="female"  required/>
            Male<input type="radio"  name="gender" value="male"  required/> 
            <button><a input type="submit" href="loginpage.php" style="text-decoration: none;">Register</a></button>
          
        </form>
      </div>
    </div>

</body>

</html>
