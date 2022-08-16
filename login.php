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
    
   
    $sql="SELECT * FROM register WHERE name='$name' AND pass='$pass'";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Error",mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "hello" . $row['name'] . "<br/>";
    } else {
        echo "Login Failed<br/>";
    }a
    
    mysqli_close($conn);
?>