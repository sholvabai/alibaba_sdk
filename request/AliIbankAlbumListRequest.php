<?php

class AliIbankAlbumListRequest {
	private $albumType;

	private $pageSize;

	private $pageNo;

	private $apiParas = array();

	public function getapiParas() {
		return $this->apiParas;
	}

	public function setalbumType($type) {
		$this->albumType = $type;
		$this->apiParas["albumType"] = $type;
	}

	public function getalbumType() {
		$this->albumType;
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
		RequestCheckUtil::checkNotNull($this->albumType, "albumType");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>