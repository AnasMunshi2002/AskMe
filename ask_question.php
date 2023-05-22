<?php
$uname=$_POST["uname"];
$que=$_POST["que"];
$subject=$_POST["sub"];
$conn =mysqli_connect("localhost","root","")or die ("giuy");
$db =mysqli_select_db($conn,"askme");
$query="insert into queans(Subject,Question,Askby) values('$subject','$que','$uname'); ";
$result=mysqli_query($conn,$query);

$queryafter="select * from queans where Question='$que';";
$resultafter=mysqli_query($conn,$queryafter);
$number=mysqli_num_rows($resultafter);
if($number==1){
   echo "<script>
alert('Question Succesfully Posted');
window.location.assign('home.html');
</script>";
}
else{
   echo "<script>
alert('Some error occured while posting ! Try Again !');
window.location.assign('ask_question.html');
</script>";
}

?>