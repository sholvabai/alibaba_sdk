<?php

class AliTradeOrderListGetRequest {
	private $his;
	private $createStartTime;
	private $createEndTime;
	private $buyerMemberId;
	private $sellerMemberId;

	private $productName;
	private $payStartTime;
	private $payEndTime;
	private $tradeTypeEnum;
	private $orderStatusEnum;

	private $page;
	private $modifyStartTime;
	private $modifyEndTime;
	private $pageSize;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function sethis($his) {
		$this->his = $his;
		$this->apiParas["his"] = $his;
	}

	public function gethis() {
		return $this->his;
	}

	public function setcreateStartTime($createStartTime) {
		$this - $createStartTime = $createStartTime;
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

	public function setproductName($productName) {
		$this->productName = $productName;
		$this->apiParas["productName"] = $productName;
	}

	public function getproductName() {
		return $this->productName;
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

	public function settradeTypeEnum($tradeTypeEnum) {
		$this->tradeTypeEnum = $tradeTypeEnum;
		$this->apiParas["tradeTypeEnum"] = $tradeTypeEnum;
	}
	public function gettradeTypeEnum() {
		return $this->tradeTypeEnum;
	}

	public function setorderStatusEnum($orderStatusEnum) {
		$this->orderStatusEnum = $orderStatusEnum;
		$this->apiParas["orderStatusEnum"] = $orderStatusEnum;
	}
	public function getorderStatusEnum() {
		return $this->orderStatusEnum;
	}

	public function setpage($page) {
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}
	public function getpage() {
		return $this->page;
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

	public function setpageSize($pageSize) {
		$this->pagesize = $pagesize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getpageSize() {
		return $this->pageSize;
	}

	public function check() {
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

?>