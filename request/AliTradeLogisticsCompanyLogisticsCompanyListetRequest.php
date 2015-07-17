<?php
class AliTradeLogisticsCompanyLogisticsCompanyListetRequest {

	private $memberId;

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

	public function check() {
		RequestCheckUtil::checkNotNull($this->memberId, "memberId");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>