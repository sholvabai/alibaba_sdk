<?php

class AliCategoryGetCatListByParentIdRequest {

	private $parentCategoryID;

	private $getAllChildren;

	private $timeStamp;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setparentCategoryID($parentCategoryID) {
		$this->parentCategoryID = $parentCategoryID;
		$this->apiParas["parentCategoryID"] = $parentCategoryID;
	}

	public function getparentCategoryID() {
		return $this->parentCategoryID;
	}

	public function setgetAllChildren($getAllChildren) {
		$this->getAllChildren = $getAllChildren;
		$this->apiParas["getAllChildren"] = $getAllChildren;
	}

	public function getgetAllChildren() {
		return $this->getAllChildren;
	}

	public function settimeStamp($timeStamp) {
		$this->timeStamp = $timeStamp;
		$this->apiParas["timeStamp"] = $timeStamp;
	}

	public function gettimeStamp() {
		return $this->timeStamp;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->parentCategoryID, "parentCategoryID");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;

	}

}

?>