<?php
$name=$_POST['name'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$url=$_POST['url'];
$subject=$_POST['subject'];
$comment=$_POST['comment'];
$headers="aimwindow@gmail.com";
$to="info@aimwindow.com";
$subject="Request";
?>
 <?php
  
 $smail="First Name:$name ,\n  Last Name : $lname,\n Email : $email,\n Phone-no : $phoneno,\n Website : $url,\n Subject : $subject,\n Comment : $comment";
?>
  <?php
 $body="This is an automated message. Please dont reply to this email. \n\n"; mail($to,$subject,$smail,$body); echo "Message sent! <a href='contact-us.html'> Click here</a> to send another mail";?>
   <?php
header('location:contact-us.html');
?>