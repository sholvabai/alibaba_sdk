<?php

class AliIbankImageGetRequest {
	private $imageId;

	private $apiParas = array();

	public function getapiParas() {
		return $this->apiParas;
	}

	public function setImageId($Id) {
		$this->imageId = $Id;
		$this->apiParas["imageId"] = $Id;
	}

	public function getImageId() {
		return $this->iamgeId;
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