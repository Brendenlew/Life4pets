<?php

  if(isset($_POST['save']))
{
    $sql = "INSERT INTO users (username, password, email)
    VALUES ('".$_POST["username"]."','".$_POST["pass"]."','".$_POST["email"]."')";

    $result = mysqli_query($conn,$sql);
}

?>