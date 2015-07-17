<?php
class AliAcrmGroupsAddRequest {
	private $groupingName;

	private $apiParas = array();
	public function getApiParas() {
		return $this->apiParas;
	}
	public function setgroupingName($groupingName) {
		$this->groupingName = $groupingName;
		$this->apiParas["groupingName"] = $groupingName;
	}
	public function getgroupingName() {
		return $this->groupingName;
	}
	public function check() {
		RequestCheckUtil::checkNotNull($this->groupingName, "groupingName");
	}
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
?>