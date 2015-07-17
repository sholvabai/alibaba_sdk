<?php

class AliClient{

	public $appkey;

	public $secretKey;
	
	public $api;

	public $gatewayUrl = "http://gw.open.1688.com/openapi/";
	
	public $urlPath="param2/1/cn.alibaba.open/";
	
	
	/** 是否打开入参check**/
	public $checkRequest = true;
	
	protected $signMethod = "sha1";
	
	protected $sdkVersion = "ali-sdk-php-20150717";
	
	protected function generateSign($params){
		ksort($params);
		$sign_str = "";
		foreach ($params as $key=>$val){
			$sign_str .= $key . $val;
		}
		$sign_str = $this->urlPath . $this->api .'/'. $this->appkey . $sign_str;

		$code_sign = strtoupper(bin2hex(hash_hmac($this->signMethod, $sign_str, $this->secretKey, true)));
		return $code_sign;
	}
	
	
	public function execute($request, $session = null){
		if($this->checkRequest) {
			try {
				$request->check();
			} catch (Exception $e) {
				$result->code = $e->getCode();
				$result->msg = $e->getMessage();
				return $result;
			}
		}

		$this->api = $request->getApiMethodName();
		
		//获取业务参数
		$apiParams = $request->getApiParas();

		//组装系统参数
		if (null != $session){
			$apiParams["access_token"] = $session;
		}
		
        if (empty($this->appkey) || empty($this->secretKey)) {
            trigger_error('app_key and app_secret can\'t be empty', E_USER_ERROR);
        }

		$apiParams['_aop_signature'] = $this->generateSign($apiParams);

		$requestUrl = $this->gatewayUrl . $this->urlPath . $this->api . '/' . $this->appkey;



		$postData = "";
		
		foreach ($apiParams as $sysParamKey => $sysParamValue){
			$postData .= "$sysParamKey=" . urlencode($sysParamValue) . "&";
		}

		$requestUrl .= '?'.$postData;
		echo $requestUrl;
		die;

		$resp = $this->curl($requestUrl);
		print_r($resp);
		die;

		try{
			$resp = $this->curl($requestUrl, $postData);
		}catch (Exception $e){
			return json_encode($e);
		}
		print_r($resp);
		die;
		return $resp;
	}
	
	
	// public function curl ($post_url){
	// 	$header = array("content-type: application/x-www-form-urlencoded;charset=UTF-8");
	// 	$ch = curl_init();
		
	// 	curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
 //        curl_setopt($ch, CURLOPT_URL,$post_url);
 //        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 //        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
 //        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 //        //curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
 //        $pagecontent = curl_exec($ch);
 //        curl_close($ch);
		
	// 	return $pagecontent;
	// }
	
	public function curl ($post_url,$postData=null){
		$header = array("content-type: application/x-www-form-urlencoded;charset=UTF-8");
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
        curl_setopt($ch, CURLOPT_URL,$post_url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if ($postData != null) {
        	curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        }
        
        $pagecontent = curl_exec($ch);
        curl_close($ch);
		
		return $pagecontent;
	}

}
?>