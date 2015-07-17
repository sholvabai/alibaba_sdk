<?php

class AliAcrmCustomerGradeGetRequest {

	private $tradeAmountStart;
	private $tradeAmountEnd;
	private $lastestTimeStart;
	private $lastestTimeEnd;
	private $tradeCountEnd;

	private $tradeCountStart;
	private $avgPriceStart;
	private $avgPriceEnd;
	private $itemNumStart;
	private $itemNumEnd;

	private $province;

	private $pageSize;
	private $pageNum;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function settradeAmountStart($tradeAmountStart) {
		$this->tradeAmountStart = $tradeAmountStart;
		$this->apiParas["tradeAmountStart"] = $tradeAmountStart;
	}

	public function gettradeAmountStart() {
		return $this->tradeAmountStart;
	}

	public function settradeAmountEnd($tradeAmountEnd) {
		$this->tradeAmountEnd = $tradeAmountEnd;
		$this->apiParas["tradeAmountEnd"] = $tradeAmountEnd;
	}

	public function gettradeAmountEnd() {
		return $this->tradeAmountEnd;
	}

	public function setlastestTimeStart($lastestTimeStart) {
		$this->lastestTimeStart = $lastestTimeStart;
		$this->apiParas["lastestTimeStart"] = $lastestTimeStart;
	}

	public function getlastestTimeStart() {
		return $this->lastestTimeStart;
	}

	public function setlastestTimeEnd($lastestTimeEnd) {
		$this->lastestTimeEnd = $lastestTimeEnd;
		$this->apiParas["lastestTimeEnd"] = $lastestTimeEnd;
	}

	public function getlastestTimeEnd() {
		return $this->lastestTimeEnd;
	}

	public function settradeCountStart($tradeCountStart) {
		$this->tradeCountStart = $tradeCountStart;
		$this->apiParas["tradeCountStart"] = $tradeCountStart;
	}

	public function gettradeCountStart() {
		return $this->tradeCountStart;
	}

	public function settradeCountEnd($tradeCountEnd) {
		$this->tradeCountEnd = $tradeCountEnd;
		$this->apiParas["tradeCountEnd"] = $tradeCountEnd;
	}

	public function gettradeCountEnd() {
		return $this->tradeCountEnd;
	}

	public function setavgPriceStart($avgPriceStart) {
		$this->avgPriceStart = $avgPriceStart;
		$this->apiParas["avgPriceStart"] = $avgPriceStart;
	}

	public function getavgPriceStart() {
		return $this->avgPriceStart;
	}

	public function setavgPriceEnd($avgPriceEnd) {
		$this->avgPriceEnd = $avgPriceEnd;
		$this->apiParas["avgPriceEnd"] = $avgPriceEnd;
	}

	public function getavgPriceEnd() {
		return $this->avgPriceEnd;
	}

	public function setitemNumStart($itemNumStart) {
		$this->itemNumStart = $itemNumStart;
		$this->apiParas["itemNumStart"] = $itemNumStart;
	}

	public function getitemNumStart() {
		return $this->itemNumStart;
	}

	public function setitemNumEnd($itemNumEnd) {
		$this->itemNumEnd = $itemNumEnd;
		$this->apiParas["itemNumEnd"] = $itemNumEnd;
	}

	public function getitemNumEnd() {
		return $this->itemNumEnd;
	}

	public function setprovince($province) {
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getprovince() {
		return $this->province;
	}

	public function setpageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getpageSize() {
		return $this->pageSize;
	}

	public function setpageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParas["pageNum"] = $pageNum;
	}

	public function getpageNum() {
		return $this->pageNum;
	}

	public function check() {

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>