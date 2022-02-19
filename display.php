












<?php
if(isset($_POST['btn'])){
  $username = $_POST ['user_name'];
  $email = $_POST ['email'];  $password = $_POST ['password'];




}



?>
<!-- isset is simple method  to help to check save method post jonno $_POST dibo global varialbe form sob data receive hobey-->
<!-- btn ja post maddomey set jonno isset likhci -->






<!DOCTYPE html>


<h2>user name <?php  if (isset($username)){echo $username;}?></h2>
<h2>Email <?php  if (isset($email)){echo $email; }?></h2>
<h2>Password <?php if(isset($password)){ echo $password ;}?></h2>
    



