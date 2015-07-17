<?php

class AliAcrmCustomerSetGradeRequest {
	private $discount;
	private $amount;
	private $count;
	private $privateAuthorize;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setdiscount($discount) {
		$this->discount = $discount;
		$this->apiParas["discount"] = $discount;
	}

	public function getdiscount() {
		return $this->discount;
	}

	public function setamount($amount) {
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getamount() {
		return $this->amount;
	}

	public function setcount($count) {
		$this->count = $count;
		$this->apiParas["count"] = $count;
	}

	public function getcount() {
		return $this->count;
	}

	public function setprivateAuthorize($privateAuthorize) {
		$this->privateAuthorize = $privateAuthorize;
		$this->apiParas["privateAuthorize"] = $privateAuthorize;
	}

	public function getprivateAuthorize() {
		return $this->privateAuthorize;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->discount, "discount");
		RequestCheckUtil::checkNotNull($this->amount, "amount");

		RequestCheckUtil::checkNotNull($this->count, "count");

		RequestCheckUtil::checkNotNull($this->privateAuthorize, "privateAuthorize");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

?>