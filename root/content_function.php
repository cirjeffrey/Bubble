<?php
	
	function display_topics()
	{
		include ('includes/dbh.inc.php');
		
		$select = mysqli_query($db_connection, "SELECT topic_id, author, title, date_posted, views, replies FROM topics ORDER BY topic_id DESC");
		
		if(mysqli_num_rows($select) != 0)
		{
			echo "<table>";
			echo "<tr><th>Title</th><th>Posted By</th><th>Date Posted</th><th>Views</th><th>Replies</th></tr>";
			
			while ($row = mysqli_fetch_assoc($select)){
				echo "<tr><td><a href='./readtopic.php?&tid=".$row['topic_id']."'>
					".$row['title']."</a></td><td><a href='viewprofile.php?&username=".$row['author']."'>".$row['author']."</td><td>".$row['date_posted']."</td><td>".$row['views']."</td>
					<td>".$row['replies']."</td></tr>";
			}
			echo "</table>";
		}
		else 
		{
			echo "<p>There are no posts yet!! <a href='newtopic.php?'> add the very first post! </a></p>";
		}
	
	}

		
	function displaytopic($tid)
	{
		include('includes/dbh.inc.php');
		$select = mysqli_query($db_connection, "SELECT topic_id, author, title, content, date_posted FROM 
											topics WHERE ($tid = topics.topic_id)");
		$row = mysqli_fetch_assoc($select);
		echo nl2br("<div><h2>".$row['title']."</h2><p><a href='viewprofile.php?&username=".$row['author']."'>".$row['author']."</a> \n".$row['date_posted']."</p></div>");
		echo "<div><p>".$row['content']."</p></div>";
	}
	
	function addview($tid)
	{
		include('includes/dbh.inc.php');
		$update = mysqli_query($db_connection, "UPDATE topics SET views = views + 1 WHERE topic_id = ".$tid."");
	}
	
	function replylink($tid)
	{
		echo "<p><a href='./replyto.php?tid=".$tid."'>Reply to this post</a></p>";
	}
	
	function replytopost($tid)
	{
		echo "<div><form action='./addreply.php?tid=".$tid."' method='POST'>
				<p>Comment: </p>
				<textarea cols='80' rows='5' id='comment' name='comment'></textarea><br />
				<input type='submit' value='add comment' />
				</form></div>";
	}
	
	function dispreplies($tid)
	{
		include('includes/dbh.inc.php');
		$select = mysqli_query($db_connection, "SELECT replies.author, comment, replies.date_posted FROM topics, replies WHERE ($tid = replies.topic_id) AND ($tid = topics.topic_id) ORDER BY reply_id DESC");
		
		if (mysqli_num_rows($select) != 0)
		{
			echo "<div><table>";
			while($row = mysqli_fetch_assoc($select))
			{
				echo nl2br("<tr><th width='15%'>".$row['author']."</th><td>".$row['date_posted']."\n".$row['comment']."\n\n</td></tr>");
			}
			echo "</table></div>";
		}
		
		
		
	}
	function countReplies($tid)
	{
		include('includes/dbh.inc.php');
		$select = mysqli_query($db_connection, "SELECT topic_id FROM replies WHERE ".$tid." = topic_id");
		
		return mysqli_num_rows($select);
		
	}
	
	
		?>