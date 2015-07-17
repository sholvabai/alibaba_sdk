<?php
class AliTradeOrderOrderDetailGetRequest {
	private $orderId;

	private $apiParas = array();

	public function getapiParas() {
		return $this->apiParas;
	}

	public function setorderId($id) {
		$this->orderId = $id;
		$this->apiParas["orderid"] = $id;
	}

	public function getorderId() {
		return $this->orderId;
	}

	public function check() {

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>