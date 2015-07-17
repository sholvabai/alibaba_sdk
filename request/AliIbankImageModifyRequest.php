<?php

class AliIbankImageModifyRequest {

	private $imageId;

	private $name;

	private $description;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setimageId($imageId) {
		$this->imageId = $imageId;
		$this->apiParas["imageId"] = $imageId;
	}

	public function getimageId() {
		return $this->imageId;
	}

	public function setname($name) {
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getname() {
		return $this->name;
	}

	public function setdescription($description) {
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getdescription() {
		return $this->description;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->imageId, "imageId");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

?>