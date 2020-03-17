<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/ChampionCraneMaster.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Champion Crane</title>
<!-- InstanceEndEditable -->
<link type="text/css" rel="stylesheet" href="css/style.css" />
<style><!--[if lt IE 9]>
   <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
   <![endif]--></style>
</head>

<body class="no-touch">




<header>
	<div class="header-container">
    
    <div class="header-text">
    	<a href="tel:+1-800-241-2581" class="header-phone">(800) 241-2581</a>
        <p class="header-dispatch">24/7 Dispatch</p>
    </div>
    
    <div class="header-address">
    	<p>12521 Branford St., Pacoima, CA 91331</p>
    </div>
    
    <div class="header-logo">
	<a href="index.html"><img alt="" src="images/logo.png" /></a>
    </div>
      	
<nav>
    	<div class="menu-container">
  		<label for="drop" class="menu-toggle">
        	<p>Menu &darr;</p>
        </label>
  		<input type="checkbox" id="drop" />
  			<ul class="menu">
    			<li><a href="index.html">Home</a></li>
                <li class="dropdown"><a href="equipment.htm">Equipment</a>
                	<ul class="dropdown-content">
                    
					<li><a href="cranes.htm">Cranes</a></li>
					<li><a href="trucks.htm">Trucks &amp; Trailers</a></li>
                        <li><a href="forklifts.htm">Forklifts</a></li>
                        <li><a href="manbaskets.htm">Man Baskets</a></li>
                        <li><a href="spreaderbars.htm">Spreader Bars</a></li>
                        <li><a href="wreckingballs.htm">Wrecking Balls</a></li>
						<li><a href="specialrigging.htm">Special Rigging</a></li>
                    </ul>
                </li>
                <li><a href="gallery.htm">Gallery</a></li>
                <li><a href="about.htm">About</a></li>
    			<li><a href="contact.htm">Contact</a></li>
  			</ul>
        </div>
	</nav>            
        
    </div>
</header>

<div class="top-spacer"></div>


<!-- InstanceBeginEditable name="banner" -->
<div class="banner-container">
	<div class="equipment-banner">
		<h2>Equipment</h2>
	</div>
</div>
<!-- InstanceEndEditable -->
<div class="content" style="clear:both;">
<!-- InstanceBeginEditable name="content" -->
<div class="contact-container">

<div class="contact-info">
<h2>Contact Info</h2><br/>
<h2>Contact Info</h2><br/>
<h2>Contact Info</h2><br/>
<h2>Contact Info</h2><br/>
<h2>Contact Info</h2><br/>
</div>

<div class="contact-form">

<form class="contact" method="post" action="/ChampionCrane/contact-form.php">

<div class="label-container"><label class="contact-label" for="fname">First Name</label></div>
<div class="textbox-contaniner"><input class="contact-textbox" id="fname" name="fname" type="text" placeholder="Ex. John"/></div>

<div class="label-container"><label class="contact-label" for="lname">Last Name</label></div>
<div class="textbox-contaniner"><input class="contact-textbox" id="lname" name="lname" type="text" placeholder="Ex. Smith"/></div>

<div class="label-container"><label class="contact-label" for="coname">Company Name</label></div>
<div class="textbox-contaniner"><input class="contact-textbox" id="coname" name="coname" type="text" placeholder="Your Company"/></div>

<div class="label-container"><label class="contact-label" for="phone">Phone Number</label></div>
<div class="textbox-contaniner"><input class="contact-textbox" id="phone" name="phone" type="text" placeholder="800-555-0123"/></div>

<div class="label-container"><label class="contact-label" for="email">Email Address</label></div>
<div class="textbox-contaniner"><input class="contact-textbox" id="email" name="email" type="text" placeholder="someone@example.com"/></div>

<div class="label-container"><label class="contact-label" for="message">Message</label></div>
<div class="message-contaniner"><textarea class="contact-message" id="message" name="message" placeholder="Write Something..."></textarea></div>

<input class="contact-button" type="submit" value="Send Message"/>

</form>

</div>

</div>

    
     
<!-- InstanceEndEditable -->
        <div style="clear:both;"></div>

    
</div>


<footer style="clear:both;">
<div class="footer-container">
	<h2>Champion Crane Rental, Inc.</h2>
    <p>12521 Branford Street, Los Angeles, CA 91331</p>
</div>
</footer>







<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript">
$(function(){
   // See if this is a touch device
   if ('ontouchstart' in window)
   {
      // Set the correct [touchscreen] body class
      $('body').removeClass('no-touch').addClass('touch');
     
      // Add the touch toggle to show text when tapped
      $('div.boxInner img').click(function(){
         $(this).closest('.boxInner').toggleClass('touchFocus');
      });
   }
});
</script>
</body>
<!-- InstanceEnd --></html>


<?php
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['coname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message'])) {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$coname = $_POST['coname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	if (!empty($fname) && !empty($lname) && !empty($coname) && !empty($phone) && !empty($email) && !empty($message)){
	
		$to = 'andrewdavis64@outlook.com';
		$subject = 'Champion Crane Website Contact Form';
		$body = "FROM/: $fname $lname'COMPANY: '$coname'PHONE#: '$phone'EMAIL: '$email'MESSAGE:'$message;
		$headers = 'From: '$email;
		
		if (@mail($to, $subject, $body, $headers)) {
			echo 'thanks';
		}
	}
  }
 

?>
