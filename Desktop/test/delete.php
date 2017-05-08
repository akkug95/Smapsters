<?php require_once('header.php');

if(! $user2->is_logged_in() ){ header('Location: login.php'); } 
$stmt = $db->prepare('Delete FROM comments where cid=:id');
$stmt->execute(array(':id' => $_GET['id']));
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
