<html>
	<head>
		<title>Activities Buildings | Camp Marcella</title>
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
				Activities Buildings
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
						Activities Buildings Tour
					</span>
				</div>
				<div id="entry_content">
					About this page:<br/>
					-Activities buildings are buildings where activities are held<br/>
					-List the kind of activites held in these buildings<br/>
					-Hope to instill independence in children and young adults<br/>
					-Concluding statement: Activities buildings are fun
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Arts and Crafts Building
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/activitiesbuildings/artsandcrafts-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/activitiesbuildings/artsandcrafts-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About arts and crafts building:<br/>
					-The arts and crafts buiding is where arts and crafts are done<br/>
					-List of different kinds of arts and crafts made<br/>
					-Reference a desire for children and young adults to be independent<br/>
					-Concluding statement: Arts and crafts are fun
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Boathouse
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/activitiesbuildings/boathouse-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/activitiesbuildings/boathouse-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About boathouse:<br/>
					-The boathouse is where the boats are kept<br/>
					-List of different kinds boats and safety equipment<br/>
					-List activities on boats<br/>
					-Concluding statement: Boats are fun	
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Bowling Alley
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/activitiesbuildings/bowlingalley-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/activitiesbuildings/bowlingalley-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About bowling alley:<br/>
					-It's a bowling alley and we have one<br/>
					-Bowling is fun in general and is good on rainy days<br/>
					-Concluding statement: Bowling is fun
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Gameroom
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/activitiesbuildings/gameroom-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/activitiesbuildings/gameroom-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About gameroom:<br/>
					-The gameroom is a room where the games are<br/>
					-List of different kinds of games in gameroom<br/>
					-Game room is fun in general and is good on rainy days<br/>
					-Concluding statement: Gameroom is fun		
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Library
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/activitiesbuildings/library-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/activitiesbuildings/library-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About library building:<br/>
					-The library has a collection of books and movies<br/>
					-Donated books and library by organizations like Lion's Club<br/>
					-Concluding statement: The library is fun	
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Nature Barn
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/activitiesbuildings/naturebarn-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/activitiesbuildings/naturebarn-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About nature barn:<br/>
					-The nature barn is a barn where campers learn about nature<br/>
					-List of different kinds of activities held in barn<br/>
					-List of different kinds of activities held around the lake<br/>
					-Concluding statement: Nature is fun	
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						PE Shed
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/activitiesbuildings/peshed-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/activitiesbuildings/peshed-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About PE Shed:<br/>
					-The PE Shed is a shed where supplies for phys. ed. are stored<br/>
					-Kinds of activities set up by phys. ed.<br/>
					-Concluding statement: Phys. Ed. is fun	
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Rec Hall
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/activitiesbuildings/rechall-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/activitiesbuildings/rechall-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About Rec Hall:<br/>
					-The Rec Hall is a where a bunch of stuff happens<br/>
					-Sentence dedicated to music<br/>
					-Sentence dedicated to end of the day activities<br/>
					-Sentence dedicated to special events held in Rec Hall<br/>
					-Concluding statement: Events in the Rec Hall are fun
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Rogoff Building
					</span>
				</div>
				<div id="photo_header">
					<center>
						<table width="100%" style="border-bottom: 1px solid #aaaaaa">
							<tr width="100%">
								<td width="50%"><img src="images/activitiesbuildings/rogoff-exterior.jpg" width="100%"/></td>
								<td width="50%"><img src="images/activitiesbuildings/rogoff-interior.jpg" width="100%"/></td>
							</tr>
						</table>
					</center>					
				</div>
				<div id="entry_content">
					About Rogoff Building:<br/>
					-Lifeskils is held in the Rogoff building<br/>
					-List of different activities in lifeskills<br/>
					-Reference to wanting to instill independence<br/>
					-Concluding statement: Lifeskills is fun	
				</div>
			</div>
		</div>
	</body>
</html>