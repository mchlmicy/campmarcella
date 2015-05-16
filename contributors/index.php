<html>
	<head>
		<title>Contributors | Camp Marcella</title>
		<link rel="stylesheet" type="text/css" href="../contributors/css/CSS-Contributors.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="standard" href="css/CSS-Contributors.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="large-print" href="css/CSS-Contributors-LargePrint.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="black-white" href="css/CSS-Contributors-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="white-black" href="css/CSS-Contributors-WhiteOnBlack.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only" href="css/CSS-Contributors-TextOnly.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-bw" href="css/CSS-Contributors-TextOnly-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-wb" href="css/CSS-Contributors-TextOnly-WhiteOnBlack.css"/>
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
				Contributors
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
		
		<div id="navigationbar">
			<span class="navigation_container">
				<span class="navigation_link" onClick="window.location='donate.php'">
					<a href="donate.php" class="nav" style="text-decoration: none">Donate</a>
				</span>
				<span class="navigation_link" onClick="window.location='wall-of-honor.php'">
					<a href="wall-of-honor.php" class="nav" style="text-decoration: none">Wall of Honor</a>
				</span>
			</span>
		</div>
		
		<div id="tab_nav">
			<a href="../index.php" class="nav">
				<ul class="tab_nav-item">Home</ul>
			</a>				
			<a href="index.php" class="nav">
				<ul class="tab_nav-item_select">Contributors</ul>
			</a>				
			<a href="../forum/index.php" class="nav">
				<ul class="tab_nav-item">Forum</ul>
			</a>
			<a href="../news/index.php" class="nav">
				<ul class="tab_nav-item">News</ul>
			</a>
			<a href="../tour/index.php" class="nav">
				<ul class="tab_nav-item">Tour</ul>
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
						A History of Help
					</span>
				</div>
				<div id="entry_content">
					Short text on all the help and donations that Camp Marcella has received over the years.
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						New Jersey Lions' Club
					</span>
				</div>
				<div id="entry_content">
					<center><div id="lions_club"></div></center>
					There are no words to express the gratitude felt by all of us in the Camp Marcella family for the tireless support of the New Jersey Lions.  Over the past 60 years Camp Marcella's facilities have grown from a handful of buildings to a thoroughly modern, state-of-the-art, 23 building  facility specially adapted for persons with visual impairments and multiple disabilities.  Your contributions of funds and labor make it possible for us to play the games, sing the songs, share experiences, learn from each other and build memories that will not only be something to cherish for a lifetime, but also help to form our lives.   So from all of us (campers and staff) who have learned so much from our summers at camp, thank you!
				</div>
			</div>
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						Contributors
					</span>
				</div>
				<div id="entry_content">
					The New Jersey Camp for Blind Children – Camp Marcella - recognizes community groups, corporations and Technical Support individuals that contribute to the continued improvement of the Camp. Thank you for your generous contributions to Camp Marcella. Over the past 60 years, they have helped thousands of visually impaired and multiple handicapped children enjoy Summer activities among their peers.<br/>
					<br/>
					<table style="width: 100%">
						<?php
							//Get blog entries from the database.
							$sql = "SELECT contributor_name, contributor_link, contributor_locale FROM contributors_list ORDER BY contributor_name";
							$result = mysql_query($sql);
							while($row = mysql_fetch_array($result, MYSQL_ASSOC))
							{
								if($row['contributor_link']!="")
								{
									echo "	
											<tr>
												<td>
													<a href=\"{$row['contributor_link']}\" target=\"_blank\">{$row['contributor_name']}</a>
												</td></a>
												<td style=\"text-align: right\">
													{$row['contributor_locale']}
												</td>
											</tr>
										";								
								}
								else if($row['contributor_link']=="")
								{
									echo "	<tr>
												<td>
													{$row['contributor_name']}
												</td>
												<td style=\"text-align: right\">
													{$row['contributor_locale']}
												</td>
											</tr>
										";								
								}
							}		
						?>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>