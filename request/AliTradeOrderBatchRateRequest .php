<?php

class AliTradeOrderBatchRateRequest {
	private $orders;

	private $apiParas = array();

	public function getapiParas() {
		return $this->apiParas;
	}

	public function setorders($orders) {
		$this->orders = $orders;
		$this->apiParas["orders"] = $orders;
	}

	public function getorders() {
		return $this->orders;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->orders, "orders");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>