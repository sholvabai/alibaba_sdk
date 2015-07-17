<?php

class AliAcrmCustomerGroupGetRequest {

	private $groupId;
	private $pageSize;
	private $pageNum;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setgroupId($groupId) {
		$this->groupId = $groupId;
		$this->apiParas["groupId"] = $groupId;
	}

	public function getgroupId() {
		return $this->groupId;
	}

	public function setpageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getpageSize() {
		return $this->pageSize;
	}

	public function setpageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParas["pageNum"] = $pageNum;
	}

	public function getpageNum() {
		return $this->pageNum;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->groupId, "groupId");
		RequestCheckUtil::checkNotNull($this->pageSize, "pageSize");
		RequestCheckUtil::checkNotNull($this->pageNum, "pageNum");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>