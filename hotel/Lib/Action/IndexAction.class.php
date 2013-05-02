<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	
 	$w = new Wechat(TOKEN, DEBUG);
 	echo $w;
//  	$this->show($w);
 	Log::write("呵呵");
 	dump($w);
    	//首次验证，验证过以后可以删掉
/*     	if (isset($_GET['echostr'])) {
    		$w->valid();
    		exit();
    	} */
    	
    	//回复用户
    	$w->reply("reply_cb");
	$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    
    public function add(){
    	import("@.ORG.snoopy");
//     	import("@.ORG.WeChatClient");
    	import("@.ORG.wechatext");
//     	$wechat = new WeChatClient();

    	$options = array(
    			'account'=>'ilovecode@163.com',
    			'password'=>'eiirdfe',
    			'datapath'=>'./data/cookie_',
    			'debug'=>true,
    			'logcallback'=>'logdebug'
    	);
    	$wechat = new Wechatext($options);
    	
    	var_dump($wechat->checkValid());
    	
    	if ($wechat->checkValid()) {
    		// 获取用户信息
    		$data = $wechat->getInfo('5596925');
    		// 主动发消息
    		//$wechat->send('3974255','hello '.time());
    		var_dump($data);
    	}

//     	$data = $wechat->getInfo('2445031161');
//     	var_dump($data);
// 		$wechat->login();
// 		$wechat->send("", "你好");
   
    }
    
    
    
}