<html>
	<head>
		<title>Posts | Camp Marcella</title>
		<link rel="stylesheet" type="text/css" href="../forum/css/CSS-Forum.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="standard" href="css/CSS-Forum.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="large-print" href="css/CSS-Forum-LargePrint.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="black-white" href="css/CSS-Forum-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="white-black" href="css/CSS-Forum-WhiteOnBlack.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only" href="css/CSS-Forum-TextOnly.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-bw" href="css/CSS-Forum-TextOnly-BlackOnWhite.css"/>
		<link rel="alternate stylesheet" type="text/css" media="screen" title="text-only-wb" href="css/CSS-Forum-TextOnly-WhiteOnBlack.css"/>
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
			
			//If submitted...
			if(isset($_POST['submit']))
			{
				//Error checking.
				$error = array();
						
				//If user leaves required field empty, prompts error.
				if(empty($_POST['post'])){$error['post']='Post title is required.';}
				if(empty($_POST['entry'])){$error['entry']='Entry content is required.';}
				if(empty($_POST['usertype'])){$error['usertype']='Usertype selection is required.';}
						
				//If user submits text from pre-populated fields, prompts error.
				if($_POST['post']=='Title of this post.'){$error['post']='Post title is required.';}
				if($_POST['entry']=='Content of the post that you would like to make.'){$error['entry']='Entry content is required.';}
																	
				//If user sets usertype as staff or administrator and leaves password empty, prompts error. 
				if(($_POST['usertype']=='A'||$_POST['usertype']=='S')&&empty($_POST['password'])){$error['password']='Password required for staff/administrator.';}
						
				//If no errors...
				if(sizeof($error)==0)
				{
					//Add data to database.
					$sql = "INSERT INTO forum_posts(
							post_id,
							thread_id,
							topic_id,
							post,
							entry,
							usertype,
							postdate
							)VALUES(
							null,
							'{$_GET['thread']}',
							'{$_GET['topic']}',
							'{$_POST['post']}',
							'{$_POST['entry']}',
							'{$_POST['usertype']}',
							NOW()
							)";
					mysql_query($sql);
			
					//Display data addition confirmation.
					echo "<div id=\"add\">Your thread post has been added.</div>";
					print '<script type="text/javascript">';
					print 'alert("Your forum topic has been added.")';
					print '</script>'; 		
				}
			
				//If errors...
				else
				{
					//Display missing fields errors.
					print '<script type="text/javascript">';
					print 'alert("You forgot to fill in a required field.")';
					print '</script>'; 
				}
			}
		?>
	
		<!--Blog form.-->
		<div id="banner">
			<div id="bannerlogo" onClick="home()">
			</div>			
			<div id="bannertext">
				Posts
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
            	<span class="navigation_link" onClick="window.location='index.php'">
					<a href="index.php" class="nav" style="text-decoration: none">Forum</a>
				</span>
				<span class="navigation_link" onClick="window.location='threads.php?topic=<?php echo $_GET['topic']; ?>'">
					<a href="threads.php?topic=<?php echo $_GET['topic']; ?>" class="nav" style="text-decoration: none">Threads</a>
				</span>
			</span>
		</div>
				
        <div id="tab_nav">
			<a href="../index.php" class="nav">
				<ul class="tab_nav-item">Home</ul>
			</a>				
			<a href="../contributors/index.php" class="nav">
				<ul class="tab_nav-item">Contributors</ul>
			</a>				
			<a href="index.php" class="nav">
				<ul class="tab_nav-item_select">Forum</ul>
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
						New Post
					</span>
				</div>
				<div id="entry_content" style="padding-bottom: 25px">
					<form method="post" action="posts.php?topic=<?php echo $_GET['topic']; ?>&thread=<?php echo $_GET['thread']; ?>">
						<table width="100%">
							<tr width="100%">
								<td width="10%"><label>Post:</label></td>
								<td width="90%" style="float: left"><input id="form-item" name="post" type="text" style="width: 100%" onClick="this.value=''" value="Title of this post."/></td>
							</tr>
							<tr>
								<td style="vertical-align: top"><label>Entry:</label></td>
								<td><textarea id="form-item" name="entry" rows="3" style="width: 100%" onClick="this.value=''">Content of the post that you would like to make.</textarea></td>
							</tr>
							<tr>
								<td><label>Usertype:</label></td>
								<td><select id="form-item" name="usertype">
										<option value="">-------------</option>
										<option value="C">Camper</option>
										<option value="P">Parent</option>
										<option value="S">Staff</option>
										<option value="A">Administrator</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>Password:</label></td>
								<td><input id="form-item" name="password" type="password" size="16"/><label style="padding-left: 10px">(staff and administrator only)</label></td>
							</tr>
						</table>
						<hr/>		
						<input id="button" style="float: right" name="submit" type="submit" value="Submit Topic"/>		
					</form>	
				</div>
			</div>
			
			<!--Display submitted threads.-->
			<div id="entry" style="margin-top: 35px">
				<div id="entry_header">
					<span class="entry_header_text">
						Posts
					</span>
				</div>
				<div id="entry_content">
					<?php
						//Get blog entries from the database.
						$sql = "SELECT post_id, thread_id, topic_id, post, entry, usertype, postdate FROM forum_posts WHERE topic_id='{$_GET['topic']}' AND thread_id='{$_GET['thread']}' ORDER BY post_id";
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result, MYSQL_ASSOC))
						{
							//Test for usertype.
								 if($row['usertype']=='A'){$user = "Administrator";}
							else if($row['usertype']=='S'){$user = "Staff";}
							else if($row['usertype']=='P'){$user = "Parent";}
							else if($row['usertype']=='C'){$user = "Camper";}
							
							echo "	<span>
										{$row['post']}
									</span>		
									<span style=\"float: right\">
										{$row['postdate']}
										<br/>
										Usertype: $user													
									</span>									
									<p>
										<br/>
										{$row['entry']}
									</p>
									<hr/>
								";								
						}		
					?>
				</div>	
			</div>
		</div>
	</body>
</html>