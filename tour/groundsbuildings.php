<html>
	<head>
		<title>Grounds Buildings | Camp Marcella</title>
		<link rel="stylesheet" type="text/css" href="css/CSS-Tour.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="standard" href="css/CSS-Tour.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="large-print" href="css/CSS-Tour-LargePrint.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="black-white" href="css/CSS-Tour-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="white-black" href="css/CSS-Tour-WhiteOnBlack.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only" href="css/CSS-Tour-TextOnly.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-bw" href="css/CSS-Tour-TextOnly-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-wb" href="css/CSS-Tour-TextOnly-WhiteOnBlack.css"/>
		<script src="../scripts/styleswitch.js" type="text/javascript"></script>
        <script>
			window.onload =	function()	{	var stylesheet = getCookie("selectedtitle");
											var option;
											
											for(var x=0; (option=document.getElementsByTagName("option")[x]); x++) 
											{
												if(option.getAttribute("value")==stylesheet) 
												{
													option.selected=true;
												}
											}
										}
		</script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>	
		<script type="text/javascript">
			function home()
			{
				window.location="../index.php";
			}
		</script>
	</head>
	<body>
		 <?php
			//Include MySQL Configuration
			include('../config/config.php');
 
			// Connect to the database
			mysql_connect($db_host, $db_user, $db_password) or die('not connecting');
 
			// Select the database
			mysql_select_db($db_name) or die ('no database selected');
		?>
	
		<!--Blog form.-->
		<div id="banner">
			<div id="bannerlogo" onClick="home()">
			</div>			
			<div id="bannertext">
				Grounds Buildings
			</div>
			<form action="styleswitch.js" id="switchform">
				<select id="form-item" name="switchcontrol" onChange="chooseStyle(this.options[this.selectedIndex].value, 60)">
					<option value="standard">Standard</option>
					<option value="large-print">Large Print</option>
					<option value="black-white">Black on White</option>
					<option value="white-black">White on Black</option>
					<option value="text-only">Text Only</option>
					<option value="text-only-bw">Text Only, Black on White</option>
					<option value="text-only-wb">Text Only, White on Black</option>
				</select>
			</form>
		</div>
        
        <div id="navigationbar"></div>
		
		<div id="tab_nav">
			<a href="../index.php" class="nav">
				<ul class="tab_nav-item">Home</ul>
			</a>				
			<a href="../contributors/index.php" class="nav">
				<ul class="tab_nav-item">Contributors</ul>
			</a>				
			<a href="../forum/index.php" class="nav">
				<ul class="tab_nav-item">Forum</ul>
			</a>
			<a href="index.php" class="nav">
				<ul class="tab_nav-item">News</ul>
			</a>
			<a href="../tour/index.php" class="nav">
				<ul class="tab_nav-item_select">Tour</ul>
			</a>
			<a href="../about/index.php" class="nav">
				<ul class="tab_nav-item">About</ul>
			</a>
            <a href="../help/index.php" class="nav">
				<ul class="tab_nav-item">Help</ul>
			</a>				
		</div>
		
		<div id="content">
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						<b>Notice</b>
					</span>
				</div>
				<div id="entry_content">
					<center><span style="color: #ff0000"><h1><b>All of the photos on this page came from the original website and will not be used for the final website.</b></h1></span></center>
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Grounds Buildings Tour
					</span>
				</div>
				<div id="entry_content">
					About this page:<br/>
					-Grounds buildings are buildings on the grounds that allow camp to be run<br/>
					-List the uses of grounds buildings<br/>
					-For grounds buildings with unique staff, stress staff qualification<br/>
					-Concluding statement: Grounds buildings are run efficiently by qualified staff
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Infirmary
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/groundsbuildings/infirmary-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/groundsbuildings/infirmary-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About the infirmary:<br/>
					-The infirmary is where campers go if they are hurt or need medication<br/>
					-Infirmary is staffed by qualified nurses<br/>
					-Air-conditioned<br/>
					-Two beds<br/>
					-Medications locked up<br/>
					-Concluding statement: The infirmary is a safe place that is prepared to take care of any situation that might arise
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Dining Hall
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="33%"><img src="images/groundsbuildings/kitchen-exterior.jpg" width="100%"/></td>
								<td width="33%"><img src="images/groundsbuildings/kitchen-interior-dining.jpg" width="100%"/></td>
								<td width="33%"><img src="images/groundsbuildings/kitchen-interior-kitchen.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About dining hall:<br/>
					-The dining hall is where campers eat breakfast, lunch, and dinner<br/>
					-Staffed by camp chef<br/>
					-Eat outside on benches + barbecue on sunny days<br/>
					-Concluding statement: Yum camp food	
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Laundry Room
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/groundsbuildings/laundry-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/groundsbuildings/laundry-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About laundry room:<br/>
					-Staffed full-time<br/>
					-Clothes are washed every other day<br/>
					-Concluding statement: It's a laundry room, what else were you expecting
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Main Lodge
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="33%"><img src="images/groundsbuildings/lodge-exterior.jpg" width="100%"/></td>
								<td width="33%"><img src="images/groundsbuildings/lodge-interior-main.jpg" width="100%"/></td>
								<td width="33%"><img src="images/groundsbuildings/lodge-interior-office.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About main lodge:<br/>
					-The main lodge is where the primary office of camp is<br/>
					-Several rooms for grounds staff<br/>
					-Concluding statement: Main lodge is where office stuff gets done		
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Shower House
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/groundsbuildings/showerhouse-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/groundsbuildings/showerhouse-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About shower house:<br/>
					-The shower house is where campers take daily showers<br/>
					-4 male and 4 female shower stalls with a wall between them<br/>
					-Concluding statement: Bring flip-flops	
				</div>
			</div>
		</div>
	</body>
</html>