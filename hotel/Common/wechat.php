<?php
header("content-Type: text/html; charset=utf-8");
/*
    File: wechat.php
    Author: felix021@gmail.com
    Date: 2012.11.30
    Usage: api封装
    Comment: 详见readme.txt
 */

class Wechat
{
    //似乎没什么用，放着用来自动完成吧。
    static $req_keys = array( "Content", "CreateTime", "FromUserName", "Label", 
            "Location_X", "Location_Y", "MsgType", "PicUrl", "Scale", "ToUserName", "MusicUrl","HQMusicUrl","Event","EventKey");
    public $token;
    public $request = array();

    protected $funcflag = false;
    protected $debug = false;

    public function __construct($token, $debug = false)
    {
        $this->token = $token;
        $this->debug = $debug;
    }

    public function get_msg_type()
    {
        return strtolower($this->request['MsgType']);
    }
	
    public function get_event_type()
    {
        return strtolower($this->request['Event']);
    }
	
	public function get_event_key()
    {
        return strtolower($this->request['EventKey']);
    }
	
		public function get_creattime()
    {
        return strtolower($this->request['CreateTime']);
    }
	
	
	public function valid()
    {
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
        	echo $echoStr;
        	exit;
        }
    }

    public function set_funcflag()
    {
        $this->funcflag = true;
    }

    public function replyText($message)
    {
        $textTpl = <<<eot
<xml>
    <ToUserName><![CDATA[%s]]></ToUserName>
    <FromUserName><![CDATA[%s]]></FromUserName>
    <CreateTime>%s</CreateTime>
    <MsgType><![CDATA[%s]]></MsgType>
    <Content><![CDATA[%s]]></Content>
    <FuncFlag>%d</FuncFlag>
</xml>
eot;
        $req = $this->request;
        return sprintf($textTpl, $req['FromUserName'], $req['ToUserName'],
                time(), 'text', $message, $this->funcflag ? 1 : 0);

    }
    
 public function replyNews($arr_item)
    {
        $itemTpl = <<<eot
        <item>
            <Title><![CDATA[%s]]></Title>
            <Discription><![CDATA[%s]]></Discription>
            <PicUrl><![CDATA[%s]]></PicUrl> 
            <Url><![CDATA[%s]]></Url>
        </item>

eot;
        $real_arr_item = $arr_item;
        if (isset($arr_item['title']))
            $real_arr_item = array($arr_item); 

        $nr = count($real_arr_item);
        $item_str = "";
        foreach ($real_arr_item as $item)
            $item_str .= sprintf($itemTpl, $item['title'], $item['description'],
                    $item['pic'], $item['url']);

        $time = time();
        $fun = $this->funcflag ? 1 : 0;

        return <<<eot
<xml>
    <ToUserName><![CDATA[{$this->request['FromUserName']}]]></ToUserName>
    <FromUserName><![CDATA[{$this->request['ToUserName']}]]></FromUserName>
    <CreateTime>{$time}</CreateTime>
    <MsgType><![CDATA[news]]></MsgType>
    <Content><![CDATA[]]></Content>
    <ArticleCount>{$nr}</ArticleCount>
    <Articles>
$item_str
    </Articles>
    <FuncFlag>{$fun}</FuncFlag>
</xml> 
eot;
    }
    public function replyMusic($arr_item)
    {
        $itemTpl = <<<eot
            <Title><![CDATA[%s]]></Title>
            <Description><![CDATA[%s]]></Description>
            <MusicUrl><![CDATA[%s]]></MusicUrl> 
            <HQMusicUrl><![CDATA[%s]]></HQMusicUrl>      

eot;
        $real_arr_item = $arr_item;
        if (isset($arr_item['title']))
            $real_arr_item = array($arr_item); 
      $item_str = "";
        foreach ($real_arr_item as $item)
            $item_str .= sprintf($itemTpl, $item['title'], $item['description'],
            $item['murl'], $item['hqurl']);

        $time = time();
        $fun = $this->funcflag ? 1 : 0;

        return <<<eot
<xml>
    <ToUserName><![CDATA[{$this->request['FromUserName']}]]></ToUserName>
    <FromUserName><![CDATA[{$this->request['ToUserName']}]]></FromUserName>
    <CreateTime>{$time}</CreateTime>
    <MsgType><![CDATA[music]]></MsgType>
    <Music>
{$item_str}
    </Music>
    <FuncFlag>{$fun}</FuncFlag>
</xml> 
eot;
    }

    public function reply($callback)
    {
		//get post data, May be due to the different environments
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
                
           
        if ($this->debug)
          //     file_put_contents("request.txt", $postStr);

//         if(empty($postStr) || !$this->checkSignature())  by derek
        if(empty($postStr))
            die("该程序是微信接口程序,请在公众平台配置本页地址为url后测试!");

        $this->request = (array)simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);

        $arg = call_user_func($callback, $this->request, $this);

        if (!is_array($arg))
        {
         $ret = $this->replyText($arg);
        }      
        elseif(array_key_exists("murl",$arg))
        {
            $ret = $this->replyMusic($arg);
        }else{
        
         $ret = $this->replyNews($arg);
        }

        if ($this->debug)
            file_put_contents("response.txt", $ret);
        echo $ret;
    }

	private function checkSignature()
	{
        $args = array("signature", "timestamp", "nonce");
        foreach ($args as $arg)
            if (!isset($_GET[$arg]))
                return false;

        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        		
		$tmpArr = array($this->token, $timestamp, $nonce);
		sort($tmpArr);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
	
	public function biaoqing($content)
    {
        if(preg_match("/\/::\-O|\/:xx|\/:\-\-b|\/::X|\/:no|\/::~|\/::@|\/::\(|\/::Q|\/::T|\/::d|\/::!|\/::L|\/::\-S|\/:,@@|\/::8|\/:,@!|\/:!!!|\/:dig|\/:pd|\/:pig|\/:fade|\/:break|\/:li|\/:bome|\/:kn|\/:shit/",$content)){

        $content = "不开心";

        }
        elseif(preg_match("/\/::\)/",$content)){

        $content = "微笑";

        }
        elseif(preg_match("/\/:weak|\/:<@|\/:@>|\/:wipe|\/:@@|\/:bad|\/:shake/",$content)){

        $content = "不爽";

        }
        elseif(preg_match("/\/:moon|\/::Z|\/:\|\-\)|\/:bye|\/:beer|\/:\<W\>|\/::g/",$content)){

        $content = "再见";

        }
        elseif(preg_match("/\/:eat|\/:coffee/",$content)){

        $content = "吃饭";

        }
        elseif(preg_match("/\/:sun|\/:hiphot|\/:footb|\/:oo|\/:basketb|\/:jump|\/:circle|\/:skip|\/:<&|\/:&>/",$content)){

        $content = "运动";

        }
        elseif(preg_match("/\/:,@f|\/:heart|\/:showlove|\/:cake|\/:gift|\/:strong|\/::>|\/:gift|\/::B|\/:handclap|\/::\*|\/:rose|\/:kiss|\/:<L>|\/:love|\/:ok|\/:lvu|\/:jj|\/:@\)|\/:share|\/:hug/",$content)){

        $content = "喜欢";

        }
        elseif(preg_match("/\/::\+|\/:,@o|\/:X-\)|\/:v|\/:turn|\/:oY|\/:ladybug|\/:,@x|\/::,@|\/:8-\)|\/:#-0|\/:kotow|\/:\<O\>|\/:@x|\/:8\*|\/:P-\(|\/:>-\||\/:B-\)|\/:&-\(|\/:\?|\/::\||\/::<|\/::$|\/::-'\(|\/::-\||\/::P|\/::D|\/::O|\/:,@-D|\/:,@P/",$content)){

        $content = "夸张";

        }
	return $content;
    }
}

?>
