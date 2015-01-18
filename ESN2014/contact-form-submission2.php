<?php  
  
// check for form submission - if it doesn't exist then send back to contact form  
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {  
    header("Location: contact-form.php"); exit;  
}  
      
// get the posted data  
$firstname = $_POST["first_name"];  
$lastname = $_POST["last_name"];
$email_address = $_POST["contact_email"]; 
$date_of_birth = $_POST["date_of_birth"]; 
$phone = $_POST["phone"]; 
$country = $_POST["country"]; 
$name = $_POST["name"]; 
$what_do_you_do = $_POST["what_do_you_do"]; 
$website = $_POST["website"];
$youtube = $_POST["youtube"];
$facebook = $_POST["facebook"];
$twitter = $_POST["twitter"];
$starcraft = $_POST["starcraft"]; 
$league = $_POST["league"]; 
$dota = $_POST["dota"]; 
$call = $_POST["call"]; 
$other = $_POST["other"]; 
$events = $_POST["events"]; 
$awards = $_POST["awards"];  
     
// write the email content   
$email_content .= "First Name: $firstname\n";
$email_content .= "Last Name: $lastname\n";   
$email_content .= "Email Address: $email_address\n";
$email_content .= "Date of birth: $date_of_birth\n";   
$email_content .= "Phone: $phone\n"; 
$email_content .= "Country: $country\n";
$email_content .= "Gamer Name: $name\n";
$email_content .= "What do you do?: $what_do_you_do\n";
$email_content .= "Website: $website\n";
$email_content .= "Youtube: $youtube\n";
$email_content .= "Facebook: $facebook\n";
$email_content .= "Twitter: $twitter\n";
$email_content .= "Starcraft: $starcraft\n";
$email_content .= "League: $league\n";
$email_content .= "DOTA: $dota\n";
$email_content .= "Call: $call\n";
$email_content .= "Other: $other\n";
$email_content .= "Events: $events\n";
$email_content .= "Awards: $awards\n";
      
// send the email  
mail ("contact@esportsnetworking.com", "New Contact Message", $email_content);  

// send the user back to the form  
header("Location: join.html?s=".urlencode("Thank you for your message.")); exit;  
 ?> 
 