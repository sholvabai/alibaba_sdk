<?php

class AliIndustryShowwindowDoQueryRecommOfferListRequest {

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function check() {
		//RequestCheckUtil::checkNotNull(null);
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>