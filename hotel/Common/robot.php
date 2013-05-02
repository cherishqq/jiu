<?php
/*
    File: index.php
    Author: 管理员
    Date: 2013.04.04
    Usage: 小九机器人微信接口
    论坛微信QQ群: 39161950
	小九官网： www.xiaojo.com
	微信论坛： www.weixen.com
 */
header("content-Type: text/html; charset=utf-8");
require_once(dirname(__FILE__) . "./wechat.php");

define("DEBUG", true);

//下面为需要配置的选项
define("TOKEN", "weixin");
define("YOURNICK", "mm偶");//填写自定义机器人名称，不填则默认叫小九，也可在后台添加替换
//在这里定义你的初次关注后的欢迎语
define("WELCOME", "hi~您可以直接输入：\nNBA、笑话、点歌、天气、翻译、美食、快递、火车、短信、经典、新闻、百科、股票、调教、留言、冷笑话、空气质量、今天几号、我想你猜，也可以发送图片喔，\n更多功能开发中……");
define("MOREN", "抱歉，我真的不知道肿么回答了，您可以用问*答*来教我");//默认回复设置
define("FLAG", "@");//星标标识，默认为 @,用户对话里包含此标识则设置为星标，用于留言
//这里为你的私有库账号
define("xiaojiudb","cherishqq");
define("xiaojiupw","eiirdfe");
//配置结束


//后续必要的处理...
/* TODO */
//exit();

function reply_cb($request, $w)//消息回复主函数
{
    $to = $request['ToUserName'];
    $from = $request['FromUserName'];
	$time = $w->get_creattime();
    if ($w->get_msg_type() == "location") {//大众接口
	$lacation = "x@".(string)$request['Location_X']."@".(string)$request['Location_Y'];
	$lacation = urlencode(str_replace('\.','\\\.',$lacation));
	$dp = new DianPing((string)$request['Location_X'],(string)$request['Location_Y']);
	return $dp->find_food();
	$lacation = urldecode(xiaojo($lacation,$from,$to));
	return  $lacation;
    }
    else if ($w->get_msg_type() == "image") { //返回图片地址
    $PicUrl = $request['PicUrl'];
	$pic = urldecode(xiaojo("&".$PicUrl,$from,$to));
	//$w->set_funcflag();
    return $pic;
    }else if ($w->get_msg_type() == "voice") {//用户发语音时回复语音或音乐
    
    return array(
        "title" =>  "你好",
        "description" =>  "亲爱的主人",           
        "murl" =>  "http://weixen-file.stor.sinaapp.com/b/xiaojo.mp3",
		"hqurl" =>  "http://weixen-file.stor.sinaapp.com/b/xiaojo.mp3",
    );
    }else if ($w->get_msg_type() == "event") { //事件检测
    if ($w->get_event_type() == "subscribe"){
	//urldecode(xiaojo($lacation,$from,$to));		
    return WELCOME ;
	}elseif($w->get_event_type() == "unsubscribe")
    {
	$unsub = urldecode(xiaojo("subscribe",$from,$to));
	return $unsub;
	}elseif($w->get_event_type() == "click")
	{
	 $menukey = $w->get_event_key();
	 $menu = urldecode(xiaojo($menukey,$from,$to));
	 $menu = media($menu);
	 return $menu;
	}else{
	$menukey = $w->get_event_key();
	return $menukey;
	}
    }
    $content = trim($request['Content']);
   	$firsttime = $content;
	if ($content !== INFO) //发纯文本
    {
        //$w->set_funcflag(); //如果有必要的话，加星标，方便在web处理
        if(!empty($content)){
        $content = $w->biaoqing($content); //表情处理
        if(strstr($content,FLAG)){ //如果有星标的标记则设为星标(用于留言)
		$w->set_funcflag();
		}
		$content = $content."^".$time;
        $content = urldecode(xiaojo($content,$from,$to));
		if(YOURNICK){
		$content = str_replace('小九',YOURNICK,$content);
		}
        if($content=="")
		{
		$content = MOREN ;
		}
        $content = media($content);
        return  $content;
        }
        else
        return "请说点什么...";
    }else{
	return  MOREN;
	}
    
}
 function media($content) //多媒体转换
    {
    if(strstr($content,'murl')){//音乐
    $a=array();
    foreach (explode('#',$content) as $content){
    list($k,$v)=explode('|',$content);
    $a[$k]=$v;
    }
    $content = $a;
    }              
    elseif(strstr($content,'pic')){//多图文回复
    $a=array();
    $b=array();
    $c=array();
    $n=0;
    foreach (explode('@',$content) as $b[$n]){
    foreach (explode('#',$b[$n]) as $content){
    list($k,$v)=explode('|',$content);
    $a[$k]=$v;
    }
    $c[$n] = $a;
    $n++;
    }
    $content = $c;
    }
	return $content;
	}
function xiaojo($yuanwen,$from,$to) //小九接口函数，该函数可通用于其他程序
 {
   global $yourdb,$yourpw;
   

   
   $yuanwen = get_utf8_string($yuanwen);
   $yuanwen=urlencode($yuanwen);
   $yourdb=urlencode(xiaojiudb);
   $yourpw = urlencode(xiaojiupw);
   dump($yourdb);
   dump($yourpw);
   
   $from=urlencode(xiaojiupw);
   $to=urlencode($to);
   $doc = new DOMDocument();
   $doc->load("http://www.xiaojo.com/api3.php?chat=".$yuanwen."&db=".$yourdb."&pw=".$yourpw."&from=".$from."&to=".$to); //读取xml文件
   $youdaos = $doc->getElementsByTagName( "weixen" ); //取得humans标签的对象数组
foreach( $youdaos as $youdao )
{
   $paragraphs = $youdao->getElementsByTagName( "responce" ); //取得name的标签的对象数组
   $paragraph = $paragraphs->item(0)->nodeValue; //取得node中的值，如<name> </name>
   $paragraph=get_utf8_string($paragraph);
}

   return $paragraph;
 
}

function get_utf8_string($content) 
{    
	//  将一些字符转化成utf8格式   
	$encoding = mb_detect_encoding($content, array('ASCII','UTF-8','GB2312','GBK','BIG5'));  
	return  mb_convert_encoding($content, 'utf-8', $encoding);
}

?>
