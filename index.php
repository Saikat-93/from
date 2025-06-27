<?php
$insert=false;
if(isset($_POST['name'])){
    $server = "localhost:3307";
    $username = "root";
    $password = "";


//$database = "trip";

// Corrected syntax
$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Connection to MySQL failed due to " . mysqli_connect_error());
}
$name=$_POST['name'];
$enroll=$_POST['enroll'];
$age=$_POST['age'];
$mobail=$_POST['mobail'];
$email=$_POST['email'];
$other=$_POST['other'];
$sql="INSERT INTO `trip`.`trip`(`name`,`enrol`,`age`,`mobail`,`email`,`other`,`dt`) VALUES ('$name','$enroll','$age','$mobail','$email','$other',current_timestamp());";
if($con->query($sql) == true){
    echo "<p style='color: green; font-weight: bold; text-align: center'>Thank you for applying! Your response has been recorded.</p>";
}
else{
    echo "Error: $sql <br> $con->error";
}

$con->close();

}
?>
