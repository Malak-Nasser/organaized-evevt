<?php
// إستقبال البيانات القادمة من الحقول في صفحة myform.php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$firstname=$_POST['firstname'];

$lastname=$_POST['lastname'];

$email=$_POST['email'];

$studentid=$_POST['studentid'];

$email=$_POST['email'];

$password=$_POST['password'];

$phonenumber=$_POST['phonenumber'];

$collage=$_POST['collage'];

$intersted=$_POST['intersted'];

$otherintrested=$_POST['otherintrested'];
}

// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mywebsite";

// إنشاء الإتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);

// إختبار الإتصال
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO participent(firstname,lastname,email,studentid,password,phonenumber,collage,intersted,otherintrested)
    VALUES($firstname,$lastname,$email,$studentid,$password,$phonenumber,$collage,$intersted,$otherintrested)";

if (mysqli_query($conn, $sql))
	{
echo "تم إرسال معلومات بنجاح";
} 
else
{
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>