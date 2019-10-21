<?php
$servername = "localhost";
$username = "satinder";
$password = "sati1313";
$db="Canteen";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);


$myusername = $_POST['uname'];
$mypassword = $_POST['psw'];

$sql = "SELECT * FROM Admin where Name='$myusername' and Password='$mypassword'";
$result=$conn->query($sql);

$count=mysqli_num_rows($result);
if($count==0)
{
        header("location:Login.php");
}

?>
<html>
<body>
Welcome
</body>
</html>
