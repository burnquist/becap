<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Service |Heat Transfer Solution (BECAP)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5" />
<link rel="stylesheet" type="text/css" href="style.css" />

	<script src="jquery-1.9.1.js"></script>
	<script src="ui/jquery.ui.effect.js"></script>
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
	.google{
	margin:0em 0em 5px 2em;
	}
	
	.width-col1{
	width: 162px;
	margin:20px 10px 5px 20px;
	}
	.width-col2{
	width: 162px;
	margin:-225px 10px 5px 180px;
	}
	.width-col3{
	width: 162px;
	margin:10px 5px 5px 20px;
	}
	.width-col4{
	width: 162px;
	margin:-225px 5px 5px 180px;
	}
	.width-col5{
	width: 162px;
	margin:15px 5px 5px 20px;
	}
	.width-col6{
	width: 162px;
	margin:-225px 5px 5px 180px;
	}
	.width-col7{
	width: 162px;
	margin:15px 5px 5px 20px;
	}
	.width-col8{
	width: 162px;
	margin:-225px 5px 5px 180px;
	}
	.width-col9{
	width: 162px;
	margin:20px 5px 5px 20px;
	}
	.width-col10{
	width: 350px;
	margin:5px 10px 5px 20px;
	}
	.width-col11{
	width: 350px;
	margin:5px 10px 5px 20px;
	}
	.shadow {
	-moz-box-shadow:    0px 0px 5px 1px #ccc;
	-webkit-box-shadow: 0px 0px 5px 1px #ccc;
	box-shadow:         0px 0px 5px 1px #ccc;
	}
	.one-edge-shadow {
	-webkit-box-shadow: 0 0px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
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
	<script  type="text/javascript">
     $("a.link").on("click",function(){
         window.open('www.yourdomain.com','_blank');
     });
</script>
	
	

		
	
	<script>
	$(function() {
		// run the currently selected effect
		function runEffect() {
			// get effect type from
			var selectedEffect = $( "#effectTypes" ).val();

			// most effect types need no options passed by default
			var options = {};
			// some effects have required parameters
			if ( selectedEffect === "scale" ) {
				options = { percent: 0 };
			} else if ( selectedEffect === "transfer" ) {
				options = { to: "#button", className: "ui-effects-transfer" };
			} else if ( selectedEffect === "size" ) {
				options = { to: { width: 200, height: 60 } };
			}

			// run the effect
			$( "#effect" ).effect( selectedEffect, options, 500, callback );
		};

		// callback function to bring a hidden box back
		function callback() {
			setTimeout(function() {
				$( "#effect" ).removeAttr( "style" ).hide().fadeIn();
			}, 1000 );
		};

		// set effect from select menu value
		$( "#button" ).click(function() {
			runEffect();
			return false;
		});
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
			<li><a href="achievements.php">.:: Achievements</a></li>
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
		<img src="images/service.gif" alt="" width="245" height="36" />
			<p style="text-align: Justify">
			<strong>Heat Tranfer Solutions.</strong></br></br>

			PT. Benua Cakra Petrolindo or (BECAP) is, heat transfer company based solutions are highly experienced, serving the Oil and Gas, Petrolium Test Instrument, Soot Blower, Combust on Equipment, Gas Analyzer, Plant Performance & Effeciensi Assessment, Installation Commisioning & Training Calibration & Troubleshooting, Overhaul and Maintenance in Industrial sector.

			Committed to providing our clients with design solutions are the most effective heat transfer and remain qualified, competitive providers in terms of supply, manufacturing, maintenance, cleanup and site services and Spare Part Supply. BECAP will provide the following services for all your Heat transfer in accordance with the requirements:
			</br></br>
			* Design </br>
			* Manufacture</br>
			* Maintenance</br>
			* Cleaning and Site Service</br>
			* Spares</br></br>


			Our in-house expertise Enables us to address technically sophisticated projects and, through our partnerships with global leaders, more technically sophisticated equipment and supply. Our Maintenance Workshop has an enviable reputation for the service, rebuild and repair. We have the engineering depth for complex heat transfer solutions in both Thermal and Mechanical Design disciplines and code conformance requirements with design capabilities
			</p>
		
			
			<p style="margin-top:-10px;text-align: Justify;">
			<strong> </strong> 
			</p>
			<p>
			
			</p>
			<p style="margin-top:-10px;text-align: Justify;">
			<strong>
			<ul class="list">
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				
			</ul> </strong> </br> 
			</p>
			
			<p style="margin-top:-10px;text-align: Justify;">
			
			</p>
													
			
			<p > <img src="images/logo-footer.jpg" alt="" width="180" height="50" /></p>
			
		</div>
		<div id="right">
		<!----  product  !------->
	<div class="width-col1">	
	<div class="toggler">
	<div id="effect" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all">FOTO SERVICE ONE</h3>
		<p style="margin:5px 5px 3px 8px; font-size:12px;">
			
		</p> 
		
		<p style="margin:5px 5px 5px 5px;">
			<div class="shadow" style="width:150px; margin:5px 5px 5px 5px;">
			<img class="shadow" src="images/banner.jpg" alt="" width="150" height="180" />
			</div>
		</p>
		<p style="margin:5px 5px 5px 5px;font-style:italic;">
			
		</p>
	</div>
	</div></br>
	<div class="width-col2">
	<div class="toggler">
	<div id="effect" class="ui-widget-content ui-corner-all">
		<h3 style="color:#bbbbE;"class="ui-widget-header ui-corner-all">FOTO SERVICE TWO</h3>
		<p style="margin:5px 5px 3px 5px; font-size:12px;">
			
		</p> 
		
		<p style="margin:5px 5px 5px 5px;">
			<div class="shadow" style="width:150px; margin:5px 5px 5px 5px;">
			<img class="shadow" src="images/banner.jpg" alt="" width="150" height="180" />
			</div>
		</p>
		<p style="margin:5px 5px 5px 5px;font-style:italic;">

		</p>
	</div>
	</div></br>
	
	
	
	</div>
	
	</div>    
	<!----  end product  !------->
	
		
	
			<!----  kanan  !------->
			<div class="second">
				
			</div>
			<!----  end kanan  !------->
			</br></br>
			<div style="margin-left:25px;"class="fb-like" data-href="http://localhost/industrial/index.php" data-send="true" data-width="100" data-show-faces="true"></div>
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
