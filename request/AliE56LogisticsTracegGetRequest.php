<?php

class AliE56LogisticsTracegGetRequest {

	private $logisticsId;

	private $tradeSourceType;

	private $orderId;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setlogisticsId($logisticsId) {
		$this->logisticsId = $logisticsId;
		$this->apiParas["logisticsId"] = $logisticsId;
	}

	public function getlogisticsId() {
		return $this->logisticsId;
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