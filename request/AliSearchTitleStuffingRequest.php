<?php
class AliSearchTitleStuffingRequest {
	private $query;

	private $apiParas = array();

	public function getApiParas() {
		return $this->query;
	}

	public function setquery($query) {
		$this->query = $query;
		$this->apiParas["query"] = $query;
	}

	public function getquery() {
		return $this->query;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->query, "query");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>