<?php

class AliAppExpireGetrRequest {
	private $bizStatusExts;
	private $appKey;

	private $ServiceEnd;
	private $memberId;

	private $bizStatusList;
	private $pageSize;
	private $startIndex;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setbizStatusExts($bizStatusExts) {
		$this->bizStatusExts = $bizStatusExts;
		$this->apiParas["bizStatusExts"] = $bizStatusExts;
	}

	public function getbizStatusExts() {
		return $this->bizStatusExts;
	}

	public function setappKey($appKey) {
		$this->appKey = $appKey;
		$this->apiParas["appKey"] = $appKey;
	}

	public function getappKey() {
		return $this->appKey;
	}
	public function setgmtServiceEnd($gmtServiceEnd) {
		$this->gmtServiceEnd = $gmtServiceEnd;
		$this->apiParas["gmtServiceEnd"] = $gmtServiceEnd;
	}

	public function getgmtServiceEnd() {
		return $this->gmtServiceEnd;
	}
	public function setmemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParas["memberId"] = $memberId;
	}

	public function getmemberId() {
		return $this->memberId;
	}
	public function setbizStatusList($bizStatusList) {
		$this->bizStatusList = $bizStatusList;
		$this->apiParas["bizStatusList"] = $bizStatusList;
	}

	public function getbizStatusList() {
		return $this->bizStatusList;
	}

	public function setpageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getpageSize() {
		return $this->pageSize;
	}

	public function setstartIndex($startIndex) {
		$this->startIndex = $startIndex;
		$this->apiParas["startIndex"] = $startIndex;
	}

	public function getstartIndex() {
		return $this->startIndex;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->appKey, "appKey");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>