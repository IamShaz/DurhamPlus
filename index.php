<?php
	  
	$description = 'Service Plus Durham is an event staffing company specializing in catering but offers other staffing services and event management.';
	$keywords = 'Service Plus Durham, event staff, catering staff, waiting staff, event management';
	$title = 'Service Plus Durham';
	require 'header.php';
    
?>
  
    <div class="container">
     
<!-- *******************************************************************

Home page (index.php) image slider provided by Fotorama

https://github.com/artpolikarpov/fotorama/blob/master/MIT-LICENSE
 
© 2011—2014, Artem Polikarpov
http://fotorama.io/

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the “Software”), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

The software is provided “as is”, without warranty of any kind, express or
implied, including but not limited to the warranties of merchantability,
fitness for a particular purpose and noninfringement. In no event shall the
authors or copyright holders be liable for any claim, damages or other
liability, whether in an action of contract, tort or otherwise, arising from,
out of or in connection with the software or the use or other dealings in
the software.

********************************************************************** -->  
      
        <div id="home-slider" class="fotorama" data-width="100%" data-height="80%" data-minwidth="200" data-ratio="800/400" data-loop="true" data-fit="cover" data-autoplay="3000" data-transition="dissolve" data-transition-duration="2500" data-arrows="false">
            <img src="images/slider1.jpg" width="800" height="400" alt="image1" title="Image One">
            <img src="images/slider2.jpg" width="800" height="400" alt="image2" title="Image Two">
            <img src="images/slider3.jpg" width="800" height="400" alt="image3" title="Image Three">
        </div>

<?php 
    require 'request-a-quote-button.php';
    require 'footer.php';
?>
