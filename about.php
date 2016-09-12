<?php
	$description = 'Service Plus Durham is a family owned, event staffing business that strives for excellence and superior service.';
	$keywords = 'About Service Plus Durham, event staffing, who we are, our staff, serviced venues';
	$title = 'About';
    require 'header.php';  
?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/jcarousel.responsive.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <div class="container-about">
        <div class="topheader"><h2><?php echo $title ?></h2></div>
	</div>
    <div class="gray-box">
        <div id="content-about">
            <div id="who-we-are">  
                <h3>Who We Are</h3>
                <p><i>ServicePlus Durham</i> is a small family run event service company based out of the Durham Region.  We offer services to caterers and private event hosts and hostesses, to assist in ensuring their events run as smoothly as possible.  We provide wait staff (servers), bartending services and event set-up and take-down staff.  Our staff are not only friendly, experienced and knowledgeable, they also have that "go the extra mile" mentality that enhances the event guest's experience.</p>
                <p>"Service with a smile" is mandatory, as is the "personal touch", and of course, let's not forget professionalism!  We have been in the event business for over 10 years and pride ourselves on the flair that we have with ensuring every guest's and client's service needs are taken care of, and always wanting to leave you with that "special something" to remember us by. That's how we got our name.... Service PLUS!</p>
            </div>
            <div id="our-staff">
                <h3>Our Staff</h3>
                <p>The <i>ServicePlus Durham</i> family consists of the mother and daughter team of Patrice and Janae, who, combined have over 10 years of experience in the event service industry.  They are complimented with a solid team of set up crew, servers and bartenders that are dedicated, friendly and hard working.  Many with several years experience in the industry and each with a unique quality that they bring to their work.  We are proud of the people we work with. They are hard working, and display a strong commitment to contributing to a friendly and professional environment.  This transfers over to any event that they attend and will prove to be a benefit to you and your event guests.</p>
            </div>        
        </div>       
        <div id="venues">
            <p>Venues We Have Serviced...</p><img src="images/wave.png" width= "222" height="43" alt="wave" title="Venues">
        </div>                            
        <div class="wrapper">
            
<!-- *******************************************************************

About.php carousel slider provided by jCarousel

https://github.com/jsor/jcarousel/blob/master/LICENSE

Copyright (c) 2006-2014 Jan Sorgalla

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

********************************************************************** -->              
            
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><a href="http://www.whitby.ca/en/discoverwhitby/portwhitbymarina.asp" target="_blank"><img src="images/whitby-marina.jpg" width="390" height="292" alt="Whitby Marina" title="Whitby Marina"></a></li>
                        <li><a href="http://www.historicplaces.ca/en/rep-reg/place-lieu.aspx?id=4801" target="_blank"><img src="images/armoury.jpg" width="390" height="292" alt="RS-McLaughlin-Armoury" title="RS McLaughlin Armoury"></a></li>
                        <li><a href="http://bestwesternontario.com/hotels/best-western-plus-durham-hotel-and-conference-centre" target="_blank"><img src="images/western.jpg" width="390" height="292" alt="Durham-Banquet-Hall-and-Conference-Centre" title="Durham Banquet Hall and Conference Centre"></a></li>
                        <li><a href="http://www.whitby.ca/en/residents/facilityrentals.asp#Cen" target="_blank"><img src="images/centennial.jpg" width="430" height="323" alt="Whitby-Centennial" title="Whitby Centennial"></a></li>
                        <li><a href="http://www.parkwoodestate.com/" target="_blank"><img src="images/parkwood.jpg" width="390" height="292" alt="Parkwood-Estates" title="Parkwood Estates"></a></li>
                    </ul>
                </div>
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                <p class="jcarousel-pagination"></p>
            </div>  
        </div>
    </div>           

<?php
    require 'request-a-quote-button.php';
?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="js/jcarousel.responsive.js"></script>
<?php
    require 'footer.php';  
?>






