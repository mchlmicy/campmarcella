<html>
	<head>
		<title>Donate | Camp Marcella</title>
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
		<div id="banner">
			<div id="bannerlogo" onClick="home()">
			</div>			
			<div id="bannertext">
				Donate
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
						Donations to Camp Marcella
					</span>
				</div>
				<div id="entry_content">
					<center>
						<h1>Camp Marcella now has a paypal account which is a safe and easy way to donate to the camp. The paypal site is safe, secure and you do not need to join paypal to donate.</h1>
						<h1>We have been providing a wonderful camping experience to the visually impaired and multiple challenged children of New Jersey for over 60 years.</h1>
						<h2>Thank you for your support.</h2>
						<button onClick="window.location='https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MHSB274TTAMKQ'">Click here to donate.</button>
						<h3>"THIS IS THE OFFICIAL WEBSITE FOR THE NEW JERSEY CAMP FOR BLIND CHILDREN, INC., DOING BUSINESS AS CAMP MARCELLA"</h3>
					</center>
				</div>
			</div>
		</div>
	</body>
</html>