<?php
include("includes/config.php");

 $st=$db->prepare('INSERT into comments  (pid, mid, user, content, dt) VALUES (:a ,:b,:c,:d,:e)');
 $st->execute(array(
					':a' => $_GET['pid'],
					':b' => $_SESSION['id'],
					':c' => $_SESSION['username'],
					':d' => $_POST['comment'],
					':e'=> date('Y-m-d H:i:s')
				));
				switch($_GET['pid'])
				{
				case 9991 : header('Location: Smap_1.php');break;
				case 9992 : header('Location: Smap_2.php');break;
				case 9993 : header('Location: Smap_3.php');break;
				case 9994 : header('Location: Smap_4.php');break;
				case 9995 : header('Location: Smap_5.php');break;
				case 9996 : header('Location: Smap_6.php');break;
				case 9997 : header('Location: Smap_7.php');break;
				default : header('Location: viewpost.php?id='.$_GET['pid']);
				}
				?>
