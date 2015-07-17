<?php

class AliConvertLoginIdsByMemberIdsRequest {
	private $memberIds;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setMemberIds($memberid) {
		$this->memberIds = $memberid;
		$this->apiParas["memberIds"] = $memberid;
	}

	public function getMemberIds() {
		return $this->memberIds;
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