<?php
	$description = 'Service Plus Durham provides staffing solutions including setup crew, servers, bartenders, supervisors and event management.';
	$keywords = 'hard working setup crew, sensational servers, creative bartenders, professional supervisors, event management, Service Plus Durham';
	$title = 'Services';
    require 'header.php';  
?>
   
    <div class="container-services">
        <div class="topheader"><h2><?php echo $title ?></h2></div>
    </div>
    <div id="services-wrapper">
        <div id="images"> 
            <div>
                <img src="images/setup.jpg" data-content="setup" width="300" height="200" alt="set-up-crew" title="Set-Up Crew">
                <h3>Setup Crew</h3>
            </div>
            <div>
                <img src="images/servers.jpg" data-content="servers" width="300" height="200" alt="servers" title="Servers">
                <h3>Servers</h3>
            </div>	
            <div>
                <img src="images/bartenders.jpg" data-content="bartenders" width="300" height="200" alt="bartenders" title="Bartenders">
                <h3>Bartenders</h3>
            </div>	
            <div>
                <img src="images/supervisors.jpg" data-content="supervisors" width="300" height="200" alt="supervisors" title="Supervisors">
                <h3>Supervisors</h3>
            </div>	
            <div>
                <img src="images/management.jpg" data-content="management" width="300" height="200" alt="management" title="Management">
                <h3>Management</h3>
            </div>			
			</div>	
        <div id="text"> 		
            <div id="setup">
                <h3>Hard Working Set-up Crew</h3>
                <p>Let us do the hard work.  Putting up table and chairs and table settings.  Our set-up crew can lend a hand here!</p>
            </div>		
            <div id="servers">
                <h3>Sensational Servers</h3>
                <p>Pleasant demeanor, happy disposition, reliable, caring, detail oriented - all describe our sensational serving staff.  Over 10 years of combined experience will ensure that you are getting quality service with a smile!</p>
            </div>				
            <div id="bartenders">
                <h3>Creative Bartenders</h3>
                <p>This can be one of the most important areas for an amazing event!  Our bar staff have many years of experience and aren't afraid go that extra mile to create great tasting unique cocktails.  Of course, we also pop beer bottles and uncork wine bottles.</p>
            </div>			
            <div id="supervisors">
                <h3>Professional Supervisors</h3>
                <p>Every event could use that extra security of having someone assist in running the show.  Leave your worries with us to ensure that food is served quickly and in an organized fashion, that your caterers food is being served and your guests dietary requests are being met.  This allows you to either focus your attention on mingling with your guests or just sitting back a relaxing, resting assured that all is being taken care of.</p>
            </div>				
            <div id="management">
                <h3>Event Management</h3>
                <p>Not sure that you have everything you need? Maybe you don't even know where to start?  We can help!  We can offer to assist you from inception to event completion.  Making sure all your needs are covered and contributing to a successful event!</p>
            </div>														
        </div>
    </div>  
   
<?php
    require 'request-a-quote-button.php';
    require 'footer.php';  
?>