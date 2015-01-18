<?php  
  
// check for form submission - if it doesn't exist then send back to contact form  
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {  
    header("Location: contact-form.php"); exit;  
}  
      
// get the posted data  
$name = $_POST["contact_name"];  
$email = $_POST["contact_email"];  
$subject = $_POST["subject"]; 
$message = $_POST["message"];  
     
// write the email content   
$email_content .= "Name: $name\n";  
$email_content .= "Email Address: $email\n";  
$email_content .= "Subject: $subject\n";  
$email_content .= "Message:\n\n$message";  
      
// send the email  
mail ("contact@esportsnetworking.com", "New Contact Message", $email_content);  

// send the user back to the form  
header("Location: contact.html?s=".urlencode("Thank you for your message.")); exit;  
 ?> 