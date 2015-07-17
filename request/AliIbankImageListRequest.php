<?php

class AliIbankImageListRequest {
	private $albumId;

	private $pageSize;

	private $pageNo;

	private $apiParas = array();

	public function getapiParas() {
		return $this->apiParas;
	}

	public function setalbumId($Id) {
		$this->albumId = $Id;
		$this->apiParas["albumId"] = $Id;
	}

	public function getalbumId() {
		$this->albumId;
	}

	public function setpageSize($size) {
		$this->pageSize = $size;
		$this->apiParas["pageSize"] = $size;
	}

	public function getpageSize() {
		return $this->pageSize;
	}

	public function setpageNo($no) {
		$this->pageNo = $no;
		$this->apiParas["pageNo"] = $no;
	}

	public function getpageNo() {
		return $this->pageNo;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->albumId, "albumId");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>