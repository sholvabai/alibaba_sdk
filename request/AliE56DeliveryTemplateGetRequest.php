<?php

class AliE56DeliveryTemplateGetRequest {
	private $templateId;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setTemplateId($templateId) {
		$this->templateId = $templateId;
		$this->apiParas["templateId"] = $templateId;
	}

	public function getTemplateId() {
		return $this->templateId;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->templateId, "templateId");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}

?>