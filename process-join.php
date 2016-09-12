<?php 

$emailSubject = 'Join Us Information'; // subject of email
$webMaster = 'iam.shaz@hotmail.com'; // send data to this email


// Sanitizing user data

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$resume = filter_input(INPUT_POST, 'resume', FILTER_SANITIZE_TEXT_FIELD);


// Harvesting user data

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$resume = $_POST['resume'];
$facebook = $_POST['facebook'];


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
    <title>Join Us</title>
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
<hr><br><br><br>&emsp;&emsp;&emsp;&emsp;Thank you for your interest in working with ServicePlus Durham.<br><br>&emsp;&emsp;&emsp;&emsp;We will review your resume and contact you if your skills meet our needs.<br><br>
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
    
    if (isset($_POST['interest-area'])) {
        $areaArray = $_POST['interest-area'];
        for ($i=0; $i < count($areaArray); $i++) {
            $option0 = $areaArray[0].'<br>';
			$option1 = $areaArray[1].'<br>';
			$option2 = $areaArray[2].'<br>';
			$option3 = $areaArray[3].'<br>';
			$option4 = $areaArray[4].'<br>';
        }
    } else {
		$errors = 1;
		$errorMsgA = 'Please select an <strong>area of interest</strong>';
	}
	
	if ($resume.length > 10000 ) {
		$errors = 1;
		$errorMsgR = 'Please use less than 10,000 characters.';
	}

}

if ($errors > 0) {
    echo $errorHeader;
    echo $errorMsgN. $errorMsgNum. $errorMsgNu. $errorMsgE. $errorMsgA. $errorMsgR;
	echo '<br><br><a href="join-us.php">Go Back</a><br>';
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
Email: $email <br><br><br>
Areas of Interest: $areas <br>
<small>Displayed in the same order as in the form</small><br><br>
Option 1: $option0 <br>
Option 2: $option1 <br>
Option 3: $option2 <br>
Option 4: $option3 <br>
Option 5: $option4 <br><br><br>
Resume: $resume <br><br><br>
Facebook: $facebook <br>
EOD;


// Email function

$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body, $headers);

?>