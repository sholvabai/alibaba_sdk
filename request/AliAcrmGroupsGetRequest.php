<?php

class AliAcrmGroupsGetRequest {

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function check() {
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>