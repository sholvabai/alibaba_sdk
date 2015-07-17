<?php

class AliCategorySearchRequest {
	private $keyWord;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setkeyWord($keyWord) {
		$this->keyWord = $keyWord;
		$this->apiParas["keyWord"] = $keyWord;
	}

	public function getkeyWord() {
		return $this->keyWord;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->keyWord, "keyWord");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;

	}

}

?>