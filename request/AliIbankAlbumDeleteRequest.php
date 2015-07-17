<?php

class AliIbankAlbumDeleteRequest {

	private $albumIds;

	private $imageBytes;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setalbumIds($albumIds) {
		$this->albumIds = $albumIds;
		$this->apiParas["albumIds"] = $albumIds;
	}

	public function getalbumIds() {
		return $this->albumIds;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->albumIds, "albumIds");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>