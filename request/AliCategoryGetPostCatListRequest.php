<?php

class AliCategoryGetPostCatListRequest {
	private $catIDs;

	private $getAllChildren;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setcatIDs($catIDs) {
		$this->catIDs = $catIDs;
		$this->apiParas["catIDs"] = $catIDs;
	}

	public function getcatIDs() {
		return $this->catIDs;
	}

	public function settimeStamp($timeStamp) {
		$this->timeStamp = $timeStamp;
		$this->apiParas["timeStamp"] = $timeStamp;
	}

	public function gettimeStamp() {
		return $this->timeStamp;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->catIDs, "catIDs");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;

	}

}

?>