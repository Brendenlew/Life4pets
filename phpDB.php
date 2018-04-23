<?php

$conn=mysqli_connect("moodbserver.database.windows.net","moo","P@SSW0RD","Life4pets");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}

?>