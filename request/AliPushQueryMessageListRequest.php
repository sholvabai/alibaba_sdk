<?php

class AliPushQueryMessageListRequest {

	private $createStartTime;

	private $createEndTime;

	private $page;

	private $pageSize;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
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

	public function setpage($page) {
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getpage() {
		return $this->page;
	}

	public function setpageSize($pageSize) {
		$this->pageSize = $pageSize;
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