<?php
class binbox_api
{
	const v = "1.1.php4";
	const httpTimeout = 10;
	private $APIBASE = "http://api.binbox.io/";
	
	public function __construct($target='api.binbox.io')
	{
		if($target == 'www.binbox.io' || $target == 'binbox.io')
		{
			$target = 'api.binbox.io';
		}
		
		$this->APIBASE = (isset($_SERVER['HTTPS']) && $_SERVER["HTTPS"] == "on" ? "https" : "http") . "://" . $target . "/";
	}
	
	public function api($cmd, $data=array(), $method=null)
	{
		$methods = array();
		
		$method = !is_null($method) ? $method : ($methods[$cmd] || 'POST');
	
		$result = self::http_request($this->APIBASE . $cmd, $data, $method);
		if(substr($cmd, -5) == ".json")
		{
			return json_decode($result, true);
		}
		else
		{
			return $result;
		}
	}
	
	public static function http_request($url, $data=array(), $method="GET")
	{	
	
	    $ch = curl_init();
	    
	    if($method == "POST")
	    {
			curl_setopt($ch,CURLOPT_POST, count($data));
			curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($data));
		    curl_setopt($ch, CURLOPT_URL, $url);
	    }
	    else
	    {
		    if(count($data))
		    {
			    curl_setopt($ch, CURLOPT_URL, $url."?".http_build_query($data));
		    }
		    else
		    {
			    curl_setopt($ch, CURLOPT_URL, $url);
			}
	    }
	    
	 
	    curl_setopt($ch, CURLOPT_USERAGENT, "Binbox PHP API Library (binbox.io) v".Binbox::v);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_TIMEOUT, self::httpTimeout);
	    $output = curl_exec($ch);
	    	    
	    curl_close($ch);
	    
	    $tmp = json_decode($output, true);
	    if(!$tmp['ok'] || $tmp['error'] == 'access_denied')
	    {
		    return trigger_error("API Call Request was denied by server", E_USER_ERROR);
	    }
	    
	    return $output;
	}
}