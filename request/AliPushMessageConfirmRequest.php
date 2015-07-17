<?php

class AliPushMessageConfirmRequest {

	private $msgIdList;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setmsgIdList($msgIdList) {
		$this->msgIdList = $msgIdList;
		$this->apiParas["msgIdList"] = $msgIdList;
	}

	public function getmsgIdList() {
		return $this->msgIdList;
	}

	public function check() {
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

?>