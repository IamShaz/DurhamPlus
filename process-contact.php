<?php 
	
$emailSubject = 'Contact Form Information'; // subject of email
$webMaster = 'iam.shaz@hotmail.com'; // send data to this email

	
// Sanitizing user data

$firstName = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_STRING); 
$lastName = filter_input(INPUT_POST, 'last-name', FILTER_SANITIZE_STRING);
$companyName = filter_input(INPUT_POST, 'company-name', FILTER_SANITIZE_STRING);
$number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_EMAIL);


// Harvesting user data

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$companyName = $_POST['company-name'];
$number = $_POST['number'];
$email = $_POST['email'];
$comments = $_POST['comments'];


// Results page

	$theResults = <<<EOD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Service Plus Durham">
    <link href='http://fonts.googleapis.com/css?family=Rambla:400,700%7cOpen+Sans' rel='stylesheet' type='text/css'>
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.2/fotorama.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/lightSlider.css"/> 
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Contact Information Submit></title>
</head>

<body>
   
   <header>
       <h1><img id="logo" src="images/logo.png" alt="service-plus-durham" title="Service Plus Durham"></h1>
       <nav id="navigation">
           <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
               <li><a href="services.php">Services</a></li>
               <li><a href="contact.php">Contact</a></li>
               <li><a href="join-us.php">Join Us</a></li>
           </ul>
       </nav>
   </header>
<hr><br><br><br>&emsp;&emsp;&emsp;&emsp;Your contact information has been sent.<br>&emsp;&emsp;&emsp;&emsp;Someone will contact you shortly.<br><br>&emsp;&emsp;&emsp;&emsp;Thank you.<br><br><br>
        <footer>
           <p>Copyright&nbsp;&copy;&nbsp;2014. <span id="company-footer">ServicePlus Durham.</span> All Rights Reserved.</p>
       </footer>
            
    </div><!--End of .container-->
   
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.2/fotorama.js"></script>
    <script src="js/fotorama.js"></script>
    <script src="js/jquery.lightSlider.min.js"></script>
    
   <script type="text/javascript" src="js/main.js"></script>
   
</body>
</html>
EOD;

$errors = 0;


// Error page header

$errorHeader = <<<EOD
<head><meta charset="UTF-8"><link href="http://fonts.googleapis.com/css?family=Rambla:400,700%7cOpen+Sans" rel="stylesheet" type="text/css"><link rel="stylesheet" type="text/css" href="css/main.css"></head><header>
       <h1><img id="logo" src="images/logo.png" alt="service-plus-durham" title="Service Plus Durham"></h1>
       <nav id="navigation">
           <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
               <li><a href="services.php">Services</a></li>
               <li><a href="contact.php">Contact</a></li>
               <li><a href="join-us.php">Join Us</a></li>
           </ul>
       </nav>
   </header>
EOD;


// Error page footer

$errorFooter = '<footer><p>Copyright&nbsp;&copy;&nbsp;2014. <span id="company-footer">ServicePlus Durham.</span> All Rights Reserved.</p></footer>';


// Validating user data

if (isset($_POST['submit'])) {
	
	if ($firstName == null) {
		$errors = 1;
		$errorMsgFN = 'Please enter your <strong>first name</strong><br><br>';
	}
	
	if ($lastName == null) {
		$errors = 1;
		$errorMsgLN = 'Please enter your <strong>last name</strong><br><br>';
	}
	
	if ($number == null) {
		$errors = 1;
		$errorMsgN = 'Please enter a <strong>telephone number</strong>. Use xxx-xxx-xxxx format<br><br>';
	}
	
	if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $number)) {
		$errors = 0;
	} else {
		$errors = 1;
		$errorMsgNu = 'Please correct phone number format <strong>(xxx-xxx-xxxx)</strong><br><br>';
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) or $email == null) {
		$errors = 1;
		$errorMsgE = 'Please enter an <strong>email address</strong><br><br>';
	}
} 


if ($errors > 0) {
	echo $errorHeader;
	echo $errorMsgFN. $errorMsgLN. $errorMsgN. $errorMsgNu. $errorMsgE;
	echo '<br><a href="contact.php">Go Back</a><br>';
	echo $errorFooter;
	return false;
} else {
	echo "$theResults";
}


// Email format

	$body = <<<EOD
<br><hr><br>
First Name: $firstName <br>
Last Name: $lastName <br>
Company Name: $companyName <br>
Number: $number <br>
Email: $email <br><br>
Comments: $comments <br>
EOD;


// Email function

$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body, $headers);
	

?>