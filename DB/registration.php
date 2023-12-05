<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "lenox web";
$con = mysql_connect($servername, $username, $password, $dbname);
if ($con) {
    echo "connection OK";
}
else {
    echo "connection failed".mysql.error();
}

$name=$_POST['full_name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$con_pass=$_POST['con_pass'];

$query="INSERT INTO registration VALUES('', '$name', '$email', '$pass','$con_pass')";
$data=mysql_query($con,$query);
if ($data){
 //echo "Data is send"
header("location:login.html");

}
else {
    echo "Data is not send"
}

?>