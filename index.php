<html>
	<head>
		<title>Camp Marcella</title>
		<link rel="stylesheet" type="text/css" href="css/css.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="standard" href="css/css.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="large-print" href="css/css-LargePrint.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="black-white" href="css/css-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="white-black" href="css/css-WhiteOnBlack.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only" href="css/css-TextOnly.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-bw" href="css/css-TextOnly-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-wb" href="css/css-TextOnly-WhiteOnBlack.css"/>
		<link rel="stylesheet" id="camera-css"  href="css/camera.css" type="text/css" media="all"> 
		<script src="scripts/styleswitch.js" type="text/javascript"></script>
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script src="scripts/menuscroll.js" type="text/javascript"></script>
        <script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="scripts/jquery.mobile.customized.min.js" type="text/javascript"></script>
        <script src="scripts/camera.js" type="text/javascript"></script>
		<script>
			jQuery(function(){jQuery('#camera_wrap_3').camera({height: '56%',	pagination: false, thumbnails: false, imagePath: 'images/' });});
		</script>
            <!-- Analytics -->
        <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-61605716-1', 'auto'); ga('send', 'pageview');</script>
	
	</head>
	<body>
    	<div class="notice">
        	<ul class="notice_container">
        		<li class="notice_text">
            		Yes, there will be a program for visually impaired children at Camp Marcella the summer of 2013! - - <a href="news/index.php" class="nav" style="text-decoration: underline">Read More Here</a>
            	</li>
           	</ul>
        </div>
		<div id="banner">
			<span class="banner_logo" onClick="index.php"></span>			
			<span class="banner_text">Camp Marcella</span>
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
				<a href="index.php" class="nav">
					<ul class="tab_nav-item_select">Home</ul>
				</a>				
				<a href="contributors/index.php" class="nav">
					<ul class="tab_nav-item">Contributors</ul>
				</a>				
				<a href="forum/index.php" class="nav">
					<ul class="tab_nav-item">Forum</ul>
				</a>
				<a href="news/index.php" class="nav">
					<ul class="tab_nav-item">News</ul>
				</a>
				<a href="tour/index.php" class="nav">
					<ul class="tab_nav-item">Tour</ul>
				</a>
				<a href="about/index.php" class="nav">
					<ul class="tab_nav-item">About</ul>
				</a>
                <a href="help/index.php" class="nav">
					<ul class="tab_nav-item">Help</ul>
				</a>				
			</div>
				
			<div id="slideshow_container">
				<center>				
					<div class="fluid_container">
						<div class="camera_wrap camera_emboss" id="camera_wrap_3">
							<div id="photo_01" data-src="images/slideshow/photos/grounds_campsign.jpg">
                            	<div class="camera_caption fadeFromBottom">
									<span class="caption">Welcome to Camp Marcella. New Jersey's premier residential summer camp ground designed specifically for children and teens with blindness, visual impairments, and special needs.</span>
                          		</div>          
							</div>
							<div id="photo_02" data-src="images/slideshow/photos/campers_louis.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">The Camp Marcella family is made up of blind and visually impaired children and young adults from all around New Jersey. Campers eat, sleep, and enjoy all of the facilities of camp with their peers, forming close bonds and friendships along the way.</span>
								</div>
							</div>
							<div id="photo_03" data-src="images/slideshow/photos/campers_groupphoto.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">Camp Marcella family photo taken during the summer of 2012.</span>
								</div>
							</div>
							<div id="photo_04" data-src="images/slideshow/photos/events_promnight_dance.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">During each session Camp Marcella hosts many events which include a talent show, prom night, color wars, carnival, medieval day, and closing campfire ceremony.</span>
								</div>
							</div>
							<div id="photo_05" data-src="images/slideshow/photos/events_talentshow.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">At the talent show campers get to show off their unique skills and abilities. Whether it being singing, playing an instrument, dancing, or any other kind of talent Camp Marcella encourages campers to bring out the best in each other and in themselves.</span>
								</div>
							</div>
							<div id="photo_06" data-src="images/slideshow/photos/events_promnight_dancing.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">Prom night is one of the culminating events of the camping experience. Prom is one of the most anticipated events in the camp schedule, complete with red carpet dinner and DJ.</span>
								</div>
							</div>
							<div id="photo_07" data-src="images/slideshow/photos/events_colorwars.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">During "Color Wars" campers team up and compete in activities throughout the day to determine which group has what it takes. The randomly assigned teams promote working with others and help campers get to know other campers who they might not have met otherwise.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/events_carnival_dunktank.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">One of the many attractions at the carnival is the dunk tank. Campers have the opportunity to dunk their counsellors, program staff, and even the camp director.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/events_carnival_pillowfight.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">Another camper favorite event at the carnival is the pillow fight. Additionally there are other events such as face painting, pieing (pie throwing), and team activities.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/events_medievalday.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">On "Medieval Day" Camp Marcella goes back in time to the Middle Ages. Campers get to see and touch armor and weapons while also learning about the history of the time period.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/events_closingcampfire_songs.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">One of the hallmarks of Camp Marcella's closing campfire ceremony is a sing-a-long of the songs learned at camp.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/events_closingcampfire_fire.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">At the closing campfire, campers also receive awards from their counsellors. These awards often note specific events that occured at camp during their stay.</span>
								</div>
							</div>							
							<div data-src="images/slideshow/photos/grounds_cabinrow.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">There are seven camper cabins which are divided among boys' and girls' cabins. The same floor plan is used in the design of every cabin which means easier navigation for campers.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/grounds_boyscabin.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">This cabin (Opossum) is just one of the boys' cabins. All of the cabins have space enough for 8-12 campers as well as up to 4 counsellors.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/grounds_girlscabin.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">This cabin (Squirrel) is one of the girls' cabins. All of the cabins also include camper and counsellor bathrooms as well as a common room and a front porch.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/grounds_kitchen.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">Camper dining is provided for by a chef employed by the camp. Aided by a kitchen staff, the chef helps prepare three meals a day for campers.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/grounds_activities.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">Campers attend regularly scheduled events during their stay at camp. Some of these activities include free swim at the pool, arts & crafts, and music.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/grounds_kickballfield.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">Camp Marcella has a large kickball/baseball field that is also used for events and physical education activities.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/grounds_waterfront.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">Camp Marcella employs multiple certified life guards who patrol the swimming pool and waterfront on which campers boat and fish.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/grounds_naturebarn.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">At the nature barn, campers learn about nature and the animals living in the forest that surrounds the campgrounds.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/grounds_nursesstation.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">Camp Marcella maintains at least two registered nurses at any given time. The infirmary is complete with various medical neccessities as well as beds and airconditioning.</span>
								</div>
							</div>
							<div data-src="images/slideshow/photos/staff_photo.jpg">
								<div class="camera_caption fadeFromBottom">
									<span class="caption">Camp Marcella staff photo taken during the summer of 2012.</span>
								</div>
							</div>
						</div>
					</div>
				</center>
				<div style="clear:both"></div>	
			</div>
		</div>
				
		<div id="content">
			<div id="entry">
				<div id="entry_header">
					<span class="entry_header_text">
						Camp Statement
					</span>
				</div>
				<div id="entry_content">
					<center>
                       	The objective of NJ Camp for Blind Children Inc. is to provide, promote and maintain a recreational, educational and rehabilitative camp primarily for visually impaired and multiple-challenged children and adults.
                    </center>
				</div>
			</div>
            <div id="entry">
				<div id="entry_header">
					<span class="entry_header_text">
						Camp Marcella
                    </span>
				</div>
				<div id="entry_content">
                	Camp Marcella is a facility designed and owned by the NJ Camp for Blind Children (NJCBC) incorporated, a non-profit organization started in 1947. At that time a casual type of camp facility existed, but to many parents it lacked the advantages of a complete camping experience. So NJCBC began recruiting the right people for the right job. With the physical work and contributions of over 1300 organizations and individuals including the Lions clubs of New Jersey, Camp Marcella opened its gates that very summer, and has been going strong since!<br/>
                    <br/>
                    Today Camp Marcella comprises over 200 acres of woodland surroundings and a clear fish laden lake, with all of its facilities designed for the best possible care of children and teens with blindness, visual impairments, and special needs.<br/>
                    <br/>
					The camp is located in one of the few areas of New Jersey that has not been touched by suburban sprawl. Camp is adjacent to the Pequannock Watershed, Farny State Park, and a large Boy Scout Reservation. The combination of abundant wildlife, woods, lakes, and serenity brings campers to an idyllic setting.<br/>
                    <br/>			
				</div>
			</div>
			<div id="entry">
				<div id="entry_header">
					<span class="entry_header_text">
						Site Breakdown
					</span>
				</div>
				<div id="entry_content">
                	<b><a href="contributors/index.php">Contributors</a></b><br/>
                    Camp Marcella could not exist if it were not for the numerous and generous contributions of groups like the Lions Club.<br/>
                    -The camp never turns down donations, whether they be of time, money, or expertise. If you are interested in donating to Camp Marcella, the correct forms are located on the <a href="contributors/donate.php">donate page</a>.</br>
                    -Camp Marcella also hosts a <a href="contributors/wall-of-honor.php">'Wall of Honor'</a> where individuals may be honored for their contributions.<br/>
                    <br/> 
                    <b><a href="forum/index.php">Forum</a></b><br/>
                    Camp Marcella is strongly committed to the welfare and happiness of its campers. To further extend the lines of communication between the camp and prospective campers and parents this site contains a <a href="forum/index.php">forum</a>.<br/>
                    -On the forum campers and parents can communicate with camp staff as well as the camp director to get many questions answered.<br/>
                    -The forum is sorted by topic and entry for easier navigation<br/>
                    <br/>
                    <b><a href="news/index.php">News</a></b><br/>
                    Camp Marcella wants to keep all prospective campers and parents up-to-date on the many events held on the campgrounds. In order to do so this site contains a <a href="news/index.php">news page</a>.<br/>
                    -On the news page you can find the most current information concerining Camp Marcella and the many events it hosts.<br/>
                    <br/>
                    <b><a href="tour/index.php">Tour</a></b><br/>
                    Camp Marcella is home to more than twenty buildings and dozens of activity areas. To help prospective campers and parents get a better idea of what the campgrounds look like this site has a <a href="tour/index.php">tour</a> section.<br/>
					-The <a href="tour/activitiesbuildings.php">activities buildings</a> are where campers go every day for activities such as arts & crafts, boating, bowling, games, music, nature, phys. ed., and reading.<br/>
                    -The <a href="tour/campercabins.php">camper cabins</a> are where campers and their counsellors sleep and spend time between activities.<br/>
                    -The <a href="tour/groundsbuildings.php">grounds buildings</a> are the integral parts of camp like the infirmary, kitchen, laundry room, main lodge, and showerhouse.<br/>
                    -The <a href="tour/outdoorareas.php">outdoor areas</a> are a part of the campgrounds themselves. These areas include the barbecue pit, basketball court, nature path, pool, and waterfront.<br/>
                    -The <a href="tour/staffbuildings.php">staff buildings</a> are buildings used only by the staff as meeting halls, lounges, and sleeping spaces.<br/>
                    <br/>
                    <b><a href="about/index.php">About</a></b><br/>
                    Camp Marcella can also be contacted by more traditional methods such as mail on the <a href="about/index.php">about</a> page.<br/>
                    -Camp contact information and administration can be found on this page.<br/>
                    <br/>
                    <b><a href="help/index.php">Help</a></b><br/>
                    Camp Marcella understands the needs of visually impaired and this site has been tailored to fit those needs. More information on how this website has been modified visit the <a href="help.php">help</a> page.<br/>
                    <br/>
              	</div>
			</div>
			
		</div>
	</body>
</html>