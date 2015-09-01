<?php

	
	// Funcs file
	

	// Create database connection
	$conn = mysql_connect($DB_HOST, $DB_USER, $DB_PASS);
	$selected = mysql_select_db($DB_NAME,$conn); 
	$CurrLink = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	function CHECK_USER($username,$password)
	{
		
		global $USERS_TABLE,$USERS_USERNAME_F,$USERS_PASSWORD_F;
		global $PASSWORD_ENCRYPTION;
		
		if($PASSWORD_ENCRYPTION == "MD5")  $password  = md5($password);
		if($PASSWORD_ENCRYPTION == "SHA1") $password  = sha1($password);
		
		$sql = "SELECT * FROM `$USERS_TABLE` WHERE `$USERS_USERNAME_F`='$username' AND `$USERS_PASSWORD_F`='$password'"; 
		$result = mysql_query($sql) or die(mysql_error());
		
		if(mysql_num_rows($result))
		{
			// USER AND PASSWORD ARE VALID
			return TRUE;
		} else {
		   // ERROR USER OR PASS ISN'T VALID
		   return FALSE;
		}
	}
	
	function GET_USER_INFO($username)
	{
		global $USERS_TABLE,$USERS_USERNAME_F;
				
		$sql = "SELECT * FROM `$USERS_TABLE` WHERE `$USERS_USERNAME_F`='$username'"; 
		$result = mysql_query($sql) or die(mysql_error());
		
		if(mysql_num_rows($result))
		{
			return mysql_fetch_assoc($result);
		} 
	}
	
	function get($Var)
	{
		return GetSessionVar($Var);
	}
	
	function allowed()
	{
		if(IsLogedIn()) { return true; }
		return false;
	}
	
	function Login($USERNAME,$PASSWORD)
	{
		global $VALID_LOGIN_CALLBACK,$NOTVALID_LOGIN_CALLBACK;
		
		if( !IsLogedIn() ) {
			if( CHECK_USER($USERNAME,$PASSWORD) )
			{
				// User is good to go ;D.
				Start_session(GET_USER_INFO($USERNAME));
				
				// Login func callback
				OnLogin($USERNAME);
				
				// Login url call back
				if($VALID_LOGIN_CALLBACK != "") 
					header('Location: ' . $VALID_LOGIN_CALLBACK);
				
			} else { 
				// User or pass isn't valid
				
				// Error func callback
				OnLoginFail($USERNAME);
				
				// Error url callback
				if($NOTVALID_LOGIN_CALLBACK != "") 
					header('Location: ' . $NOTVALID_LOGIN_CALLBACK);
				
			}
		}
	}
	
	function Logout()
	{
		global $LOGEDOUT_CALLBACK;
		
		if( IsLogedIn() ) {
			
			Destroy_session();
			
			// loged out func callback
			OnLogout($USERNAME);
			
			// loged out url callback
			if($LOGEDOUT_CALLBACK != "") 
				header('Location: ' . $LOGEDOUT_CALLBACK);
			else
				header("Location: " . $CurrLink);
			
		}
	}
	



?>