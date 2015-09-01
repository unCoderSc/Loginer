<?php include($_SERVER['DOCUMENT_ROOT'] . '/Loginer/core/Login.php'); ?>
<html>
<body>

	<?php if(!allowed()) { ?>
	
	 <form method="get" action="index.php">
        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
		
	<?php } else { ?>
	
		<h4>You're already loged in you can <a href="?do=Logout">Logout</a></h4>
	
	<?php } ?>


</body>
</html>