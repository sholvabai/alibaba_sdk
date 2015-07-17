<?php

class AliE56LogisticsOfflineSendRequest {
	private $orderId;

	private $orderEntryIds;

	private $tradeSourceType;

	private $remarks;

	private $gmtSystemSend;

	private $logisticsCompanyId;

	private $selfCompanyname;

	private $logisticsBillNo;

	private $gmtLogisticsCompanySend;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}
	public function setorderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParas["orderId"] = $orderId;
	}

	public function getorderId() {
		return $this->orderId;
	}

	public function setorderEntryIds($orderEntryIds) {
		$this->orderEntryIds = $orderEntryIds;
		$this->apiParas["orderEntryIds"] = $orderEntryIds;
	}

	public function getorderEntryIds() {
		return $this->orderEntryIds;
	}

	public function settradeSourceType($tradeSourceType) {
		$this->tradeSourceType = $tradeSourceType;
		$this->apiParas["tradeSourceType"] = $tradeSourceType;
	}

	public function gettradeSourceType() {
		return $this->tradeSourceType;
	}

	public function setremarks($remarks) {
		$this->remarks = $remarks;
		$this->apiParas["remarks"] = $remarks;
	}

	public function getremarks() {
		return $this->remarks;
	}

	public function setgmtSystemSend($gmtSystemSend) {
		$this->gmtSystemSend = $gmtSystemSend;
		$this->apiParas["gmtSystemSend"] = $gmtSystemSend;
	}

	public function getgmtSystemSend() {
		return $this->gmtSystemSend;
	}

	public function setlogisticsCompanyId($logisticsCompanyId) {
		$this->logisticsCompanyId = $logisticsCompanyId;
		$this->apiParas["logisticsCompanyId"] = $logisticsCompanyId;
	}

	public function getlogisticsCompanyId() {
		return $this->logisticsCompanyId;
	}

	public function setselfCompanyname($selfCompanyname) {
		$this->selfCompanyname = $selfCompanyname;
		$this->apiParas["selfCompanyname"] = $selfCompanyname;
	}

	public function getselfCompanyname() {
		return $this->selfCompanyname;
	}

	public function setlogisticsBillNo($logisticsBillNo) {
		$this->logisticsBillNo = $logisticsBillNo;
		$this->apiParas["logisticsBillNo"] = $logisticsBillNo;
	}

	public function getlogisticsBillBNo() {
		return $this->logisticsBillBNo;
	}

	public function setgmtLogisticsCompanySend($gmtLogisticsCompanySend) {
		$this->gmtLogisticsCompanySend = $gmtLogisticsCompanySend;
		$this->apiParas["gmtLogisticsCompanySend"] = $gmtLogisticsCompanySend;
	}

	public function getgmtLogisticsCompanySend() {
		return $this->gmtLogisticsCompanySend;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->tradeSourceType, "tradeSourceType");
		RequestCheckUtil::checkNotNull($this->orderId, "orderId");
		RequestCheckUtil::checkNotNull($this->orderEntryIds, "orderEntryIds");
		RequestCheckUtil::checkNotNull($this->gmtSystemSend, "gmtSystemSend");
		RequestCheckUtil::checkNotNull($this->logisticsCompanyId, "logisticsCompanyId");
		RequestCheckUtil::checkNotNull($this->logisticsBillNo, "logisticsBillNo");
		RequestCheckUtil::checkNotNull($this->logisticsBillNo, "gmtLogisticsCompanySend");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>