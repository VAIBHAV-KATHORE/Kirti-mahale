<?php
$conn=mysqli_connect("localhost:3307","root", "", "Kirti" );
if($conn){
    echo "Connected";
}else{
    echo "Failed";
}

$username= $_POST['username'];
$password= $_POST['password'];

$data ="INSERT INTO `login` (`username`, `password`) VALUES ('$username', '$password')";
$check = mysqli_query($conn,$data);
if($check){
    echo "Login Successfully";
}else{
    echo "Not Login";
}
?>