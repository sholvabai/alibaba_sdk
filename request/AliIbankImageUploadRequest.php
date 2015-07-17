<?php

class AliIbankImageUploadRequest {

	private $albumId;

	private $name;

	private $description;

	private $drawTxt;

	private $imageBytes;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setalbumId($albumId) {
		$this->albumId = $albumId;
		$this->apiParas["albumId"] = $albumId;
	}

	public function getalbumId() {
		return $this->albumId;
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

	public function setdrawTxt($drawTxt) {
		$this->drawTxt = $drawTxt;
		$this->apiParas["drawTxt"] = $drawTxt;
	}

	public function getdrawTxt() {
		return $this->drawTxt;
	}

	public function setimageBytes($imageBytes) {
		$this->imageBytes = $imageBytes;
		$this->apiParas["imageBytes"] = $imageBytes;
	}

	public function getimageBytes() {
		return $this->imageBytes;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->albumId, "albumId");
		RequestCheckUtil::checkNotNull($this->name, "name");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>