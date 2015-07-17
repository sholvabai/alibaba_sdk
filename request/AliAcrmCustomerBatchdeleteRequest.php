<?php

class AliAcrmCustomerBatchdeleteRequest
{
    
    private $buyerMemberIds;
    
    private $apiParas = array();
    
    public function getApiParas()
    {
        return $this->apiParas;
    }
    
    public function setbuyerMemberIds($buyerMemberIds)
    {
        $this->buyerMemberIds             = $buyerMemberIds;
        $this->apiParas["buyerMemberIds"] = $buyerMemberIds;
    }
    
    public function getbuyerMemberIds()
    {
        return $this->buyerMemberIds;
    }
    
    
    
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->buyerMemberIds, "buyerMemberIds");
    }
    
    
    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
    
    
}



?>