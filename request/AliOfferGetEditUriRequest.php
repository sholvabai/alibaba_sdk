<?php

class AliOfferGetEditUriRequest {
	private $param;

	private $apiParas = array();

	public function getapiParas() {
		return $this->apiParas;
	}

	public function setParam($param) {
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam() {
		return $this->param;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->param, "param");
	}
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>