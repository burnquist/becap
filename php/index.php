<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Home |Heat Transfer Solution (BECAP)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5" />
<link rel="stylesheet" type="text/css" href="style.css" />

	<script src="jquery-1.9.1.js"></script>

	
	
	<script src="ui/jquery.ui.menu.js"></script>
	<link rel="stylesheet" href="becap.css">
	<link href="css/flick/jquery-ui-1.10.3.custom.css" rel="stylesheet">
    <script src="js/jquery-ui-1.10.3.custom.js"></script>

<script>
	$(function() {
		$( "#menu" ).menu();
		
	});
	

	</script>

	

           
	<style>
	.ui-menu {
	background:#10335a;
	width: 130px; 
    font: 11px;
	border:none;
	
	}
.margin{
margin:0em 3em 1em 35em;


}
.width{
width: 420px;
margin:0px 3px 0px 2px;
}

.google{
	margin:0em 0em 5px 2em;
	}


	</style>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1&appId=605601616134280";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<script>
	$(function() {
		
		$( "#accordion" ).accordion();
		

		
		var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		

		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 20
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>	
	<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
	
</head>
<body>

	<div id="header">
		<a href="#"><img src="images/logo-becap.JPG" alt="" width="318" height="170" class="logo" /></a>
		<div class="margin">
			<ul id="menu">
			<li class="ui-state-disabled"><a href="#"></a></li>
			<li><a href="index.php" name="home">.:: Home</a></li>
			<li><a href="product.php" id="product">.:: Product</a></li>
			<li><a href="service.php">.:: Service</a></li>
			<li><a href="ourclient.php">.:: Our Client</a></li>
			<li><a href="achievement.php">.:: Achievements</a></li>
			<li><a href="contactus.php">.:: Contact Us</a></li>
			
		</ul>
		
		</div>
		<?php
		$home= "home";
		$product= "product";
		$service= "service";
		$ourclient= "ourclient";
		$contactus= "contact us";
		$email="email";
		?>
		</div>
		<div id="content">
		<div id="left">
			<img src="images/title1.gif" alt="" width="245" height="36" />
			<p style="text-align: Justify">
				We are company Specializing in energy conservation and heat transfer, We provide the customer with very highly
					up to date heat transfer and effeciency equipment, provide solutions and services in the petrochemical, oil and gas industry
			</p>
			<p style="margin-top:-10px;text-align: Justify;">
			<strong>Our Vision </strong> </br> To Become a World Leader in Performance Maintenance Service Solutions, Achieving Benefit and Growing Together
			</p>
			
			<p style="margin-top:-10px;text-align: Justify;">
			<strong>Our Mision </strong> </br> Customer Satisfaction, Safety, Reliability and Benefit
			</p>
			
			<img src="images/title2.gif" alt="" width="245" height="51" class="hr" />
			
			
			<ul class="list">
			
				<li><a href="#">Refinery</a></li>
				<li><a href="#">Oil And Gas</a></li>
				<li><a href="#">Power</a></li>
				<li><a href="#">Cement</a></li>
				<li><a href="#">Fertilizer</a></li>
				<li><a href="#">Gas Producers</a></li>
				<li><a href="#">Food and Beverage</a></li>
				<li><a href="#">Pulp & Papper</a></li>
				<li><a href="#">Palm Oil Industry</a></li>
			</ul>
			
			<p style="margin-top:5em;"> <img src="images/logo-footer.jpg" alt="" width="180" height="50" /></p>
			
		</div>
		<div id="right">
		
	<div class="width">	
<div id="accordion">

	<h3>Home - <?php echo $home; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'; echo date("Y-m-d H:i:s"); ?></h3>
	<div><b>Petrotest Test Equipment</b> &nbsp;&nbsp;&nbsp;&nbsp; <img style="align=right;" src="images/indonesia-flag.png" alt="indonesia" width="10" height="10" /> <br /><br /><br />
	<p style=" margin-top : -2em; text-align:justify;font-family:Arial, Helvetica, Verdana, sans-serif; font-size:11px;"> <b>Petrotest</b> ranges of products are applied for Flammability, Distillation, Fuel Testing, Lubricating Testing, Greases, Bitumen & Wax Testing, Wax, Penetration & Texture Testing, and General Lab Equipment. All Petrotest equipment has a widely range application in petroleum testing and general lab according to ASTM, DIN, IP, ISO standard for the above testing.
Please find attached some of  product brochures for your reference in choosing the equipment.</p> </br>

	<p style=" font-style:italic; margin-top : -1em; font-family:Arial, Helvetica, Verdana, sans-serif; font-size:11px;"><b>Click here</b> <a style="  font-family:Arial-italic, Helvetica, Verdana, sans-serif; font-size:11px;color:blue;" href="petrotest.pdf">Petrotest</a><b> brosur</b></p>
	
	</div>
	<h3>CSMS Certificate from Pertamina</h3>
	<div>
	<p>Achievements</p></br>
	<p style=" margin-top :-1em;"><img style="align=center;" src="images/csms-certificate.png" alt="indonesia" width="180" height="120" /></p></div>
	<h3>Make Achoice To Your Succes</h3>
	<div><img src="images/banner.jpg" alt="" width="370" height="150" /></div>
</div>
</div>    

			
			
			<div class="second">
				<img src="images/title4.gif" alt="" width="131" height="27" />
				<p style="margin-bottom:25px;"><strong>Mechanical Heat Transfer Device</strong></p>
				
				<div class="border">
					<p style="margin:-15px 0 -5px;"><strong>* Petrolium Test Instrument </strong></p>
					<ul class="list">
			
					<li><a href="#">Flammability</a></li>
					<li><a href="#">Destilation</a></li>
					<li><a href="#">Fuel Testing</a></li>
					<li><a href="#">Lubricants Testing</a></li>
					<li><a href="#">Bitumen & Wax Testing</a></li>
					<li><a href="#">Penetration Texture Testing</a></li>
					<li><a href="#">General Web Equipment</a></li>
					</ul>
					<p><strong>* Soot Blower</strong></p>
			
					<ul class="list">
					<li><a href="#"><strong>Cleaning Systems for Heating </br>and Reaction Surface</strong></a></li>
					</ul>
					
					<p ><strong>* Combust on Equipment. </strong></p>
					<ul class="list">
			
					<li><a href="#">Industrial Burner</a></li>
					<li><a href="#">Flame Scanner.</a></li>
				
					</ul>
					
				</div>
				
				<div>
					<p ><strong>* Gas Analyzer. </strong></p>
			<ul class="list">
			
				<li><a href="#">Emissions Monitoring</a></li>
				<li><a href="#">Speciality Gases and </br>Chemicals.</a></li>
				<li><a href="#">Food and Beverage </br>and Monitoring.</a></li>
				<li><a href="#">Air Separation.</a></li>
				<li><a href="#">UPH Semiconductor MFR Powergenerator.</a></li>
			</ul>
			<p ><strong>Plant Performance & Effeciensi Assessment, Installation, Commisioning & Training, Calibration & Troubleshooting, Overhaul and Maintenance. </strong></p>
			
			</div>
			</div>
			</br></br>
			
			<div style="margin-left:25px;"class="fb-like" data-href="http://localhost/industrial/index.php" data-send="true" data-width="100" data-show-faces="true"></div></br>
			<div class="google">
			<div class="g-plusone" data-annotation="inline" data-width="90"></div>
			</div>
		</div>
	</div>
	 
	<div id="footer">
		<div class="copy">
			Copyright &copy; 2013 Heat Transfer Solution<br /> All Rights Reserved<br />
			<a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
		</div>
		<div class="dots">
			<span>PT. Benua Cakra Petrolindo</span>
			<p>Kompleks Roxy Mas Blok D5 No. 3<br /> Jakarta - 14250</p>
		</div>
		<div class="tel">
			<span>Tel/Fax : +62(800)123-4567<br /> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; +62(800)123-1234</span>
			<p >&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; E-mail : <a href="#">becap@becap.com</a></p>
		</div>
	</div>
</body>
</html>
