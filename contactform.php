
<?php
if(isset($_POST['submit']))
{

$name = $_POST['name'];
$subjet = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];


$mailTo = "rohitbalage@rrbofficial.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;


mail($mailTo, $subjet, $txt, $headers);
header("Location: index.php?mailsend");

}
?>