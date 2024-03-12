<?php




$conn = mysqli_connect('localhost','root','','mydb');
if(!$conn){
    die('Connection Failed : '.mysqli_connect_error());

}
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $Gender=$_POST['Gender'];
    $classs=$_POST['classs'];
    $Division=$_POST['Division'];
    $Subject=$_POST['Subject'];


    $stmt = "insert into regs ( fname,lname,email,password,Gender,classs,Division,Subject) values ('$fname','$lname','$email','$password','$Gender','$classs','$Division','$Subject')";
    if($conn->query($stmt)== TRUE){
        echo "Registered Succesfully";
    }
    else
    {
        echo "ERROR : $stmt <br> $conn->error";
    }
    
    $conn->close();

?>
