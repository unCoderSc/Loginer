<?php

	// Sessions file
	// Start the session
	session_start();
	
	function Start_session($raw)
	{
		$_SESSION["LogedIn"] = true;
		
		foreach($raw as $rw => $val)
		{
			$_SESSION[$rw] = $val;
		}
	}
	
	function Destroy_session()
	{
		session_destroy();
	}
	
	function IsLogedIn()
	{
		if( isset($_SESSION["LogedIn"]) ) 
		{
			if( $_SESSION["LogedIn"] )
				return true;
		}
		
		return false;
	}
	
	function GetSessionVar($var)
	{
		if( isset($_SESSION[$var]) )
			return $_SESSION[$var];
	}

?>