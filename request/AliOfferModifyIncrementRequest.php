<?php

class AliOfferModifyIncrementRequest {
	private $offer;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setOffer($offer) {
		$this->offer = $offer;
		$this->apiParas["offer"] = $offer;
	}

	public function getOffer() {
		return $this->offer;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->offer, "offer");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>