<?php

class AliUserCategoryOffersAddRequest {
	private $offerIds;

	private $groupId;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setofferIds($offerIds) {
		$this->offerIds = $offerIds;
		$this->apiParas["offerIds"] = $offerIds;
	}

	public function getofferIds() {
		return $this->offerIds;
	}

	public function setgroupId($groupId) {
		$this->groupId = $groupId;
		$this->apiParas["groupId"] = $groupId;
	}

	public function getFields() {
		$this->Fields;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->offerIds, "offerIds");
		RequestCheckUtil::checkNotNull($this->groupId, "groupId");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>