<?php

class AliOffersModifyRequest {
	private $offerIds;

	private $subjects;

	private $priceRanges;

	private $amounts;

	private $isModify;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setofferIds($offerId) {
		$this->offerIds = $offerId;
		$this->apiParas["offerIds"] = $offerId;
	}

	public function getofferIds() {
		return $this->offerIds;
	}

	public function setsubjects($subject) {
		$this->subjects = $subject;
		$this->apiParas["subjects"] = $subject;
	}

	public function getsubjects() {
		return $this->subjects;
	}

	public function setpriceRanges($priceRange) {
		$this->priceRanges = $priceRange;
		$this->apiParas["priceRanges"] = $priceRange;
	}

	public function getpriceRanges() {
		return $this->priceRanges;
	}

	public function setamounts($asmount) {
		$this->amounts = $asmount;
		$this->apiParas["amounts"] = $asmount;
	}

	public function getamounts() {
		return $this->amounts;
	}

	public function setisModify($Modify) {
		$this->isModify = $Modify;
		$this->apiParas["isModify"] = $Modify;
	}

	public function getisModify() {
		return $this->isModify;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->offerIds, "offerIds  ");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>