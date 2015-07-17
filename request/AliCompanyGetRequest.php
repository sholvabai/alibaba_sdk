<?php
/**
 * Ali API: company.get request
 *
 * User: 伯仁 (爱用)
 * email: liuzailin@loveapp.cn
 * Date: 2014-10-30
 */
class AliCompanyGetRequest {
	/**
	 * 会员ID
	 */
	private $memberId;

	/**
	 * 自定义返回字段。在companInfo结构中选择需要返回的字段名称，半角逗号分隔
	 */
	private $Fields;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setMemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParas["memberId"] = $memberId;
	}

	public function getMemberId() {
		return $this->memberId;
	}

	public function setFields($Fields) {
		$this->Fields = $Fields;
		$this->apiParas["returnFields"] = $Fields;
	}

	public function getFields() {
		return $this->Fields;
	}

	public function check() {
		RequestCheckUtil::checkNotNull($this->memberId, "memberId");
	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}
?>