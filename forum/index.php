<html>
	<head>
		<title>Forum | Camp Marcella</title>
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
				if(empty($_POST['topic'])){$error['topic']='Topic name is required.';}
				if(empty($_POST['description'])){$error['description']='Topic description is required.';}
				if(empty($_POST['usertype'])){$error['usertype']='Usertype selection is required.';}
						
				//If user submits text from pre-populated fields, prompts error.
				if($_POST['topic']=='Topic you want to discuss.'){$error['topic']='Topic name is required.';}
				if($_POST['description']=='Specify the purpose of this new topic, i.e. what you want to know.'){$error['description']='Topic description is required.';}
																	
				//If user sets usertype as staff or administrator and leaves password empty, prompts error. 
				if(($_POST['usertype']=='A'||$_POST['usertype']=='S')&&empty($_POST['password'])){$error['password']='Password required for staff/administrator.';}
						
				//If no errors...
				if(sizeof($error)==0)
				{
					//Add data to database.
					$sql = "INSERT INTO forum_topics(
							topic_id,
							topic,
							description,
							usertype,
							topicstarted
							)VALUES(
							null,
							'{$_POST['topic']}',
							'{$_POST['description']}',
							'{$_POST['usertype']}',
							NOW()
							)";
					mysql_query($sql);
			
					//Display data addition confirmation.
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
				Forum
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
						An Open Discussion
					</span>
				</div>
				<div id="entry_content">
					Established in 1947 by the NJ Camp for Blind Children, Camp Marcella strives to provide an environment conducive of the needs of blind and visually impaired children while simultaneously promoting a camaraderie between campers that lasts long after the camping experience is over.
					As a prospective camper or parent of a camper there are many questions you may wish to ask, and here is where we attempt to answer them.
					Below you can find a list of established topics or start one of your own.
				</div>
			</div>
			
			<div id="entry" style="margin-bottom: 15px">
				<div id="entry_header">
					<span class="entry_header_text">
						New Topic
					</span>
				</div>
				<div id="entry_content" style="padding-bottom: 25px">
					<form method="post" action="index.php">
						<table width="100%">
							<tr width="100%">
								<td width="10%"><label>Topic:</label></td>
								<td width="90%" style="float: left"><input id="form-item" name="topic" style="width: 100%" type="text" onClick="this.value=''" value="Topic you want to discuss."/></td>
							</tr>
							<tr width="100%">
								<td style="vertical-align: top" width="10%"><label>Description:</label></td>
								<td width="90%"><textarea id="form-item" style="width: 100%" name="description" rows="3" onClick="this.value=''">Specify the purpose of this new topic, i.e. what you want to know.</textarea></td>
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
			
			<!--Display adminstrator submitted topics.-->
			<div id="entry" style="margin-top: 35px">
				<div id="entry_header">
					<span class="entry_header_text">
						Administrator Submitted Topics
					</span>
				</div>
				<div id="entry_content">
					<?php
						//Get blog entries from the database.
						$sql = "SELECT topic_id, topic, description, usertype, topicstarted FROM forum_topics WHERE usertype='A' ORDER BY topic";
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result, MYSQL_ASSOC))
						{
							//Get number of threads in topic.
							$sql = "SELECT thread_id FROM forum_threads WHERE topic_id='{$row['topic_id']}'";
							$all_threads = mysql_query($sql);
							$thread_total = 0;
							while($count = mysql_fetch_array($all_threads, MYSQL_ASSOC))
							{
								$thread_total++;
							}
							
							//Get number of posts in threads.
							$sql = "SELECT post_id FROM forum_posts WHERE topic_id='{$row['topic_id']}'";
							$all_posts = mysql_query($sql);
							$post_total = 0;
							while($count = mysql_fetch_array($all_posts, MYSQL_ASSOC))
							{
								$post_total++;
							}
							
							echo "	<table style=\"width: 100%\">
										<tr>
											<td>
												<a href=\"threads.php?topic={$row['topic_id']}\">{$row['topic']}</a>
											</td>
											<td style=\"text-align: right\">
												{$row['topicstarted']}
											</td>
										</tr>
									</table>
									<span style=\"float: right\">
										Threads: $thread_total
									</span>
									<br/>
									<span style=\"float: right\">
										Posts: $post_total
									</span>
									<br/>
									<p>
										{$row['description']}
									</p>
									<hr/>
								";								
						}		
					?>
				</div>	
			</div>

			<!--Display staff submitted topics.-->
			<div id="entry">
				<div id="entry_header">
					<span class="entry_header_text">
						Staff Submitted Topics
					</span>
				</div>
				<div id="entry_content">
					<?php
						//Get blog entries from the database.
						$sql = "SELECT topic_id, topic, description, usertype, topicstarted FROM forum_topics WHERE usertype='S' ORDER BY topic";
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result, MYSQL_ASSOC))
						{
							//Get number of threads in topic.
							$sql = "SELECT thread_id FROM forum_threads WHERE topic_id='{$row['topic_id']}'";
							$all_threads = mysql_query($sql);
							$thread_total = 0;
							while($count = mysql_fetch_array($all_threads, MYSQL_ASSOC))
							{
								$thread_total++;
							}
							
							//Get number of posts in threads.
							$sql = "SELECT post_id FROM forum_posts WHERE topic_id='{$row['topic_id']}'";
							$all_posts = mysql_query($sql);
							$post_total = 0;
							while($count = mysql_fetch_array($all_posts, MYSQL_ASSOC))
							{
								$post_total++;
							}
							
							echo "	<table style=\"width: 100%\">
										<tr>
											<td>
												<a href=\"threads.php?topic={$row['topic_id']}\">{$row['topic']}</a>
											</td>
											<td style=\"text-align: right\">
												{$row['topicstarted']}
											</td>
										</tr>
									</table>
									<span style=\"float: right\">
										Threads: $thread_total
									</span>
									<br/>
									<span style=\"float: right\">
										Posts: $post_total
									</span>
									<br/>
									<p>
										{$row['description']}
									</p>
									<hr/>
								";								
						}		
					?>
				</div>
			</div>
			
			<!--Display parent submitted topics.-->
			<div id="entry">
				<div id="entry_header">
					<span class="entry_header_text">
						Parent Submitted Topics
					</span>
				</div>
				<div id="entry_content">
					<?php
						//Get blog entries from the database.
						$sql = "SELECT topic_id, topic, description, usertype, topicstarted FROM forum_topics WHERE usertype='P' ORDER BY topic";
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result, MYSQL_ASSOC))
						{
							//Get number of threads in topic.
							$sql = "SELECT thread_id FROM forum_threads WHERE topic_id='{$row['topic_id']}'";
							$all_threads = mysql_query($sql);
							$thread_total = 0;
							while($count = mysql_fetch_array($all_threads, MYSQL_ASSOC))
							{
								$thread_total++;
							}
							
							//Get number of posts in threads.
							$sql = "SELECT post_id FROM forum_posts WHERE topic_id='{$row['topic_id']}'";
							$all_posts = mysql_query($sql);
							$post_total = 0;
							while($count = mysql_fetch_array($all_posts, MYSQL_ASSOC))
							{
								$post_total++;
							}
							
							echo "	<table style=\"width: 100%\">
										<tr>
											<td>
												<a href=\"threads.php?topic={$row['topic_id']}\">{$row['topic']}</a>
											</td>
											<td style=\"text-align: right\">
												{$row['topicstarted']}
											</td>
										</tr>
									</table>
									<span style=\"float: right\">
										Threads: $thread_total
									</span>
									<br/>
									<span style=\"float: right\">
										Posts: $post_total
									</span>
									<br/>
									<p>
										{$row['description']}
									</p>
									<hr/>
								";								
						}		
					?>
				</div>
			</div>
			
			<!--Display camper submitted topics.-->
			<div id="entry">
				<div id="entry_header">
					<span class="entry_header_text">
						Camper Submitted Topics
					</span>
				</div>
				<div id="entry_content">
					<?php
						//Get blog entries from the database.
						$sql = "SELECT topic_id, topic, description, usertype, topicstarted FROM forum_topics WHERE usertype='C' ORDER BY topic";
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result, MYSQL_ASSOC))
						{
							//Get number of threads in topic.
							$sql = "SELECT thread_id FROM forum_threads WHERE topic_id='{$row['topic_id']}'";
							$all_threads = mysql_query($sql);
							$thread_total = 0;
							while($count = mysql_fetch_array($all_threads, MYSQL_ASSOC))
							{
								$thread_total++;
							}
							
							//Get number of posts in threads.
							$sql = "SELECT post_id FROM forum_posts WHERE topic_id='{$row['topic_id']}'";
							$all_posts = mysql_query($sql);
							$post_total = 0;
							while($count = mysql_fetch_array($all_posts, MYSQL_ASSOC))
							{
								$post_total++;
							}
								
							echo "	<table style=\"width: 100%\">
										<tr>
											<td>
												<a href=\"threads.php?topic={$row['topic_id']}\">{$row['topic']}</a>
											</td>
											<td style=\"text-align: right\">
												{$row['topicstarted']}
											</td>
										</tr>
									</table>
									<span style=\"float: right\">
										Threads: $thread_total
									</span>
									<br/>
									<span style=\"float: right\">
										Posts: $post_total
									</span>
									<br/>
									<p>
										{$row['description']}
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