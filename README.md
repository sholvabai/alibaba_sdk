alisdk
======
2015-07-17 修复AliClient AliMemberGetReques;


1688 开放平台 php 版SDK
目前仅 AliMemberGetReques 经过测试。

**Demo for php:**
 
    require_once ('/alisdk/AliClient.php');
    require_once ('/alisdk/RequestCheckUtil.php');
    require_once ('/alisdk/request/AliMemberGetRequest.php');

    //获取用户信息
    function companyAction(){
        $session =  $this->getSession();
        $client = new AliClient();
        $client->appkey = "you appkey";
        $client->secretKey = "you secretKey";
        $client->api = "member.get";
         
        $request = new AliMemberGetRequest();
        $request->setMemberId($session->memberId);
        
        $rsp =  $client->execute($request,$session->access_token);
        return  $rsp;
    }
