<?php
		
	// Config  &  Funcs
	require('config.php');
	require($LOGINER_PATH . '/core/sessions.php' );
	include($LOGINER_PATH . '/core/callbacks.php');
	require($LOGINER_PATH . '/core/Funcs.php'    );
	
	// Check for logout request
	if( isset($_GET['do']) )
	{
		if( $_GET['do'] == "Logout" ) {
			Logout(); }
	}
	
	// Check For login request 
	// Get request 
	if( $REQUEST_TYPE == "GET" ) {
		
		if( isset($_GET[$PASSWORD_INPUT]) && isset($_GET[$USERNAME_INPUT]) )
		{
			$USERNAME = $_GET[$USERNAME_INPUT];
			$PASSWORD  = $_GET[$PASSWORD_INPUT];
		
			Login($USERNAME,$PASSWORD);
		}
		
	// Post request	
	} else if( $REQUEST_TYPE == "POST" ) {
	
		if( isset($_POST[$PASSWORD_INPUT]) && isset($_POST[$USERNAME_INPUT]) )
		{
			$USERNAME = $_POST[$USERNAME_INPUT];
			$PASSWORD  = $_POST[$PASSWORD_INPUT];
		
			Login($USERNAME,$PASSWORD);
		}
		
	// not a login request
	} else {
		// nothing
	}
	
	



?>