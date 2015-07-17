<?php
class AliIndustryShowwindowCancelRecommendOfferRequest {
	private $offerId;

	private $apiparas = array();

	public function getApiParas() {
		return $this->apiparas;
	}

	public function setofferId($offerId) {
		$this->offerId = $offerId;
		$this->apiparas["offerId"] = $offerId;
	}

	public function getofferId() {
		return $this->offerId;
	}
	public function check() {
		RequestCheckUtil::checkNotNull($this->offerId, "offerId");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

?>