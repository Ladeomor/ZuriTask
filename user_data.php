<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['birthday'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$csvData = $name . "\n" . $email . "\n" . $dob . "\n" . $gender . "\n" . $country . "\n";
$fileOpen = fopen("userData.csv","a");

fwrite($fileOpen, $csvData);
fclose($fileOpen);


?>

<html>
 <body>
 Welcome: <?php print_r($name); ?><br>
Your Email Address is: <?php print_r($email); ?><br>
Your Date of birth is: <?php print_r($dob); ?><br>
Your Gender is: <?php print_r($gender);?><br>
Your Country is: <?php print_r($country); ?><br>
 </body>
 </html> 