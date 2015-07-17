<?php

class AliTradeFreightSendGoodsAddressListGetRequest {

	private $memberId;

	private $Fields;

	private $commonUseOnly;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setMemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParas["memberId"] = $memberId;
	}

	public function getMemberId() {
		return $this->memberId;
	}

	public function setFields($Fields) {
		$this->Fields = $Fields;
		$this->apiParas["returnFields"] = $Fields;
	}

	public function getFields() {
		$this->Fields;
	}

	public function setcommonUseOnly($commonUseOnly) {
		$this->commonUseOnly = $commonUseOnly;
		$this->apiParas["commonUseOnly"] = $commonUseOnly;
	}

	public function getcommonUseOnly() {
		return $this->commonUseOnly;
	}

	public function check() {

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>