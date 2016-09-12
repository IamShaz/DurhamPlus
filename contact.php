<?php
	$description = 'Need staff for an event? Contact Service Plus Durham for all your event staffing needs.';
	$keywords = 'contact, Service Plus Durham, event staffing solutions';
	$title = 'Contact Us';
    require 'header.php';  
?>

    <div class="container-contact">
        <div class="topheader"><h2><?php echo $title ?></h2></div>
    </div>
   
    <div class="gray-box">   
        <div id="intro"><p><i>ServicePlus Durham</i> wants to hear from you! Contact us at anytime.</p></div>
        <div id="contact-information">
            <p><abbr title="Phone Number">Tel:&nbsp;</abbr>(905) 999-1234</p>
            <p><abbr title="Email Us">Email Us:</abbr>&nbsp;<a href="mailto:iam.shaz@hotmail.com" target="_top">iam.shaz@hotmail.com</a></p>  
        </div>       
        <p id="required">* Indicates a Required Field</p>
        <form action="process-contact.php" method="post">
            <label for="first-name"><sup>*</sup>&nbsp;First Name:</label><br>
            <input type="text" name="first-name" id="first-name" required><br> 
            <label for="last-name"><sup>*</sup>&nbsp;Last Name:</label><br>
            <input type="text" name="last-name" id="last-name" required><br>  
            <label for="company-name">Company Name:</label><br>
            <input type="text" name="company-name" id="company-name"><br>       
            <label for="number"><sup>*</sup>&nbsp;Telephone Number:<br><small>xxx-xxx-xxxx</small></label><br>
            <input type="tel" name="number" id="number" required><br> 
            <label for="email"><sup>*</sup>&nbsp;Email:</label><br>
            <input type="email" name="email" id="email" required><br>         
            <label for="comments">Comments:</label><br>
            <textarea name="comments" id="comments" cols=100 rows=4></textarea><br>
            <input type="submit" name="submit" value="Submit" id="submit">       
        </form>
    </div>
           
<?php
    require 'request-a-quote-button.php';
    require 'footer.php';  
?>