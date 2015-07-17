<?php

class AliTradeOrderDetailGetRequest {

	private $Id;

	private $needOrderEntries;

	private $needInvoiceInfor;

	private $needOrderMemoList;

	private $needLogistcsOrderList;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setId($id) {
		$this->Id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId() {
		return $this->Id;
	}

	public function setneedOrderEntries($needOrderEntries) {
		$this->needOrderEntries = $needOrderEntries;
		$this->apiParas["needOrderEntries"] = $needOrderEntries;
	}

	public function getneedOrderEntries() {
		return $this->needOrderEntries;
	}

	public function setneedInvoiceInfor($needInvoiceInfor) {
		$this->needInvoiceInfor = $needInvoiceInfor;
		$this->apiParas["needInvoiceInfor"] = $needInvoiceInfor;
	}

	public function getneedInvoiceInfor() {
		return $this->needInvoiceInfor;
	}

	public function setneedOrderMemoList($needOrderMemoList) {
		$this->needOrderMemoList = $needOrderMemoList;
		$this->apiParas["needOrderMemoList"] = $needOrderMemoList;
	}

	public function getneedOrderMemoList() {
		return $this->needOrderMemoList;
	}

	public function setneedLogistcsOrderList($needLogistcsOrderList) {
		$this->needLogistcsOrderList = $needLogistcsOrderList;
		$this->apiParas["needLogistcsOrderList"] = $needLogistcsOrderList;
	}

	public function getneedLogistcsOrderList() {
		return $this->needLogistcsOrderList;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->Id, "Id");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>