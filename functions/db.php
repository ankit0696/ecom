<?php 

	require 'dbinfo.php'; 

    $con = mysqli_connect($db_host,$db_username,$db_password,$db_name);
    if (mysqli_connect_errno())
    {
    die ("Failed to connect to MySQL: " . mysqli_connect_error());
    }


?>

