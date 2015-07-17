<?php

class AliIbankProfileGetRequest {

	private $unused;

	private $apiParas = array();

	public function getapiParas() {
		return $this->apiParas;
	}

	public function setUnused($unused) {
		$this->unused = $unused;
		$this->apiParas["unused"] = $unused;
	}

	public function getUnused() {
		return $this->unused;
	}

	public function check() {

	}
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>