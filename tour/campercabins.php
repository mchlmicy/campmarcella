<html>
	<head>
		<title>Camper Cabins | Camp Marcella</title>
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
				Camper Cabins
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
						Camper Cabins
					</span>
				</div>
				<div id="entry_content">
					About this page:<br/>
					-Camper cabins are cabins where campers sleep<br/>
					-List of camper cabins (separated male and female)<br/>
					-The fact that camper cabins have accessability features (but don't explain)<br/>
					-Concluding statement: It's a cabin, either sleep in it or get eaten by bears
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Cabins
					</span>
				</div>
				<div id="entry_content">
					<table width="100%">
						<tr width="100%">
							<td width="43.5%">
								<img src="images/campercabins/beaver.jpg" width="100%"/><br/><br/>
								<img src="images/campercabins/muskrat.jpg" width="100%"/><br/><br/>
								<img src="images/campercabins/opossum.jpg" width="100%"/><br/><br/>
								<img src="images/campercabins/otter.jpg" width="100%"/><br/><br/>
								<img src="images/campercabins/raccoon.jpg" width="100%"/><br/><br/>
								<img src="images/campercabins/squirrel.jpg" width="100%"/>
							</td>
							<td width="56.5%">
								<img src="images/campercabins/cabin-floorplan.jpg" width="100%"/>
							</td>
						</tr>
					</table>
					<hr/>
					About cabins:<br/>
					-Camper cabins are <i>still</i> cabins where campers sleep<br/>
					-Cabins are maintained by contributions by organizations like the lions and donations from people like you<br/>
					-Concluding statement: Cabins are big and spacious enough to fit all of the campers
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Cabin Layout
					</span>
				</div>
				<div id="entry_content">
					<div>
						<table width="100%">
							<tr width="100%">
								<td width="50%" style="vertical-align: top">
									<span class="entry_description_text">Bathroom</span><br/>
									<hr style="border: 1px solid #c0c0c0"/>
									-Location in cabin<br/>
									-Description of facilities<br/>
									-Reminder about showers separate of cabin
								</td>
								<td width="50%">
									<img src="images/campercabins/cabin-bathroom.jpg" width="100%"/>
								</td>
							</tr>
						</table>
					</div>
					<div style="clear:both; padding-top: 5px">
						<hr/>
					</div>
					<div>
						<table width="100%">
							<tr width="100%">
								<td width="50%" style="vertical-align: top">
									<span class="entry_description_text">Camper Beds</span><br/>
									<hr style="border: 1px solid #c0c0c0"/>
									-Location in cabin<br/>
									-Description of facilities<br/>
									-Storage: Underbed & Cubbies
								</td>
								<td width="50%">
									<img src="images/campercabins/cabin-camperbeds.jpg" width="100%"/>
								</td>
							</tr>
						</table>
					</div>
					<div style="clear:both; padding-top: 5px">
						<hr/>
					</div>
					<div>
						<table width="100%">
							<tr width="100%">
								<td width="50%" style="vertical-align: top">
									<span class="entry_description_text">Common Room</span><br/>
									<hr style="border: 1px solid #c0c0c0"/>
									-Location in cabin<br/>
									-Description of facilities<br/>
									-Uses
								</td>
								<td width="50%">
									<img src="images/campercabins/cabin-commonroom.jpg" width="100%"/>
								</td>
							</tr>
						</table>
					</div>
					<div style="clear:both; padding-top: 5px">
						<hr/>
					</div>
					<div>
						<table width="100%">
							<tr width="100%">
								<td width="50%" style="vertical-align: top">
									<span class="entry_description_text">Counsellor Beds</span><br/>
									<hr style="border: 1px solid #c0c0c0"/>
									-Location in cabin<br/>
									-Description of facilities<br/>
								</td>
								<td width="50%">
									<img src="images/campercabins/cabin-counsellorbeds.jpg" width="100%"/>
								</td>
							</tr>
						</table>
					</div>
					<div style="clear:both; padding-top: 5px">
						<hr/>
					</div>
					<div>
						<table width="100%">
							<tr width="100%">
								<td width="50%" style="vertical-align: top">
									<span class="entry_description_text">Porch</span><br/>
									<hr style="border: 1px solid #c0c0c0"/>
									-Location in cabin<br/>
									-Description of facilities<br/>
									-Uses
								</td>
								<td width="50%">
									<img src="images/campercabins/cabin-porch.jpg" width="100%"/>
								</td>
							</tr>
						</table>
					</div>
					<div style="clear:both">
					</div>
				</div>
			</div>
		</div>
	</body>
</html>