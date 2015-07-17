<?php

class AliE56LogisticsCompaniesGetRequest {
	private $serviceType;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setserviceType($serviceType) {
		$this->serviceType = $serviceType;
		$this->apiParas["serviceType"] = $serviceType;
	}

	public function getserviceType() {
		return $this->serviceType;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->serviceType, "serviceType");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>