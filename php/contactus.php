<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Contact US | Heat Transfer Solution (BECAP) </title>
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
	.google{
	margin:0em 2em 2em 26em;
	}
	.margin{
	margin:0em 3em 1em 35em;
	}
	
	.width-col1{
	width: 400px;
	margin:2px 5px 5px 15px;
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
	.text_width {
	width : 250px 250px;
	
	}
	
	 #content{left:0%;border:1px solid #ccc;}
	 #container{
	  height:200px;
	  margin-top:10%;
	  background-repeat:repeat-x, repeat-y;
	 }
	 #container #content{
	  border:0px #000 solid;
	  -moz-box-shadow:    3px 3px 5px 6px #ccc;
	  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
	  box-shadow:         3px 3px 5px 6px #ccc;
	  padding-top:30px;
	  padding-bottom:30px;
	  padding-left:35px;
	  /* jarak kanan dan kiri */
	  margin-left:1%;
	  margin-right:1%;
	  background:white;
	 }
	 #title_form{border-bottom:1px solid #ccc;
	 text-shadow:1px 1px #ccc;font-size:24px;
	 font-weight:bold;
	
	 margin-bottom:10px;
	 }
	 
	 .label_width{ margin-left:10px;width:70px;}
	 .text_width{width:300px;  border: 1px solid grey;}
	 .btn{ 
	 border: 1px solid #629dFF;
	 background-color: grey;
     font-family: Tahoma, Verdana, Sans;
     font-size: 11px;
     color: #FFFFFF;
     cursor: pointer;
     height: 21px;
     vertical-align: top;
     margin: 0;		
	 padding-bottom: 2px;
	 font-weight: bold;
	 width: 150px;}
	 .msg{margin : 0px 0px 5px 30px;;height:28px;width:330px;background: #dddddd}
	 .msg p{  text-shadow:1px 1px #f1f1f1;text-align:center;padding:5px;}

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
		
			<p style="text-align: Justify">
			<strong>Contact us.</strong></br></br>




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
													
			
			<p style="margin-top:32em;"> <img src="images/logo-footer.jpg" alt="" width="180" height="50" /></p>
			
		</div>
		<div id="right">
		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$tujuan = "burnquist73@gmail.com";
		$subject = $_POST["subject"];
		$pesan = $_POST["pesan"];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'To: ' . $to . "\r\n";
		$headers .= 'From: '. $_POST["nama"] . $_POST["email"] .$_POST["pesan"]. "\r\n";
		mail($tujuan, $subject, $pesan);
		$msg="Thank You!, Message is delivered. ";
		}
		?>
		
	 

	<div class="width-col1">	
	<div class="toggler">
	<div id="effect" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all">Contact Form</h3> </br>
	 
	   <p style="margin-left:10px;"><strong>Contact Identification Data </strong></p></br>
	   <?php if ($msg!=''): ?>
	   <div class="msg"><p><?php echo $msg;?></p></div>
	   <?php endif;?>
	   <form method="POST">
	    <table border="0">
	     <tr>
	      <td ><div class="label_width">Name</div></td>
	      <td><input type="text" name="nama" class="text_width"/></td>
	     </tr>
	     <tr>
	      <td><div class="label_width">Email</div></td>
	      <td><input type="text" name="email" class="text_width"/></td>
	     </tr>
	     <tr>
	      <td><div class="label_width">Subject</div></td>
	      <td><input type="text" name="subject" class="text_width"/></td>
	     </tr>
	     <tr>
	      <td><div class="label_width">Message</div></td>
	      <td><textarea name="pesan" class="text_width"></textarea></td>
	     </tr>
	     <tr><td></td><td></br><input type="submit" name="kirim" value="Kirim" style="border: grey;
    background-color: grey;
    font-family: Tahoma, Verdana, Sans;
    font-size: 11px;
    color: #FFFFFF;
    cursor: pointer;
    height: 21px;
    vertical-align: top;
    margin-left: 150px;		
	padding-bottom: 2px;
	font-weight: bold;
	width: 150px;
	"/></td></tr>
	    </table></br>
	   </form>
	   </div>
	 </div>
	 </div>
	
	
	
	
	</div>    
	<!----  end product  !------->
	
		
	
			<!----  kanan  !------->
			<div class="second">
				
			</div>
			<!----  end kanan  !------->
			</br></br>
			<div class="google">
			<div  class="fb-like" data-href="http://localhost/industrial/index.php" data-send="true" data-width="100" data-show-faces="true"></div> </br>
			<div style="margin-left:25px;"class="g-plusone" data-annotation="inline" data-width="90"></div>
			</div>
<!-- Place this tag after the last +1 button tag. -->

			

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
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
