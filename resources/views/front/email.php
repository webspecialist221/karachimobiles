<?php
$to = "hussainfatm@gmail.com";
$subject = $_POST['formSubject'];
$txt = $_POST['formContent'];
$headers = $_POST['formEmail'];//from

mail($to,$subject,$txt,$headers);
header("Location:contact.php?msg=email_sent");
exit();
?>