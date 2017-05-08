<?php 
require_once('header.php');


$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Stories - <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body style="padding-top:50px; background-color:#87ccdc">

	<div id="wrapper">

		<p><a href="blog.php">Back to Our Stories</a></p>


		<?php	
			echo '<div>';
				echo '<p style="font-size:2em;">'.$row['postTitle'].'</p>';
				echo '<p style="font-size:0.75em;">Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p style="font-size:1.5em;">'.$row['postCont'].'</p>';				
			echo '</div><br>';
			echo '<b><p style="font-size:1.75em;">Comments</p></b>';
			$stmt = $db->prepare('SELECT cid, pid, mid,user, content, dt FROM comments where pid = :id ORDER BY cid DESC');
			$stmt->execute(array('id' => $_GET['id']));
				while($row = $stmt->fetch()){
					
					echo '<br><div>';
						echo '<b style="font-size: 1.75em;">'.$row['user'].'</b>';
						echo '<div style="font-size: 1.5em;">'.$row['content'].'</div>';				
						echo '<div style="font-size: 0.75em;">posted on '.date('jS M Y H:i:s', strtotime($row['dt'])).'</div>';
						if( $user2->is_logged_in() )
							if($row['mid']==$_SESSION['id'])
								echo '<a href= "delete.php?id='.$row["cid"].'&pid='.$_GET['id'].'"> Delete</a>';
					
					echo '</div>';

				}
		if( $user2->is_logged_in() )
		echo '<br><form method="post" action="add.php?pid='.$_GET['id'].'"><textarea name="comment" style="width:45%; height:15%; border: 1px solid #000000"></textarea><br><br><input type="submit" value="Comment" style="background-color:#000000;color:#FFFFFF; font-size:18px; width:auto"></form>';
		else 
			echo'<br><a href="login.php">Login</a> To Comment';
		?>
	
		

	</div>
	<br>
	<br>
</body>
</html>