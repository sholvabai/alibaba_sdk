<?php

class AliPushCursorMessageListRequest {
	private $createStartTime;

	private $createEndTime;

	private $quantity;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setcreateStartTime($createStartTime) {
		$this->createStartTime = $createStartTime;
		$this->apiParas["createStartTime"] = $createStartTime;
	}

	public function getcreateStartTime() {
		return $this->createStartTime;
	}

	public function setcreateEndTime($createEndTime) {
		$this->createEndTime = $createEndTime;
		$this->apiParas["createEndTime"] = $createEndTime;
	}

	public function getcreateEndTime() {
		return $this->createEndTime;
	}

	public function setquantity($quantity) {
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getquantity() {
		return $this->quantity;
	}

	public function check() {
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>