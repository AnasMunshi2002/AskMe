<?php
$conn = mysqli_connect("localhost","root","","askme");
if($conn==false){
    die("error".mysqli_connect_error());
}
$username=$_POST["uname"];
$email=$_POST["email"];
$password=$_POST["password"];
$sql = "INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password');";
if(mysqli_query($conn, $sql)){
    echo "<script>
   alert('successfully Registered');
   window.location.assign('login.html');
   </script>";
    $stmt->close();
    $conn->close();
}
else{
    echo("ERROR: Hush ! Sorry $sql ".mysqli_error($conn));
}
mysqli_close($conn);
?>

