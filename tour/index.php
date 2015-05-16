<html>
	<head>
		<title>Tour | Camp Marcella</title>
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
				Tour
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
						Grounds Tour
					</span>
				</div>
				<div id="entry_content">
					About this page:<br/>
					-Location (i.e. camp location and relative geography [woods])<br/>
					-List of grounds features (pages linked to on this page)<br/>
					-How all of the facilities are made for easy access to individuals who are blind or visually impaired<br/>
					-Concluding statement: Camp Marcella is a good camp <i>AND</i> it's accessable to individuals who are blind or visually imapired
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						<a href="activitiesbuildings.php" class="nav" style="text-decoration: none">Activities Buildings</a>
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="25%"><a href="activitiesbuildings.php"><img src="images/category/activitiesbuildings_01.jpg" width="100%"/></a></td>
								<td width="25%"><a href="activitiesbuildings.php"><img src="images/category/activitiesbuildings_02.jpg" width="100%"/></a></td>
								<td width="25%"><a href="activitiesbuildings.php"><img src="images/category/activitiesbuildings_03.jpg" width="100%"/></a></td>
								<td width="25%"><a href="activitiesbuildings.php"><img src="images/category/activitiesbuildings_04.jpg" width="100%"/></a></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About the activities buildings:<br/>
					-Activities buildings are where activities are held<br/>
					-Lists of activities held<br/>
					-Talk about aid and donations from organizations like the Lions and how much that has helped (we want you to donate)<br/>
					-Concluding statement: Activities buildings are something all campers will enjoy<br/>
					-Link at end of text to activities buildings page
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						<a href="campercabins.php" class="nav" style="text-decoration: none">Camper Cabins</a>
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="25%"><a href="campercabins.php"><img src="images/category/campercabins_01.jpg" width="100%"/></a></td>
								<td width="25%"><a href="campercabins.php"><img src="images/category/campercabins_02.jpg" width="100%"/></a></td>
								<td width="25%"><a href="campercabins.php"><img src="images/category/campercabins_03.jpg" width="100%"/></a></td>
								<td width="25%"><a href="campercabins.php"><img src="images/category/campercabins_04.jpg" width="100%"/></a></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About the camper cabins:<br/>
					-Camper cabins are cabins where campers live<br/>
					-Reference how often campers are in cabins<br/>
					-Stress the accessability of cabins<br/>
					-Concluding statement: Your kids are safe with us<br/>
					-Link at end of text to camper cabins page
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						<a href="groundsbuildings.php" class="nav" style="text-decoration: none">Grounds Buildings</a>
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="25%"><a href="groundsbuildings.php"><img src="images/category/groundsbuildings_01.jpg" width="100%"/></a></td>
								<td width="25%"><a href="groundsbuildings.php"><img src="images/category/groundsbuildings_02.jpg" width="100%"/></a></td>
								<td width="25%"><a href="groundsbuildings.php"><img src="images/category/groundsbuildings_03.jpg" width="100%"/></a></td>
								<td width="25%"><a href="groundsbuildings.php"><img src="images/category/groundsbuildings_04.jpg" width="100%"/></a></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About the grounds buildings:<br/>
					-What grounds buildings are used for<br/>	
					-List of grounds buildings<br/>
					-Stress qualification of staff employed to these buildings<br/>
					-Concluding statement: The grounds buildings are just another facet of the camp grounds<br/>
					-Link at end of text to camper cabins page					
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						<a href="outdoorareas.php" class="nav" style="text-decoration: none">Outdoor Areas</a>
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="25%"><a href="outdoorareas.php"><img src="images/category/outdoorareas_01.jpg" width="100%"/></a></td>
								<td width="25%"><a href="outdoorareas.php"><img src="images/category/outdoorareas_02.jpg" width="100%"/></a></td>
								<td width="25%"><a href="outdoorareas.php"><img src="images/category/outdoorareas_03.jpg" width="100%"/></a></td>
								<td width="25%"><a href="outdoorareas.php"><img src="images/category/outdoorareas_04.jpg" width="100%"/></a></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About the outdoor areas<br/>
					-Outdoor areas are areas outdoors where the campers play<br/>
					-List of different outdoor areas<br/>
					-List outdoor areas off of camp grounds<br/>
					-Concluding statement: No cabin fever<br/>
					-Link at end of text to outdoor areas page
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						<a href="staffbuildings.php" class="nav" style="text-decoration: none">Staff Buildings</a>
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="25%"><a href="staffbuildings.php"><img src="images/category/staffbuildings_01.jpg" width="100%"/></a></td>
								<td width="25%"><a href="staffbuildings.php"><img src="images/category/staffbuildings_02.jpg" width="100%"/></a></td>
								<td width="25%"><a href="staffbuildings.php"><img src="images/category/staffbuildings_03.jpg" width="100%"/></a></td>
								<td width="25%"><a href="staffbuildings.php"><img src="images/category/staffbuildings_04.jpg" width="100%"/></a></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About the staff buildings:<br/>
					-Staff buildings are places where the staff can go<br/>
					-Different kinds of staff buildings: cabins, offices, meeting rooms<br/>
					-Camp Marcella: Git 'er done<br/>
					-Concluding statement: You don't really care but we're gonna tell you about it anyway<br/>
					-Link at the end of text to staff buildings page
				</div>
			</div>
		</div>
	</body>
</html>