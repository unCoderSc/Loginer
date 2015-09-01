<?php include($_SERVER['DOCUMENT_ROOT'] . '/Loginer/core/Login.php'); ?>
<html>
<body>

	 <form method="get" action="index.php">
        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
	  
	  <?php if( allowed() ) { // user loged in ?>
	  
		<p> Welcome : <?php echo get('username'); ?> </p>
	  
	  <?php } ?>


</body>
</html>