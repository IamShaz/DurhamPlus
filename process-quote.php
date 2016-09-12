<?php 

$emailSubject = 'Request A Quote'; // subject of email
$webMaster = 'iam.shaz@hotmail.com'; // send data to this email


// Sanitizing user data

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$number = filter_input(INPUT_POST, '', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
$location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);
$guests = filter_input(INPUT_POST, 'guests', FILTER_SANITIZE_NUMBER_INT);
$comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_NUMBER_INT);


// Harvesting user data

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$type = $_POST['type'];
$date = $_POST['date'];
$location = $_POST['location'];
$guests = $_POST['guests'];
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
    <title>Request A Quote</title>
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
<hr><br><br><br>&emsp;&emsp;&emsp;&emsp;Your information has been sent.<br><br>&emsp;&emsp;&emsp;&emsp;Thank You<br><br>
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

$errorFooter = <<<EOD
<footer><p>Copyright&nbsp;&copy;&nbsp;2014. <span id="company-footer">ServicePlus Durham.</span> All Rights Reserved.</p></footer>
EOD;


// Validating user data

if (isset($_POST['submit'])) {

	if ($name == null) {
		$errors = 1;
		$errorMsgN = 'Please enter your <strong>name</strong><br><br>';
	}
	
	if ($number == null) {
		$errors = 1;
		$errorMsgNum = 'Please enter a <strong>telephone number</strong>. Use xxx-xxx-xxxx format<br><br>';
	}
	
	if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $number)) {
		$errors = 0;
	} else {
		$errors = 1;
		$errorMsgNu = 'Please correct format of phone number <strong>xxx-xxx-xxxx</strong><br><br>';
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) or $email == null) {
		$errors = 1;
		$errorMsgE = 'Please enter an <strong>email address</strong><br><br>';
	}
	
	if ($type == null) {
		$errors = 1;
		$errorMsgT = 'Please enter the <strong>type of event</strong><br><br>';
	}
	
	if ($date == null) {
		$errors = 1;
		$errorMsgD = 'Please enter the <strong>date of event</strong><br><br>';
	}
	
	if ($location == null) {
		$errors = 1;
		$errorMsgL = 'Please enter the <strong>event location</strong><br><br>';		
	}
	
	if ($guests == null) {
		$errors = 1;
		$errorMsgG = 'Please enter the <strong>number of guests</strong><br><br>';
	}
	
	if (isset($_POST['required-services'])) {
		$servicesArray = $_POST['required-services'];
		for ($i=0; $i < count($servicesArray); $i++) {
			$service0 = $servicesArray[0].'<br>';
			$service1 = $servicesArray[1].'<br>';
			$service2 = $servicesArray[2].'<br>';
			$service3 = $servicesArray[3].'<br>';
			$service4 = $servicesArray[4].'<br>';
		}
	}
	
}

if ($errors > 0) {
	echo $errorHeader;
	echo $errorMsgN. $errorMsgNum. $errorMsgNu. $errorMsgE. $errorMsgT. $errorMsgD. $errorMsgL. $errorMsgG;
	echo '<br><a href="request-a-quote-form.php">Go Back</a><br>';
	echo $errorFooter;
	return false;
} else {
	echo "$theResults";
}


// Email format

	$body = <<<EOD
<br><hr><br>
Name: $name <br>
Number: $number <br>
Email: $email <br><br>
Type: $type <br>
Date: $date <br>
Location: $location <br>
Guests: $guests <br><br><br>
Services Required: <br>
<small>Displayed in the same order as in the form</small><br><br>
Service 1: $service0 <br>
Service 2: $service1 <br>
Service 3: $service2 <br>
Service 4: $service3 <br>
Service 5: $service4 <br>
Comments: $comments <br>
EOD;


// Email function

$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body, $headers);

?>