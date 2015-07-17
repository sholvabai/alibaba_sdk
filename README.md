alisdk
======
2015-07-17 修复AliClient AliMemberGetReques;


1688 开放平台 php 版SDK
由于时间仓促，有很多request类没有验证，欢迎大家使用并验证提交代码！
或直接把验证过的 request 类发到我的邮箱

**Demo for php:**
 

    require_once ('/alisdk/AliClient.php');
    require_once ('/alisdk/RequestCheckUtil.php');
    require_once ('/alisdk/request/AliCompanyGetRequest.php');
    //获取单个公司库信息
    function companyAction()
    {
         $session =  $this->getSession();
         $client = new AliClient();
         $client->appkey = "you appkey";
         $client->secretKey = "you secretKey";
         $client->api = "company.get";
         
         $request = new AliCompanyGetRequest();
         $request->setMemberId($session->memberId);
         $request->setFields("memberId,companyId,companyStatus,companyName,companyNameEN,account,productionService,companyCategoryInfo,foundedPlace");
        
         $rsp =  $client->execute($request,$session->access_token);
         echo  $rsp;
    }

 API URL: http://open.1688.com/doc/api/cn/api.htm?ns=cn.alibaba.open&n=company.get&v=1
