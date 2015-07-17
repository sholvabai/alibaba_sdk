<?php

class AliE56LogisticsDummySendRequest {

	private $orderId;

	private $orderEntryIds;

	private $tradeSourceType;

	private $remarks;

	private $gmtSystemSend;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}
	public function setorderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParas["orderId"] = $orderId;
	}

	public function getorderId() {
		return $this->orderId;
	}

	public function setorderEntryIds($orderEntryIds) {
		$this->orderEntryIds = $orderEntryIds;
		$this->apiParas["orderEntryIds"] = $orderEntryIds;
	}

	public function getorderEntryIds() {
		return $this->orderEntryIds;
	}

	public function settradeSourceType($tradeSourceType) {
		$this->tradeSourceType = $tradeSourceType;
		$this->apiParas["tradeSourceType"] = $tradeSourceType;
	}

	public function gettradeSourceType() {
		return $this->tradeSourceType;
	}

	public function setremarks($remarks) {
		$this->remarks = $remarks;
		$this->apiParas["remarks"] = $remarks;
	}

	public function getremarks() {
		return $this->remarks;
	}

	public function setgmtSystemSend($gmtSystemSend) {
		$this->gmtSystemSend = $gmtSystemSend;
		$this->apiParas["gmtSystemSend"] = $gmtSystemSend;
	}

	public function getgmtSystemSend() {
		return $this->gmtSystemSend;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->tradeSourceType, "tradeSourceType");
		RequestCheckUtil::checkNotNull($this->orderId, "orderId");
		RequestCheckUtil::checkNotNull($this->orderEntryIds, "orderEntryIds");
		RequestCheckUtil::checkNotNull($this->gmtSystemSend, "gmtSystemSend");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>