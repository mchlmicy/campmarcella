<html>
	<head>
		<title>News | Camp Marcella</title>
		<link rel="stylesheet" type="text/css" href="css/css.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="standard" href="css/css.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="large-print" href="css/css-LargePrint.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="black-white" href="css/css-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="white-black" href="css/css-WhiteOnBlack.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only" href="css/css-TextOnly.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-bw" href="css/css-TextOnly-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-wb" href="css/css-TextOnly-WhiteOnBlack.css"/>
		<link rel="stylesheet" id="camera-css"  href="../css/camera.css" type="text/css" media="all"> 
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
	</head>
	<body>
    	<div id="banner">
			<span class="banner_logo" onClick="index.php"></span>			
			<span class="banner_text">News</span>
			<form action="../styleswitch.js" id="switchform">
				<select id="form-item" name="switchcontrol" onChange="chooseStyle(this.options[this.selectedIndex].value, 60);">
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
				<ul class="tab_nav-item_select">News</ul>
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
			<div id="entry">
				<div id="entry_header">
					<span class="entry_header_text">
						Tentative Summer Camp Session Dates
					</span>
				</div>
				<div id="entry_content">
					Yes-there will be a program for visually impaired children at Camp Marcella the summer of 2013!<br/>
                    <br/>
                    July 28, 2013 to August 3, 2013<br/>
					August 4, 2013 to August 10, 2013<br/>
                    <br/>
				</div>
			</div>
            <div id="entry">
				<div id="entry_header">
					<span class="entry_header_text">
						Calendar
                    </span>
				</div>
				<div id="entry_content">
                	Sunday, June 02, 2013 - Annual pig roast. More to follow.<br/>
					Sunday, July 28, 2013 to Saturday Aug. 03, 2013 First camping session (Tentative)<br/>
					Sunday, Aug. 04, 2013 to Saturday Aug. 10, 2013 Second camping session (Tentative)<br/>
					Sunday, Oct. 20, 2013 - Camp Marcella's Annual Harvest Luncheon (More to Follow)<br/>
                    <br/>	
				</div>
			</div>			
		</div>
	</body>
</html>