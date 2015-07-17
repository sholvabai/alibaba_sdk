<?php

class AliOfferGroupSetRequest {

	private $switchType;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setswitchType($switchType) {
		$this->switchType = $switchType;
		$this->apiParas["switchType"] = $switchType;
	}

	public function getswitchType() {
		return $this->switchType;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->switchType, "switchType");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>