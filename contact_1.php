<?php

if($_POST["submit"]) {
   
    $to="essex.finneyjr@gmail.com,effx04@yahoo.com";
    $from = $_POST['sign'];
    $subject="Form to email message";    
    $ncfopEmail="nclodge9@gmail.com";    

    $mailBody="     $from has completed an application to become a member of NC FOP Lodge.
	Please click on th link below to view application.\n\n\n
	This message sent to you by
	NC Lodge 9 Support";		
   
	mail($to, $subject, $mailBody, "From: $from <$ncfopEmail>");
	$thankYou="<p>Thank you! Your application has been submitted.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Signature:</label>
        <input name="sign">

        <!--<label>Last Name:</label>
        <input name="lastname">-->

        <!--<label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>-->

        <input type="submit" name="submit">
    </form>

</body>

</html>