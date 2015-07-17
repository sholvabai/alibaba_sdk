<?php

class AliAcrmGroupsNameUpdateRequest {

	private $groupingId;
	private $groupingNewName;

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

	public function setgroupingNewName($groupingNewName) {
		$this->groupingNewName = $groupingNewName;
		$this->apiParas["groupingNewName"] = $groupingNewName;
	}

	public function getgroupingNewName() {
		return $this->groupingNewName;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->groupingNewName, "groupingNewName");
		RequestCheckUtil::checkNotNull($this->groupingId, "groupingId");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>