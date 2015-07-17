<?php

class AliSearchTitlePropertiesInconsistentRequest {
	private $title;

	private $catid;

	private $brief;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function settitle($title) {
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function gettitle() {
		return $this->title;
	}

	public function setcatid($catid) {
		$this->catid = $catid;
		$this->apiParas["catid"] = $catid;
	}

	public function getcatid() {
		return $this->catid;
	}

	public function setbrief($brief) {
		$this->brief = $brief;
		$this->apiParas["brief"] = $brief;
	}

	public function getbrief() {
		return $this->brief;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->title, "title");
		RequestCheckUtil::checkNotNull($this->catid, "catid");
		RequestCheckUtil::checkNotNull($this->brief, "brief");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

?>