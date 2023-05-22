<?php
$feedback=$_POST["feedback"];
$conn =mysqli_connect("localhost","root","")or die ("giuy");
$db =mysqli_select_db($conn,"askme");
$query="insert into feedback values('$feedback'); ";
$result=mysqli_query($conn,$query);
$number=mysqli_num_rows($result);
if($number>=1){
    echo"<script>
    alert('Feedback submittded')</script>";
}
?>