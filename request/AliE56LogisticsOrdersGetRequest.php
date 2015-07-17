<?php

class AliE56LogisticsOrdersGetRequest {
	private $fields;

	private $tradeSourceType;

	private $orderId;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setfields($fields) {
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getfields() {
		return $this->fields;
	}

	public function settradeSourceType($tradeSourceType) {
		$this->tradeSourceType = $tradeSourceType;
		$this->apiParas["tradeSourceType"] = $tradeSourceType;
	}

	public function gettradeSourceType() {
		return $this->tradeSourceType;
	}

	public function setorderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParas["orderId"] = $orderId;
	}

	public function getorderId() {
		return $this->orderId;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->tradeSourceType, "tradeSourceType");
		RequestCheckUtil::checkNotNull($this->orderId, "orderId");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>