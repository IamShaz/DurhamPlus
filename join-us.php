<?php
	$description = 'Apply for a staff position at Service Plus Durham. Hiring for setup crew, servers, bartenders, supervisors and management.';
	$keywords = 'apply, jobs, hiring, setup crew, servers, bartenders, supervisors, management, Service Plus Durham';
	$title = 'Join Us';
    require 'header.php';  
?>
   
    <div class="container-join">
        <div class="topheader"><h2><?php echo $title ?></h2></div>
    </div>
   
    <div class="gray-box">
        <div id="intro"><p>Interested in joining our company? <br></p></div>
        <p id="required">* Indicates a Required Field</p>
        <form action="process-join.php" method="post">
            <label for="name"><sup>*</sup>&nbsp;Name:</label><br>
            <input type="text" name="name" id="name" required><br> 
            <label for="number"><sup>*</sup>&nbsp;Telephone Number:<br><small>xxx-xxx-xxxx</small></label><br>
            <input type="tel" name="number" id="number" required><br>     
            <label for="email"><sup>*</sup>&nbsp;Email Address:</label><br>
            <input type="email" name="email" id="email" required><br>        
            <p><sup>*</sup>Area(s) of Interest:</p>
            <input type="checkbox" name="interest-area[]" value="Set Up">Set Up Crew<br>
            <input type="checkbox" name="interest-area[]" value="Servers">Servers<br>
            <input type="checkbox" name="interest-area[]" value="Bartenders">Bartenders<br>
            <input type="checkbox" name="interest-area[]" value="Supervisors">Supervisors<br>
            <input type="checkbox" name="interest-area[]" value="Event Management">Event Management<br><br>  
            <p>Please Copy and Paste Resume Below</p>
            <pre><textarea wrap="hard" maxlength="10000" id="resume" name="resume" cols=100 rows=4></textarea></pre><br><br>      
            <p>Are you currently using Facebook?</p>
            <input type="radio" name="facebook" value="Yes">Yes
            <input type="radio" name="facebook" value="No">No<br><br>       
            <input type="submit" name="submit" value="Submit" id="submit"><br><br>
        </form>
    </div>
      
<?php 
    require 'request-a-quote-button.php';
    require 'footer.php';  
?>