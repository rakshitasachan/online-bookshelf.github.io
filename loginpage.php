<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css">

<title> CSS Login Screen Tutorial </title>
</head>
<body>
   
      <nav class="navbar">
        <img src="book-112117_1280.webp" >
      </nav>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>

        <form action="login.php">
        <input type="text" placeholder="username" name="name"/>
          <p id="usererror" class=" error"></p>
        <input type="password" placeholder="password" name="pass" />
          <button><a input type="submit" value="login" href="home.php">login</a></button>

      </div>
    </div>
</form>


</body>
</html> 