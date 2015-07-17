<?php

class AliSearchCategoryCheatingRequest {

	private $title;

	private $catid;

	private $userid;

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

	public function setuserid($userid) {
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getuserid() {
		return $this->userid;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->title, "title");
		RequestCheckUtil::checkNotNull($this->catid, "catid");
		RequestCheckUtil::checkNotNull($this->userid, "userid");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>