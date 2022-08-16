<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: rgb(238, 195, 225);
  
}

.navbar{
  display: flex;
  background-color:rgb(60, 124, 197);
  position: fixed;
  top:0;
  width: 100%;
  font-size: 20px;
}

.nav-right{
  text-align: right;
  float:right;
}

.nav-right li {
    display: inline;
    float: left;
    padding-left: 15px;
  }

  .nav-right li a {
    display: block;
    padding: 8px;
    text-decoration: none;
    color:white;
  }

  .nav-right  li ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }

  .nav-right li a:hover {
    background-color: rgb(31, 199, 106);
  }

  .nav-right .active {
    background-color: #04AA6D;
  }


html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 40.3%;
  margin-bottom: 40px;
  margin-left: 600px;
 
  padding: 0 8px;
}

.card {

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  width: 60%;
  height: 100%;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
 margin:30px;
  padding: 0 16px;
  align:center;
}

.container::after, .row::after {
 
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
b{
  font-size: 20px;
 

}

</style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-right">
            <li><a href="home.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="loginpage.php">Login</a></li>
            <div class="contact" >
      
        </div>
    </nav>

<div class="about-section">
  <h1><b>About </b></h1>
  <p><i>Book Shelf provides easy interface to its reader for e-reading.</p>
     Thankyou for your patience and hope you had a great time here.</i>
  </p>
</div>

<h2 style="text-align:center">Created By</h2>

 
  <div class="column">
    <div class="card">
    
        <img src ="glasses-1052010__340.webp"   width="40%" height="70px">
        <h2>Rakshita Sachan</h2>
        <p>“A room without books is like a body without a soul.”</p>
        
        <p><button class="button"><b>Contact <b><a href="http://web.whatsapp.com/send?phone=+918957181964"  style="color: white;"> <img src="whatsapp.svg.webp" width="40px" height="40px"></a> 
        <a href="http://www.instagram.com/_baatein_07" style="color: white; align-self: center;">
        <img src="Instagram_icon.png.webp" width="40px" height="40px" > </a>
        
          
        </button></p>
      <div class="container">
      </div>
    </div>
  </div>
</div>


</body>
</html>