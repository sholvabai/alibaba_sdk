<?php

class AliAcrmCustomerRelationBatchEditRequest {

	private $buyerMemberIds;
	private $relation;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setbuyerMemberIds($buyerMemberIds) {
		$this->buyerMemberIds = $buyerMemberIds;
		$this->apiParas["buyerMemberIds"] = $buyerMemberIds;
	}

	public function getbuyerMemberIds() {
		return $this->buyerMemberIds;
	}

	public function setrelation($relation) {
		$this->relation = $relation;
		$this->apiParas["relation"] = $relation;
	}

	public function getrelation() {
		return $this->relation;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->relation, "relation");
		RequestCheckUtil::checkNotNull($this->buyerMemberIds, "buyerMemberIds");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>