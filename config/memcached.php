<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


// --------------------------------------------------------------------------
// Servers
// --------------------------------------------------------------------------
$memcached['servers'] = array(

'default' 	=> array(

					'host'			=> 'localhost',
					'port'			=> '11211',
					'weight'		=> '1',
					'persistent'	=> FALSE
					
					),
);

// --------------------------------------------------------------------------
// Configuration
// --------------------------------------------------------------------------
$memcached['config'] = array(

	'prefix' 			=> '',						// Prefixes every key value (useful for multi environment setups)
	'compression'		=> MEMCACHE_COMPRESSED,		// Default: MEMCACHE_COMPRESSED Compression Method or FALSE
	'expiration'		=> 3600,					// Default content expiration value (in seconds)
	'delete_expiration'	=> 0						// Default time between the delete command and the actual delete action occurs (in seconds) 
	
);


$config['memcached'] = $memcached;

/* End of file memcached.php */
/* Location: ./system/application/config/memcached.php */