<?php
/**
 * yii-twitter.php
 * @author: Vahid Zahed <unimodern.com@gmail.com>
 * @date  : 22.02.2015
 */
namespace unimodern\twitteroauth;

use abraham/twitteroauth;

/**
 * Class ImageDriver
 * The main class to wrap Kohana Image Extension
 * @package yii\image
 */
class authTwitter extends Component
{
      
        	//The Twitter Apps key
        	public $consumer_key = '';
        	
        	//The Twitter Apps secret key	
        	public $consumer_secret = '';
        	
        	//The call back url for twitter
        	public $callback = '';	

}
?>
