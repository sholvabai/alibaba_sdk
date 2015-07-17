<?php

class AliAcrmCustomerRelationGetRequest {

	private $level;
	private $pageSize;
	private $pageNum;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setlevel($level) {
		$this->level = $level;
		$this->apiParas["level"] = $level;
	}

	public function getlevel() {
		return $this->level;
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
		RequestCheckUtil::checkNotNull($this->level, "level");
		RequestCheckUtil::checkNotNull($this->pageSize, "pageSize");
		RequestCheckUtil::checkNotNull($this->pageNum, "pageNum");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>