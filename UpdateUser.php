
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UPdate</title>
</head>

<body>
<?php
$Id = $_POST['txtUserId'];
$Name=$_POST['txtUserName'];
$Password=$_POST['txtPass'];
// Establish Connection with mysqli
$con = mysqli_connect("localhost","root");
// Select Database
mysqli_select_db($con,"JOB");
// Specify the query to Update Record
$sql = "Update User_Master set UserName='".$Name."',Password='".$Password."' where UserId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("User Updated Succesfully");window.location=\'User.php\';</script>';
?>
</body>
</html>
