<?php

class AliIbankImageDeleteByIdsRequest {
	private $imageIds;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setimageIds($imageIds) {
		$this->imageIds = $imageIds;
		$this->apiParas["imageIds"] = $imageIds;
	}

	public function getalbumId() {
		return $this->imageIds;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->imageIds, "imageIds");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

?>