<?php

class AliAcrmCustomerAddRequest {
    private $buyerMemberId;
    private $name;
    private $phone;
    private $email;
    private $categoryName;
    private $province;
    private $city;
    private $relation;
    private $groupingIds;
    private $comments;
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
    public function setname($name) {
        $this->name = $name;
        $this->apiParas["name"] = $name;
    }
    public function getname() {
        return $this->name;
    }
    public function setphone($phone) {
        $this->phone = $phone;
        $this->apiParas["phone"] = $phone;
    }
    public function getphone() {
        return $this->phone;
    }
    public function setemail($email) {
        $this->email = $email;
        $this->apiParas["email"] = $email;
    }
    public function getemail() {
        return $this->email;
    }
    public function setcategoryName($categoryName) {
        $this->categoryName = $categoryName;
        $this->apiParas["categoryName"] = $categoryName;
    }
    public function getcategoryName() {
        return $this->categoryName;
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
    public function setrelation($relation) {
        $this->relation = $relation;
        $this->apiParas["relation"] = $relation;
    }
    public function getrelation() {
        return $this->relation;
    }
    public function setgroupingIds($groupingIds) {
        $this->groupingIds = $groupingIds;
        $this->apiParas["groupingIds"] = $groupingIds;
    }
    public function getgroupingIds() {
        return $this->groupingIds;
    }
    public function setcomments($comments) {
        $this->comments = $comments;
        $this->apiParas["comments"] = $comments;
    }
    public function getcomments() {
        return $this->comments;
    }
    public function check() {
        RequestCheckUtil::checkNotNull($this->buyerMemberId, "buyerMemberId");
        RequestCheckUtil::checkNotNull($this->relation, "relation");
    }
    public function putOtherTextParam($key, $value) {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
?>        
                    
