<?php

$conn = new mysqli(localhost, barnaona_barnaba, Baba1992, barnaona_barnaba);

$yourPhone = 333333;
$yourName = $conn->real_escape_string($_POST['your_name']);
$yourEmail = $conn->real_escape_string($_POST['your_email']);
$angle = $conn->real_escape_string($_POST['angle']);
$r = $conn->real_escape_string($_POST['r']);
$g = $conn->real_escape_string($_POST['g']);
$b = $conn->real_escape_string($_POST['b']);
$size = $conn->real_escape_string($_POST['size']);
$grado = $conn->real_escape_string($_POST['grado']);
$message = $conn->real_escape_string($_POST['message']);

if ($yourName !=  "uno") {
$sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
$result = mysqli_query($conn, $sql);
$to = "barnaba.barcellona@gmail.com";
$retval = mail ($to,$yourEmail,$comments);
};
if ($yourName ==  "uno") {
  $sql="INSERT INTO blocks (angle,size,r,g,b,grado,message) VALUES ('".$angle."','".$size."','".$r."', '".$g."', '".$b."', '".$grado."', '".$message."')";
$result = mysqli_query($conn, $sql);
}
?>
