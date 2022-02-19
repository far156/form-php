












<?php
if(isset($_POST['btn'])){
  $username = $_POST ['user_name'];
  $email = $_POST ['email'];  $password = $_POST ['password'];




}



?>
<!-- isset is simple method  to help to check save method post jonno $_POST dibo global varialbe form sob data receive hobey-->
<!-- btn ja post maddomey set jonno isset likhci -->






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From in php</title>
</head>

<h2>user name <?php  if (isset($username)){echo $username;}?></h2>
<h2>Email <?php  if (isset($email)){echo $email; }?></h2>
<h2>Password <?php if(isset($password)){ echo $password ;}?></h2>
    <form action="" method="POST">
        <label >User name</label><Br>
            <input type="text" name="user _name"><br>
            <label >Email</label><Br>
                <input type="email" name="email"><br>


<label >password</label><Br>
            <input type="password" name="password"><br>
            <br>
            <input type="submit" value="Submit Data" name="btn">


    </form>
</body>
</html>
