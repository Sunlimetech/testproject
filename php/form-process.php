<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}




$body_message = " <html>
					<body style='background-color: #ffffff; margin:0; font-family: Arial, Verdana; font-size: 12px;'>

						<table width='100%' align='center' style='border-collapse: separate; border:1px solid #222222; background-color:#FFFFFF; padding: 10px; font-size: 13px'>
							
							<tr>
								<td colspan='2' style='text-align:center;'><img src='https://www.hromni.com/images/logo.png' style='display: block;
								max-width: 200px;
								height: auto;
								margin: 0 auto;
								background: purple;
								padding: 5px 10px;
								border-radius: 10px;'/></td>
							</tr>
							
							<tr>
								<td colspan='2'>&nbsp;</td>
							</tr>
							<tr>
								<td colspan='2'><strong>Name:</strong>".$name."</td>
							</tr>
							
							<tr>
								<td colspan='2'><strong>Email:</strong>".$email."</td>
							</tr>
							
							
							<tr>
								<td colspan='2'><strong>Message:</strong><br><br>".$message."</td>
							</tr>
							
							<tr>
								<td colspan='2'>&nbsp;</td>
							</tr>
							
							<tr>
								<td colspan='2'><strong>Thanks,</strong></td>
							</tr>
							
							<tr>
								<td colspan='2'><strong>".$name."</strong><br></td>
							</tr>
						
						
						</table>
					</body>
					</html>";

$EmailTo = "junk.sunlimetech@gmail.com";
$Subject = "New Message Received from HR Omni Solutions";

// prepare email body text

$Body = $body_message;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";
// send email
$success = mail($EmailTo, $Subject, $Body,$headers);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>