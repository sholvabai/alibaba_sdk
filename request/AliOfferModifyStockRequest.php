<?php
class AliOfferModifyStockRequest {
	private $offerId;

	private $offerAmountChange;

	private $skuAmountChange;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setofferId($offerId) {
		$this->offerId = $offerId;
		$this->apiParas["offerId"] = $offerId;
	}

	public function getofferId() {
		return $this->offerId;
	}

	public function setofferAmountChange($offerChange) {
		$this->offerAmountChange = $offerChange;
		$this->apiParas["offerAmountChange"] = $offerChange;

	}

	public function getofferAmountChange() {
		return $this->offerAmountChange;
	}

	public function setskuAmountChange($skuChange) {
		$this->skuAmountChange = $skuChange;
		$this->apiParas["skuAmountChange"] = $skuChange;
	}

	public function getskuAmountChange() {
		return $this->skuAmountChange;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->offerId, "offerId");
		RequestCheckUtil::checkNotNull($this->offerAmountChange, "offerAmountChange");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>