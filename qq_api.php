<?php

class QqOpen 
{
	/* 
	 * defined three property
	 *
	 */
	private $appId;
	private $appKey;
	private $redirectUri;

	/* set and get */
    protected function getAppId()
    {
        return $this->appId;
    }

    protected function setAppId($appId)
    {
        $this->appId = $appId;
    }

    protected function getAppKey()
    {
        return $this->appKey;
    }

    protected function setAppKey($appKey)
    {
        $this->appKey = $appKey;
    }

    protected function getRedirectUri()
    {
        return $this->redirectUri;
    }

    protected function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;
    }

    /* 
	 * 
	 */
    public function __construct($appId, $appKey, $redirectUri) 
    {
    	$this->setAppId($appId);
    	$this->setAppKey($appKey);
    	$this->setRedirectUri($redirectUri);
    }

    public function login() 
    {
    	$state = md5(uniqid(rand(), true));
    	$redirectUri = urlencode($this->getRedirectUri());
    	$location = "https://graph.qq.com/oauth2.0/authorize?response_type=code&scope=get_info&client_id=" . 
    				$this->getAppId() . "&redirect_uri=" . $redirectUri . "&state=" . $state;

    	header("Location: " . $location);
    }

    /* 
     * get Access Token 
     *
     * @depends callBack()
     */
    private function getAccessToken($code)
    {
    	$grantType = "authorization_code";
    	$clientId = $this->getAppId();
    	$clientSecret = $this->getAppKey();
    	$redirectUri = urlencode($this->getRedirectUri());
    	$requestUrl = "https://graph.qq.com/oauth2.0/token?grant_type=" . $grantType . 
    				  "&client_id=" . $clientId . "&client_secret=" . $clientSecret . 
    				  "&code=" . $code . "&redirect_uri" . $redirectUri;
    	$accessToken = file_get_contents($requestUrl);

    	return $accessToken;
    }

    /* 
     * get open_id
     * 
     * @data_provider getAccessToken()
     */
    private function getOpenId($accessToken)
    {
    	$uri = "https://graph.qq.com/oauth2.0/me";
    	$res = file_get_contents($uri . "?" . $accessToken);
    	return $res;
    }

    /* 
     * get user info 
     * 
	 * @data_provider getAccessToken()
	 * @data_provider getOpenId()
     */ 
    private function getUserInfo($accessToken, $openId)
    {
    	$uri = "https://graph.qq.com/user/get_user_info?access_token=" . $accessToken . 
    		   "&oauth_consumer_key=" . $this->getAppId() . "&openid=" . $openId;
    	return file_get_contents($uri);
    }

    /*
     * the public api
     * 
     */
    public function callBack()
    {	
    	if (!isset($_SESSION) || !isset($_GET['code'])) {
    		exit();
    	}

    	/* get access token */
    	$accessToken = $this->getAccessToken($_GET['code']);
    	$str = $this->getOpenId($accessToken);
    	if (strpos($str, "callback") !== false) {
    		$lpos = strpos($str, "(");
    		$rpos = strpos($str, ")");
    		$str = substr($str, $lops + 1, $rpos - $lpos - 1);
    	}

    	/* get user openid */
    	$user = json_decode($str, true);
    	/* get user info */ 
    	$userInfo = $this->getUserInfo($accessToken, $user['openid']);
    	
    	var_dump($userInfo);
    }

}

$kof = new QqOpen("222222", "", "http://zhy.nutjs.com/Connect2.1/");

$kof->login();