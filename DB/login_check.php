<?php
$servername="localhost";
$username="root";
$password="";
$dbname="lenox_web";
$check = mysql_connect($servername,$username,$password,$dbname); 
if ($check) {
   // echo "connection OK";
}
else {
    echo "connection failed".mysql.error();
}
$email=$_POST['email'];
$pass=$_POST['pass'];

$data="SELECT *FROM registration WHERE Email='$email',Password='$password',)"; 
$execute=  mysql_query($check,$data); 
$count=  mysql_num_row($execute,$data); 
if ($count>=1){
   //header(location:)
    echo "You can go";
}
else {
   echo '<script>alert("invalid credentials")</script>'
}
?>