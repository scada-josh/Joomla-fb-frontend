<?php
include("../../utility/connect-db/connection.php");

$conn = OpenDbConnection();

//	Prepare Variables
$member_email = $_REQUEST["username"];
$code     = $_REQUEST["code"];

//	Check Input
$error = "";

	//	Username & Code
$sql    = "SELECT * FROM member WHERE member_email ='$member_email'";
$result = mysql_query($sql) or die(mysql_error());
$row    = mysql_fetch_array($result);

if (!$row) {
	$error .= "ไม่พบชื่อผู้ใช้<br />";
}
else if ($row["code"] != $code) {
	$error .= "รหัสผิด<br />";
}

//	Action
if ($error == "") {
	//	Clear Code
	$sql = "UPDATE member SET code='' WHERE member_email='$member_email'";
	mysql_query($sql) or die(mysql_error());
}

//	Show Result
if ($error == "") {
	$result = "เปิดใช้บัญชีเรียบร้อย<br />"
			  . "<a href='http://code-aholic.com'>ลงชื่อเข้าใช้</a>";
}
else {
	$result = $error;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ระบบสมาชิก - เปิดใช้บัญชี</title>
</head>
<body>
<?=$result?>
</body>
</html>

<?php 
    CloseDbConnection($conn);

?>