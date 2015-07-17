<?php
/**
 * Ali API: company.get request
 *
 * User: 伯仁 (爱用)
 * email: liuzailin@loveapp.cn
 * Date: 2014-10-30
 */
class AliOfferGetAllOfferListRequest {
	/**
	 * 目前只支持SALE
	 */
	private $type;
	/**
	 * 商品发布类目ID
	 */
	private $categoryId;
	/**
	 * 卖家自定义的商品分类ID，多个之间用“,”分隔
	 */
	private $groupIds;
	/**
	 * 页码。取值范围:大于零的整数;默认值为1，即返
	 */
	private $page;
	/**
	 * 返回offer列表结果集分页条数。取值范围:大于零
	 */
	private $pageSize;
	/**
	 * 格式:yyyy-MM-dd HH:mm:ss；1、如果传了时间戳参数，则按增量返回，即返回按指定获取条件且对应商品信息的最近更新时间(GMTModified)晚于该时间戳的商品列表信息。2、如果没有传时间戳参数，则取所有的满足条件的商品信息；
	 */
	private $timeStamp;
	/**
	 * 当前支持:gmtexpire:asc|desc,gmt_modified:asc|desc
	 */
	private $orderBy;
	/**
	 *
	 */
	private $site;
	/**
	 * 自定义返回字段，字段为offerDetailInfo子集。多个字段以半角','分隔。若此字段为空，则返回offer数组信息为空;其中如下参数无法通过该API获得：amountOnSale、details、detailsUrl、saledCount、skuArray、termOfferProcess、tradingType
	 */
	private $returnFields;

	private $apiParas = array();

	public function getApiParas() {
		return $this->apiParas;
	}

	public function setType($type) {
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType() {
		return $this->type;
	}

	public function setCategoryId($categoryId) {
		$this->categoryId = $categoryId;
		$this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId() {
		return $this->categoryId;
	}

	public function setGroupIds($groupIds) {
		$this->groupIds = $groupIds;
		$this->apiParas["groupIds"] = $groupIds;
	}
	public function getGroupIds() {
		return $this->groupIds;
	}

	public function setPage($page) {
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}
	public function getPage() {
		return $this->page;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setTimeStamp($timeStamp) {
		$this->timeStamp = $timeStamp;
		$this->apiParas["timeStamp"] = $timeStamp;
	}

	public function getTimeStamp() {
		return $this->timeStamp;
	}

	public function setOrderBy($orderBy) {
		$this->orderBy = $orderBy;
		$this->apiParas["orderBy"] = $orderBy;
	}
	public function getOrderBy() {
		return $this->orderBy;
	}

	public function setSite($site) {
		$this->site = $site;
		$this->apiParas['site'] = $site;
	}

	public function getSite() {
		return $this->site;
	}

	public function setFields($returnFields) {
		$this->returnFields = $returnFields;
		$this->apiParas["returnFields"] = $returnFields;
	}
	public function getFields() {
		return $this->returnFields;
	}

	/**
	 * 检查必传参数
	 */
	public function check() {
		RequestCheckUtil::checkNotNull($this->type, "type");
		RequestCheckUtil::checkNotNull($this->returnFields, "returnFields");

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

}
?>