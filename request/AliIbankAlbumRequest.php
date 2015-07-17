<?php

class AliIbankAlbumRequest {
	private $albumId;

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

	public function check() {
		RequestCheckUtil::checkNotNull($this->albumId, "albumId");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>