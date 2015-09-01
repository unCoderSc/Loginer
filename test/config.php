<?php

	/* ###############################################################
	/  # Loginer v1.0.0 - A Very Simple and light php login system.  #
	/  # Using Sessions                                              #
	/  # Coded by : unCoder                                          #
	/  ###############################################################
	/ 
	/  Usage : [1] Edit config file. 
	/          [2] Put config file at same path as your pages.
	/          [3] Include Login.php in Login page
	/          [4] Include Login.php in every page you want to reach login checking & info from.
	/             - Call get('element name in database') to get the element value of loged in user
	/             - Call allowed() to check if user is loged in or not
	/          
	/          To logout  : send a get request of [ do=Logout ] ex. <a href="?do=Logout">Logout</a>
	/          Login Form : Submit a request of the selected type in config with selected inputs in the config.
    */

	// Config File 
	$LOGINER_PATH   = $_SERVER['DOCUMENT_ROOT'] . "/Loginer"; // Full path to Loginer system
	
	// Database info
	$DB_HOST        = "localhost";             // Database host
	$DB_USER        = "root";                  // Database connect username
	$DB_PASS        = "";                      // Database connect password * leave blank("") if no password is used
	$DB_NAME        = "loginer";          // Database name
	
	// Users(*Memmbers) table and settings
	$USERS_TABLE       = "members";              // Users table name
	$USERS_USERNAME_F  = "username";             // User username element(Column)
	$USERS_PASSWORD_F  = "password";             // User password element(Column)
	
	// Login settings
	$REQUEST_TYPE        = "GET";                // Login request type ( "GET" - "POST" )
	$USERNAME_INPUT      = "username";           // html username input box name
	$PASSWORD_INPUT      = "password";           // html password input box name
	$PASSWORD_ENCRYPTION = "MD5";                // Password filed encryption on database ( "MD5" - "SHA1" ) * leave blank("") for no encryption
	
	// Url CallBacks // Note you can do it manually throug callbacks.php 
	$VALID_LOGIN_CALLBACK    = "welcome.php";  // A url which will be called when a login successed * leave blank("") if no callback is needed
	$NOTVALID_LOGIN_CALLBACK = "sorry.php";    // A url which will be called when a login fail      * leave blank("") if no callback is needed
	$LOGEDOUT_CALLBACK       = "";             // A url which will be called when a user logout.    * leave blank("") if no callback is needed
	


?>