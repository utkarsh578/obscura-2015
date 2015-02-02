<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '766590860043615',
            'client_secret' => '06a843063d1f417104f85075a746cb77',
            'scope'         => array('email'),
        ),		
        'Google' => array(
    	'client_id'     => '914664825675-h6mdroul58fti849ukog0726ht2qd1a1.apps.googleusercontent.com',
    	'client_secret' => 'y1TjphhY3clhnhBrZto8uftb',
    	'scope'         => array('userinfo_email', 'userinfo_profile'),
),  

	)

);