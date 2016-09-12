<?php
	$description = 'If you need staff for an event, request a quote online and a representative of Service Plus Durham will contact you.';
	$keywords = 'online quote request form, Service Plus Durham, event, staff';
	$title = 'Request A Quote';
    require 'header.php';  
?>

    <div class="container-request">
        <div class="topheader"><h2><?php echo $title ?></h2></div>
    </div>
	<div class="gray-box">
        <br><p id="required">* Indicates a Required Field</p>
        <form action="process-quote.php" method="post">
            <label for="name"><sup>*</sup>&nbsp;Name:</label><br>
            <input type="text" name="name" id="name" required><br>
            <label for="number"><sup>*</sup>&nbsp;Telephone Number:<br><small>xxx-xxx-xxxx</small></label><br>
            <input type="tel" name="number" id="number" required><br>
            <label for="email"><sup>*</sup>&nbsp;Email Address:</label><br>
            <input type="email" name="email" id="email" required><br><br>
            <label for="type"><sup>*</sup>Type of Event:</label><br>
            <input type="text" name="type" id="type" required><br>       
            <label for="date"><sup>*</sup>Date of Event:</label><br>
            <input type="text" name="date" id="date" required><br>     
            <label for="location"><sup>*</sup>Location of Event:</label><br>
            <input type="text" name="location" id="location" required><br>     
            <label for="guests"><sup>*</sup>Number of Guests:</label><br>
            <input type="text" name="guests" id="guests" required><br><br>    
            <p>Services Required:</p>
            <input type="checkbox" name="required-services[]" value="Set Up">Set Up Crew<br>
            <input type="checkbox" name="required-services[]" value="Servers">Servers<br>
            <input type="checkbox" name="required-services[]" value="Bartenders">Bartenders<br>
            <input type="checkbox" name="required-services[]" value="Supervisors">Supervisors<br>
            <input type="checkbox" name="required-services[]" value="Event Management">Event Management<br><br>        
            <p>Additional Comments:</p><br>
            <textarea name="comments" id="comments" cols="75" rows="4"></textarea><br>       
            <input type="submit" name="submit" value="Submit for Quote" id="submit"><br><br>             
        </form>
    </div>
    
<?php 
    require 'footer.php';  
?>