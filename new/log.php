<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "newpro";
$conn = mysqli_connect($servername,$username,$password,$db);
if($conn)
{
    //echo "connection failed " ;
}
else
{
    echo "connection failed ".mysqli_connect_error();
}

?>