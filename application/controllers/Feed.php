<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller {
 
    public function __construct(){  
        parent::__construct();
        //load xml helper
      //  $this->load->helper(array('xml'));
    }
 
    public function index()
    {
    
   
	//Twitter Application Class and Keys 
require_once( APPPATH . "third_party/TwitterAPIExchange.php" ); 

/* this class file is attached here click this link 
http://lvsclasses.blogspot.in/2013/12/twitter-direct-messages-through.html*/

	$settings = array(
	    'oauth_access_token' 		 	=> "1385166778460893184-6UA0TGGisUniehADTeepMV2fpG2Uv0",
	    'oauth_access_token_secret' 		=> "6dJ2GiMzRTPNzJ2IpJmiEkkGR69sv1IiyI8zTAVIxjSL8",
	    'consumer_key'          		=> "IKoqZJNbBWAqXk4KCzFKBXzHZ",
	    'consumer_secret'          	=> "Bp2Jwu640B9mIq9DvwhPnTV0RewJWkGBt0Ey5s8bJJSKBhYZsO"
	);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';

// The request method, according to the docs, is GET, not POST
$requestMethod = 'GET';

// Set up your get string, we're using my screen name here
$getfield  = '?screen_name=BarackObama&count=5';

//count it means how many latest tweets you want.

// Create the object
$twitter = new TwitterAPIExchange($settings);

// Make the request and get the response into the $json variable

$json =  $twitter->setGetfield($getfield)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest();

// It's json, so decode it into an array
$result = json_decode($json);

/*foreach ($result as $entry) {?>
      <img src="<?php echo $entry->user->profile_image_url;?>"> 
      <?php echo $entry->text ."<br>";
}*/


print_r($result);
// Access the profile_image_url element in the array
//echo $result->profile_image_url;
	
 
       //$this->load->view('feed_view',$this->data);
 
    }

}



?>