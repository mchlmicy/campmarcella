<html>
	<head>
		<title>Help | Camp Marcella</title>
		<link rel="stylesheet" type="text/css" href="css/css.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="standard" href="css/css.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="large-print" href="css/css-LargePrint.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="black-white" href="css/css-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="white-black" href="css/css-WhiteOnBlack.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only" href="css/css-TextOnly.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-bw" href="css/css-TextOnly-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-wb" href="css/css-TextOnly-WhiteOnBlack.css"/>
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
			<span class="banner_text">Help</span>
			<form action="styleswitch.js" id="switchform">
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
		
		<div id="content-top">
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
				<a href="../news/index.php" class="nav">
					<ul class="tab_nav-item">News</ul>
				</a>
				<a href="../tour/index.php" class="nav">
					<ul class="tab_nav-item">Tour</ul>
				</a>
				<a href="../about/index.php" class="nav">
					<ul class="tab_nav-item">About</ul>
				</a>	
                <a href="index.php" class="nav">
					<ul class="tab_nav-item_select">Help</ul>
				</a>			
			</div>
		</div>
				
		<div id="content">
			<div id="entry">
				<div id="entry_header">
					<span class="entry_header_text">
						Website Design
					</span>
				</div>
				<div id="entry_content">
					<center>
                       	Camp Marcella's website has been designed from the start with the needs of individuals who are blind or visually impaired in mind. Below is a detailed description of how blind and visually impaired users can best take advantage of the design of this site.
                    </center>
				</div>
			</div>
			<div id="entry">
				<div id="entry_header">
					<span class="entry_header_text">
						The Style Switcher
					</span>
				</div>
				<div id="entry_content">
                	This website has been designed in a way so that it can be viewed in many different ways, filling the needs of individuals with differing visual impairments. This site has seven different styles: standard, large print, black on white, white on black, text only, text only black on white, and text only white on black.<br/>
                    <br/>
                    <img src="screenshots/styleswitcher.jpg" width="100%"/>
                    The style switcher can be found in the upper right-hand corner of every page on the site. Changing the style is as simple as selecting an option on the drop-down menu. Style selection is stored for later use (for up to a month) so that the style switcher won't have to be changed every time the site is visited.<br/>
                    <br/>
                </div>
                <div id="entry_header">
					<span class="entry_header_text">
						Different Styles
					</span>
				</div>
				<div id="entry_content">
                	<center>Standard View</center><br/>
                    <img src="screenshots/style-view_standard.jpg" width="100%"/><br/>
                    <br/>
                    <table width="100%">
                    	<tr width="100%">
                            <td style="width: 50%">
                                <center>Large Print View</center>
                            </td>
                            <td style="width: 50%">
                                <center>Black on White View</center>
                            </td>
                        </tr>
                        <tr id="photo" width="100%">
                            <td style="width: 50%">
                                <img src="screenshots/style-view_largeprint.jpg" width="100%"/>
                            </td>
                            <td style="width: 50%">
                                <img src="screenshots/style-view_blackonwhite.jpg" width="100%"/>
                            </td>
                        </tr>
                        <tr width="100%">
                            <td style="width: 50%">
                                The large print setting makes all text double its initial font size.
                            </td>
                            <td style="width: 50%">
                                The black on white setting makes all text black and all backgrounds white or gray-scale. Also, text highlight background for Firefox is white and text is black.
                            </td>
                        </tr>
                        <tr width="100%">
                            <td style="width: 50%">
                                <center>White on Black View</center>
                            </td>
                            <td style="width: 50%">
                                <center>Text Only View</center>
                            </td>
                        </tr>
                        <tr id="photo" width="100%">
                            <td style="width: 50%">
                                <img src="screenshots/style-view_whiteonblack.jpg" width="100%"/>
                            </td>
                            <td style="width: 50%">
                                <img src="screenshots/style-view_textonly.jpg" width="100%"/>
                            </td>
                        </tr>
                        <tr width="100%">
                            <td style="width: 50%">
                                The white on black setting makes all text white and all backgrounds black or gray-scale. Also, text highlight background for Firefox is black and text is white.
                            </td>
                            <td style="width: 50%">
                                The text only setting makes all text double its initial font size and removes all photos* from the page.
                            </td>
                        </tr>
                        <tr width="100%">
                            <td style="width: 50%">
                                <center>Text Only Black on White View</center>
                            </td>
                            <td style="width: 50%">
                                <center>Text Only White on Black View</center>
                            </td>
                        </tr>
                        <tr id="photo" width="100%">
                            <td style="width: 50%">
                                <img src="screenshots/style-view_textonly-blackonwhite.jpg" width="100%"/>
                            </td>
                            <td style="width: 50%">
                                <img src="screenshots/style-view_textonly-whiteonblack.jpg" width="100%"/>
                            </td>
                        </tr>
                        <tr width="100%">
                            <td style="width: 50%">
                                The text only black on white setting makes all text double its initial font size, removes all photos* from the page, and makes all text black and all backgrounds white or gray-scale. Also, text highlight background for Firefox is white and text is black.
                            </td>
                            <td style="width: 50%">
                                The text only white on black setting makes all text double its initial font size, removes all photos* from the page, and makes all text white and all backgrounds black or gray-scale. Also, text highlight background for Firefox is black and text is white.
                            </td>
                        </tr>
                    </table>
                    <br/>
                    *Because of the informative nature of this page, photos are not removed from this page. Photos are removed, however, for all other pages.					
                </div>    	
			</div>			
		</div>
	</body>
</html>