<!DOCTYPE html>
<html>
<head>
	<title>create post</title>

	<?php
		include_once('includes/header.php');
		$inc = 'createPosts';
	?>
	<link rel="stylesheet" type="text/css" href="../css/createPost.css">

</head>
<body>
	<?php
		include_once('includes/nav.php');
	?>

	<div class="container body">

			<p class="formP">Tytuł</p>
			<input type="text" autocomplete="off" name="title">
			<p class="formP">Treść</p>
			<textarea name="body"></textarea> 
			<br>
			<br>
			<button class="btn waves-effect waves-light" type="submit" name="action">wyślij
		    	<i class="material-icons right">send</i>
			</button>

	</div>
	<br>
	<br>
	<?php
		include_once('includes/footer.php');
	?>
	<script type="text/javascript" src="../js/creator.js"></script>
</body>
</html>