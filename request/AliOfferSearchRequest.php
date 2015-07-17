<?php

class AliOfferSearchRequest {
	private $pageNo;
	private $returnFields;
	private $pageSize;
	private $orderBy;
	private $offerId;

	private $q;
	private $isTradeOffer;
	private $category;
	private $gmtModifiedbegi;
	private $n;

	private $gmtModifiedEnd;
	private $address;
	private $memberId;
	private $tpType;
	private $tpYear;

	private $creditMoney;
	private $tradeType;
	private $soldQuantity;
	private $showType;
	private $bizType;

	private $province;
	private $city;
	private $price;
	private $qualityLevel;
	private $quantityBegin;

	private $online;
	private $groupIds;
	private $status;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setpageNo($pageNo) {
		$this->pageNo = $pageNo;
		$this->apiParas["pageNo"] = $pageNo;
	}

	public function getpageNo() {
		return $this->pageNo;
	}

	public function setreturnFields($returnFields) {
		$this->returnFields = $returnFields;
		$this->apiParas["returnFields"] = $returnFields;
	}

	public function getreturnFields() {
		return $this->returnFields;
	}

	public function setpageSize($pageSize) {
		$this->pagesize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getpageSize() {
		return $this->pageSize;
	}

	public function setorderBy($orderBy) {
		$this->orderBy = $orderBy;
		$this->apiParas["orderBy"] = $orderBy;
	}

	public function getorderBy() {
		return $this->orderBy;
	}

	public function setofferId($offerId) {
		$this->offerId = $offerId;
		$this->apiParas["offerId"] = $offerId;
	}

	public function getofferId() {
		return $this->offerId;
	}

	public function setq($q) {
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getq() {
		return $this->q;
	}

	public function setisTradeOffer($isTradeOffer) {
		$this->isTradeOffer = $isTradeOffer;
		$this->apiParas["isTradeOffer"] = $isTradeOffer;
	}

	public function getisTradeOffer() {
		return $this->isTradeOffer;
	}

	public function setcategory($category) {
		$this->category = $category;
		$this->apiParas["category"] = $category;
	}

	public function getcategory() {
		return $this->category;
	}

	public function setgmtModifiedBegi($gmtModifiedBegi) {
		$this->gmtModifiedBegi = $gmtModifiedBegi;
		$this->apiParas["gmtModifiedBegi"] = $gmtModifiedBegi;
	}
	public function getgmtModifiedBegi() {
		return $this->gmtModifiedBegi;
	}

	public function setn($n) {
		$this->n = $n;
		$this->apiParas["n"] = $n;
	}
	public function getn() {
		return $this->n;
	}

	public function setgmtModifiedEnd($gmtModifiedEnd) {
		$this->gmtModifiedEnd = $gmtModifiedEnd;
		$this->apiParas["gmtModifiedEnd"] = $gmtModifiedEnd;
	}
	public function getgmtModifiedEnd() {
		return $this->gmtModifiedEnd;
	}

	public function setaddress($address) {
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}
	public function getaddress() {
		return $this->address;
	}

	public function setmemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParas["memberId"] = $memberId;
	}
	public function getmemberId() {
		return $this->memberId;
	}

	public function settpType($tpType) {
		$this->tpType = $tpType;
		$this->apiParas["tpType"] = $tpType;
	}
	public function gettpType() {
		return $this->tpType;
	}

	public function settpYear($tpYear) {
		$this->tpYear = $tpYear;
		$this->apiParas["tpYear"] = $tpYear;
	}
	public function gettpYear() {
		return $this->tpYear;
	}

	public function setcreditMoney($creditMoney) {
		$this->creditMoney = $creditMoney;
		$this->apiParas["creditMoney"] = $creditMoney;
	}
	public function getcreditMoney() {
		return $this->creditMoney;
	}

	public function settradeType($tradeType) {
		$this->tradeType = $tradeType;
		$this->apiParas["tradeType"] = $tradeType;
	}
	public function gettradeType() {
		return $this->tradeType;
	}

	public function setsoldQuantity($soldQuantity) {
		$this->soldQuantity = $soldQuantity;
		$this->apiParas["soldQuantity"] = $soldQuantity;
	}
	public function getsoldQuantity() {
		return $this->soldQuantity;
	}

	public function setshowType($showType) {
		$this->showType = $showType;
		$this->apiParas["showType"] = $showType;
	}
	public function getshowType() {
		return $this->showType;
	}

	public function setbizType($bizType) {
		$this->bizType = $bizType;
		$this->apiParas["bizType"] = $bizType;
	}
	public function getbizType() {
		return $this->bizType;
	}

	public function setprovince($province) {
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}
	public function getprovince() {
		return $this->province;
	}

	public function setcity($city) {
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}
	public function getcity() {
		return $this->city;
	}

	public function setprice($price) {
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}
	public function getprice() {
		return $this->price;
	}

	public function setqualityLever($qualityLever) {
		$this->qualityLever = $qualityLever;
		$this->apiParas["qualityLever"] = $qualityLever;
	}
	public function getqualityLever() {
		return $this->qualityLever;
	}

	public function setquantityBegin($quantityBegin) {
		$this->quantityBegin = $quantityBegin;
		$this->apiParas["quantityBegin"] = $quantityBegin;
	}
	public function getquantityBegin() {
		return $this->quantityBegin;
	}

	public function setonline($online) {
		$this->online = $online;
		$this->apiParas["online"] = $online;
	}
	public function getonline() {
		return $this->online;
	}

	public function setgroupIds($groupIds) {
		$this->groupIds = $groupIds;
		$this->apiParas["groupIds"] = $groupIds;
	}
	public function getgroupIds() {
		return $this->groupIds;
	}

	public function setstatus($status) {
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}
	public function getstatus() {
		return $this->status;
	}

	public function check() {

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>