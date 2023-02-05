<?php

$conn = new mysqli(localhost, barnaona_barnaba, Baba1992, barnaona_barnaba);

$yourPhone = 333333;
$yourName = $conn->real_escape_string($_POST['your_name']);
$yourEmail = $conn->real_escape_string($_POST['your_email']);
$comments = $conn->real_escape_string($_POST['comments']);

$sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
$result = mysqli_query($conn, $sql);
$to = "barnaba.barcellona@gmail.com";
$retval = mail ($to,$yourEmail,$comments)
?>
