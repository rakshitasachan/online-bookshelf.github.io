<?php
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="database";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }

    $name=$_POST['name'];
   
    $pass=$_POST['pass'];

    

    if($name!="" && $pass!=""){
    $sql="Insert into register(name,pass,gender) values ('$name','$pass','$gender')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "Registered Successfully";
    mysqli_close($conn);
}
   
?>
  <script>
 
  alert("registration successfull");
  window.location="home.php";


  </script>