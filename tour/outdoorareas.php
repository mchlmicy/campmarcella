<html>
	<head>
		<title>Outdoor Areas | Camp Marcella</title>
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
				Outdoor Areas
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
						Outdoor Areas Tour
					</span>
				</div>
				<div id="entry_content">
					About this page:<br/>
					-Outdoor areas are areas outdoors that are of interest and are used by the camp<br/>
					-List general uses of outdoor areas (play, etc.)<br/>
					-Concluding statement: This is a camp, we don't lock campers indoors
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Barbecue Pit and Picnic Benches
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/outdoorareas/barbecuepit.jpg" width="100%"/></td>
								<td width="50%"><img src="images/outdoorareas/picnictables.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About the barbecue pit and benches:<br/>
					-The barbecue pit and picnic benches are used for eating outside<br/>
					-Often on sunny days campers eat meals prepared at the barbecue outside<br/>
					-Additionally, groups like the Lion's Club occasionally cater barbecue to the campers themselves<br/>
					-The barbecue pit itself was donated to Camp Marcella<br/>
					-Concluding statement: 3 Cheers for barbecue
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Fields
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="33%"><img src="images/outdoorareas/basketballcourt.jpg" width="100%"/></td>
								<td width="33%"><img src="images/outdoorareas/field.jpg" width="100%"/></td>
								<td width="33%"><img src="images/outdoorareas/swingsetandpoles.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About fields:<br/>
					-Camp Marcella has many areas outside where campers can play and enjoy outdoor activities<br/>
					-Basketball court (used during phys. ed.)<br/>
					-Field used for phys. ed. activities (list)<br/>
					-Swing set and climbing poles behind cabin row<br/>
					-Concluding statement: Physical activity!!!
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Nature Path
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="33%"><img src="images/outdoorareas/naturepath.jpg" width="100%"/></td>
								<td width="33%"><img src="images/outdoorareas/lakesidebench.jpg" width="100%"/></td>
								<td width="33%"><img src="images/outdoorareas/lakesidefirepit.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About nature path:<br/>
					-Nature path is used for nature activities<br/>
					-List a few nature activities<br/>
					-Lakeside bench for relaxation<br/>
					-Likeside firepit used in the past as a firepit<br/>
					-Concluding statement: Nature is fun, just don't play with nature
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						On the Lake
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/outdoorareas/bridgetosnakeisland.jpg" width="100%"/></td>
								<td width="50%"><img src="images/outdoorareas/gazebo.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About areas on the lake:<br/>
					-Man-made fresh-water lake w/fish<br/>
					-Snake Island<br/>
					-Bridge and gazebo are areas of relaxation<br/>
					-Gazebo also used for activities on nice days like nature<br/>
					-Concluding statement: Relaxation
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Pool and Waterfront
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/outdoorareas/pool.jpg" width="100%"/></td>
								<td width="50%"><img src="images/outdoorareas/waterfront.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About pool and waterfront:<br/>
					-The pool, floaties, and lifevests<br/>
					-The waterfront, boats, lifevests, and kayaks<br/>
					-Both are staffed by at least 2 qualified lifeguards at a time<br/>
				</div>
			</div>
		</div>
	</body>
</html>