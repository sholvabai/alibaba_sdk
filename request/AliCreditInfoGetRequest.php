<?php

class AliCreditInfoGetRequest {
	private $memberIds;
	private $logoStyle;
	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setMemberId($memberId) {
		$this->memberIds = $memberId;
		$this->apiParas["memberIds"] = $memberId;
	}

	public function getMemberIds() {
		return $this->memnberIds;

	}
	public function setlogoStyle($logoStyle) {
		$this->logoStyle = $logoStyle;
		$this->apiParas["logoStyle"] = $logoStyle;
	}

	public function getlogoStyle() {
		$this->logoStyle();
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->memberIds, "memberIds");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>