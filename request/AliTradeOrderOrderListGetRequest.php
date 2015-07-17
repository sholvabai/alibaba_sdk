<?php

class AliTradeOrderOrderListGetRequest {
	private $buyerMemberId;
	private $sellerMemberId;
	private $gmtCreateStart;
	private $gmtCreateEnd;
	private $gmtPayStart;

	private $gmtPayEnd;
	private $tradeType;
	private $orderStatus;
	private $pageNO;
	private $pageSize;

	private $isHis;
	private $productName;
	private $orderId;
	private $createStartTime;
	private $createEndTime;

	private $payStartTime;
	private $payEndTime;
	private $modifyStartTime;
	private $modifyEndTime;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setbuyerMemberId($buyerMemberId) {
		$this->buyerMemberId = $buyerMemberId;
		$this->apiParas["buyerMemberId"] = $buyerMemberId;
	}
	public function getbuyerMemberId() {
		return $this->buyerMemberId;
	}

	public function setsellerMemberId($sellerMemberId) {
		$this->sellerMemberId = $sellerMemberId;
		$this->apiParas["sellerMemberId"] = $sellerMemberId;
	}
	public function getsellerMemberId() {
		return $this->sellerMemberId;
	}

	public function setgmtCreateStart($gmtCreateStart) {
		$this->gmtCreateStart = $gmtCreateStart;
		$this->apiParas["gmtCreateStart"] = $gmtCreateStart;
	}
	public function getgmtCreateStart() {
		return $this->gmtCreateStart;
	}

	public function setgmtCreateEnd($gmtCreateEnd) {
		$this->gmtCreateEnd = $gmtCreateEnd;
		$this->apiParas["gmtCreateEnd"] = $gmtCreateEnd;
	}
	public function getgmtCreateEnd() {
		return $this->gmtCreateEnd;
	}

	public function setgmtPayStart($gmtPayStart) {
		$this->gmtPayStart = $gmtPayStart;
		$this->apiParas["gmtPayStart"] = $gmtPayStart;
	}
	public function getgmtPayStart() {
		return $this->gmtPayStart;
	}

	public function setgmtPayEnd($gmtPayEnd) {
		$this->gmtPayEnd = $gmtPayEnd;
		$this->apiParas["gmtPayEnd"] = $gmtPayEnd;
	}
	public function getgmtPayEnd() {
		return $this->gmtPayEnd;
	}

	public function settradeType($tradeType) {
		$this->tradeType = $tradeType;
		$this->apiParas["tradeType"] = $tradeType;
	}
	public function gettradeType() {
		return $this->tradeType;
	}

	public function setorderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParas["orderStatus"] = $orderStatus;
	}
	public function getorderStatus() {
		return $this->orderStatus;
	}

	public function setpageNO($pageNO) {
		$this->pageNO = $pageNO;
		$this->apiParas["pageNO"] = $pageNO;
	}
	public function getpageNO() {
		return $this->pageNO;
	}

	public function setpageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}
	public function getpageSize() {
		return $this->pageSize;
	}

	public function setisHis($isHis) {
		$this->isHis = $isHis;
		$this->apiParas["isHis"] = $isHis;
	}
	public function getisHis() {
		return $this->isHis;
	}

	public function setproductName($productName) {
		$this->productName = $productName;
		$this->apiParas["productName"] = $productName;
	}
	public function getproductName() {
		return $this->productName;
	}

	public function setorderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParas["orderId"] = $orderId;
	}
	public function getorderId() {
		return $this->orderId;
	}

	public function setcreateStartTime($createStartTime) {
		$this->createStartTime = $createStartTime;
		$this->apiParas["createStartTime"] = $createStartTime;
	}
	public function getcreateStartTime() {
		return $this->createStartTime;
	}

	public function setcreateEndTime($createEndTime) {
		$this->createEndTime = $createEndTime;
		$this->apiParas["createEndTime"] = $createEndTime;
	}
	public function getcreateEndTime() {
		return $this->createEndTime;
	}

	public function setpayStartTime($payStartTime) {
		$this->payStartTime = $payStartTime;
		$this->apiParas["payStartTime"] = $payStartTime;
	}
	public function getpayStartTime() {
		return $this->payStartTime;
	}

	public function setpayEndTime($payEndTime) {
		$this->payEndTime = $payEndTime;
		$this->apiParas["payEndTime"] = $payEndTime;
	}
	public function getpayEndTime() {
		return $this->payEndTime;
	}

	public function setmodifyStartTime($modifyStartTime) {
		$this->modifyStartTime = $modifyStartTime;
		$this->apiParas["modifyStartTime"] = $modifyStartTime;
	}
	public function getmodifyStartTime() {
		return $this->modifyStartTime;
	}

	public function setmodifyEndTime($modifyEndTime) {
		$this->modifyEndTime = $modifyEndTime;
		$this->apiParas["modifyEndTime"] = $modifyEndTime;
	}
	public function getmodifyEndTime() {
		return $this->modifyEndTime;
	}

	public function check() {

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>