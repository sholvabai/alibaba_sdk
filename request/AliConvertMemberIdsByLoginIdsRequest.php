<?php

class AliConvertMemberIdsByLoginIdsRequest {

	private $loginIds;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setloginIds($loginIds) {
		$this->loginIds = $loginIds;
		$this->apiParas["loginIds"] = $loginIds;
	}

	public function getMemberId() {
		return $this->loginIds;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->loginIds, "loginIds");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;

	}

}

?>