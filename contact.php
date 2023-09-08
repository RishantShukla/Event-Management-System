<?php 
$servername = "localhost";
$username ="root";
$password ="";

$conn = mysqli_connect($servername,$username,$password);
if (!$conn){
    die("sorry we failed to connect:". mysqli_connect_error());
} 
else{
echo ("connetion was successful"); 
} 

mysqli_select_db($conn, 'contactsdb');
$name = $_POST['name'];
$email = $_POST['email'];
$phnum = $_post['number'];
$subject = $_POST['subject'];
$ymsg = $_POST['your message'];

$data = "INSERT INTO contacts (NAME,EMAIL,NUMBER,SUBJECT,YMSG) VALUES ('$name', '$email', '$phnum', '$subject', '$ymsg')"; 
mysqli_query ($conn, $data);
header('location:successfull.php');

?>
