<?php

class AliAcrmGroupsDeleteRequest {

	private $groupingId;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setgroupingId($groupingId) {
		$this->groupingId = $groupingId;
		$this->apiParas["groupingId"] = $groupingId;
	}

	public function getgroupingId() {
		return $this->groupingId;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->groupingId, "groupingId");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>