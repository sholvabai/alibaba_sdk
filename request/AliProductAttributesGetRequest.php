<?php

class AliProductAttributesGetRequest {
	private $categoryID;

	private $timeStamp;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setcategoryID($categoryID) {
		$this->categoryID = $categoryID;
		$this->apiParas["categoryID"] = $categoryID;
	}

	public function getcategoryID() {
		return $this->categoryID;
	}

	public function settimeStamp($timeStamp) {
		$this->timeStamp = $timeStamp;
		$this->apiParas["timeStamp"] = $timeStamp;
	}

	public function gettimeStamp() {
		return $this->timeStamp;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->categoryID, "categoryID");
		RequestCheckUtil::checkNotNull($this->timeStamp, "timeStamp");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;

	}

}

?>