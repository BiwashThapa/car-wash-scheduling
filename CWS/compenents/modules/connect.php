<?php
$servername="localhost";
$username="root";
$password="";
$database="userdata";
$packageType = $_POST['packageType'];
$washingPoint = $_POST['washingPoint'];
$fullName = $_POST['fullName'];
$mobileNo = $_POST['mobileNo'];
$washDate = $_POST['washDate'];
$washTime = $_POST['washTime'];
$message = $_POST['message'];

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
$sql="INSERT INTO booking(PackageType, SelectThewashingpoint, FullName, MobileNo, WashDate, WashTime, Messageifany) VALUES('$packageType','$washingPoint','$fullName','$mobileNo','$washDate','$washTime','$message')";
if (mysqli_query($conn,$sql)){

    echo '<script>alert("You are registered!!")</script>';

}
else{
    echo '<script>alert("REGISTRATION FAILED!!!")</script>' . mysqli_error($conn);
}
mysqli_close($conn);
?>