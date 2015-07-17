<?php
class AliOfferGetRequest {
	private $offerId;

	private $Fields;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setofferId($offerId) {
		$this->offerId = $offerId;
		$this->apiParas["offerId"] = $offerId;
	}

	public function getofferId() {
		return $this->offerId;
	}

	public function setFields($Fields) {
		$this->Fields = $Fields;
		$this->apiParas["returnFields"] = $Fields;
	}

	public function getFields() {
		return $this->Fields;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->offerId, "offerId");
		RequestCheckUtil::checkNotNull($this->Fields, "Fields");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>