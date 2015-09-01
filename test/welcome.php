<?php include($_SERVER['DOCUMENT_ROOT'] . '/Loginer/core/Login.php'); ?>
<html>
<body>

	<?php if(allowed()) { ?>
	
		<h3> Welcome : <?php echo get('username'); ?></h3>
		<h3> You're <?php echo get('age'); ?> From <?php echo get('country'); ?> !!</h3>
		
		<h4><a href="?do=Logout">Logout</a></h4>
		
	<?php } else { ?>
	
		<h3> You're not loged in. you can login from <a href="index.php">here</a></h3>
		
	<?php } ?>
	
</body>
</html>