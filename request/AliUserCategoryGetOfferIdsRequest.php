<?php

class AliUserCategoryGetOfferIdsRequest {
	private $offerIds;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setofferIds($offerIds) {
		$this->offerIds = $offerIds;
		$this->apiParas["offerIds"] = $offerIds;
	}

	public function getofferIds() {
		return $this->offerIds;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->offerIds, "offerIds");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>