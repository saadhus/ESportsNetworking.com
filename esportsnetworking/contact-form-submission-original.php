<?php  
  
// check for form submission - if it doesn't exist then send back to contact form  
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {  
    header("Location: contact.html"); exit;  
}  
      
// get the posted data  
$company = $_POST["contact_company"];  
$name = $_POST["contact_name"];  
$email_address = $_POST["contact_email"];  
$subject = $_POST["contact_subject"]; 
$message = $_POST["contact_message"];  
      
// check that a company was entered  
if (empty ($company))  
    $error = "You must enter your company name or gamertag.";  
// check that a name was entered  
if (empty ($name))  
    $error = "You must enter your name.";  
// check that an email address was entered  
elseif (empty ($email_address))   
    $error = "You must enter your email address.";  
// check for a valid email address  
elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_address))  
    $error = "You must enter a valid email address.";  
// check that a message was entered  
elseif (empty ($subject))  
    $error = "You must enter a message.";  
          
// check if an error was found - if there was, send the user back to the form  
if (isset($error)) {  
    header("Location: please+correct+the+following+fields.html?e=".urlencode($error)); exit;  
}  
          
// write the email content  
$email_content = "Company: $company\n";  
$email_content .= "Name: $name\n";  
$email_content .= "Email Address: $email_address\n";  
$email_content .= "Subject: $subject\n";  
$email_content .= "Message:\n\n$message";  
      
// send the email  
mail ("contact@esportsnetworking.com", "New Contact Message", $email_content);  
      
// send the user back to the form  
header("Location: Thank+you+for+your+message.html?s=".urlencode("Thank you for your message.")); exit;  
  
?>  