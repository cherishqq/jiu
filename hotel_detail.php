<?php
  

?>

<!DOCTYPE html >
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
<title>酒店预订</title>
<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css"/>
<script  src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="javascript" src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script> -->
</head>
<body>

	 
	 <div class="list info">
	 	<span class="hTitle">☞厦门千禧海景大酒楼</span>
	 	<ul>
	 		<li>星级:</li>
	 		<li>地址：</li>
	 		<li style="color: #09f">简述:</li>
	 	</ul>
	 </div>
	 
	<div class="list info">
    <span class="hTitle" style="background-color: #3CF;">☎ 客房预订</span>
	    <ul>
        <li><h2>素雅商务房</h2></li><li>宽带：&nbsp;</li><li></li><li>门店：￥228 (天), 现订：￥<em>138</em> (天)</li><li id="ding_484376">
	<a class="button ding d9d" onclick="book(484376)">预订</a>
</li><li class="book" id="book_484376" style="display: none;"><p class="h">价格明细:</p><p>2013-04-24 - 138元</p><p class="h">合计房费: 138元（前台支付费用）</p>
<p><label>房间数量</label><input id="fjsl_484376" type="text" value="1"></p>
<p><label>入住人名</label><input id="rzrm_484376" type="text"></p>
<p><label>手机号码</label><input id="sjhm_484376" type="text"></p>
<p><label>入住日期</label> <select id="rz_484376" selectedindex="0"><option value="2013-04-24">2013年04月24日（星期三）</option><option value="2013-04-25">2013年04月25日（星期四）</option><option value="2013-04-26">2013年04月26日（星期五）</option><option value="2013-04-27">2013年04月27日（星期六）</option><option value="2013-04-28">2013年04月28日（星期日）</option><option value="2013-04-29">2013年04月29日（星期一）</option><option value="2013-04-30">2013年04月30日（星期二）</option><option value="2013-05-01">2013年05月01日（星期三）</option><option value="2013-05-02">2013年05月02日（星期四）</option><option value="2013-05-03">2013年05月03日（星期五）</option></select></p><p><label>离开日期</label> <select id="lk_484376" selectedindex="0"><option value="2013-04-25">2013年04月25日（星期四）</option><option value="2013-04-26">2013年04月26日（星期五）</option><option value="2013-04-27">2013年04月27日（星期六）</option><option value="2013-04-28">2013年04月28日（星期日）</option><option value="2013-04-29">2013年04月29日（星期一）</option><option value="2013-04-30">2013年04月30日（星期二）</option><option value="2013-05-01">2013年05月01日（星期三）</option><option value="2013-05-02">2013年05月02日（星期四）</option><option value="2013-05-03">2013年05月03日（星期五）</option><option value="2013-05-04">2013年05月04日（星期六）</option></select></p>
<p><label>最晚到店</label>
<select id="zwdd_484376" selectedindex="0">
<option value="8:00">早上8:00之前</option>
<option value="10:00">10:00</option>
<option value="12:00">12:00</option>
<option value="14:00">14:00</option>
<option value="16:00" selected="">16:00</option>
<option value="18:00">18:00</option>
<option value="20:00">20:00</option>
<option value="22:00">22:00</option>
<option value="24:00">00:00</option>
<option value="26:00">晚上00:00之后</option>
</select></p>

<p id="tijiao_484376">
<a class="button ding d9d" onclick="submitBook(484376,222039)">提交订单</a>
</p>
</li><hr>    </ul>
	    <ul>
        <li><h2>超大亲子房</h2></li><li>宽带：&nbsp;</li><li></li><li>门店：￥328 (天), 现订：￥<em>198</em> (天)</li><li id="ding_484377">
	<a class="button ding d9d" onclick="book(484377)">预订</a>
</li><li class="book" id="book_484377" style="display: none;"><p class="h">价格明细:</p><p>2013-04-24 - 198元</p><p class="h">合计房费: 198元（前台支付费用）</p>
<p><label>房间数量</label><input id="fjsl_484377" type="text" value="1"></p>
<p><label>入住人名</label><input id="rzrm_484377" type="text"></p>
<p><label>手机号码</label><input id="sjhm_484377" type="text"></p>
<p><label>入住日期</label> <select id="rz_484377" selectedindex="0"><option value="2013-04-24">2013年04月24日（星期三）</option><option value="2013-04-25">2013年04月25日（星期四）</option><option value="2013-04-26">2013年04月26日（星期五）</option><option value="2013-04-27">2013年04月27日（星期六）</option><option value="2013-04-28">2013年04月28日（星期日）</option><option value="2013-04-29">2013年04月29日（星期一）</option><option value="2013-04-30">2013年04月30日（星期二）</option><option value="2013-05-01">2013年05月01日（星期三）</option><option value="2013-05-02">2013年05月02日（星期四）</option><option value="2013-05-03">2013年05月03日（星期五）</option></select></p><p><label>离开日期</label> <select id="lk_484377" selectedindex="0"><option value="2013-04-25">2013年04月25日（星期四）</option><option value="2013-04-26">2013年04月26日（星期五）</option><option value="2013-04-27">2013年04月27日（星期六）</option><option value="2013-04-28">2013年04月28日（星期日）</option><option value="2013-04-29">2013年04月29日（星期一）</option><option value="2013-04-30">2013年04月30日（星期二）</option><option value="2013-05-01">2013年05月01日（星期三）</option><option value="2013-05-02">2013年05月02日（星期四）</option><option value="2013-05-03">2013年05月03日（星期五）</option><option value="2013-05-04">2013年05月04日（星期六）</option></select></p>
<p><label>最晚到店</label>
<select id="zwdd_484377" selectedindex="0">
<option value="8:00">早上8:00之前</option>
<option value="10:00">10:00</option>
<option value="12:00">12:00</option>
<option value="14:00">14:00</option>
<option value="16:00" selected="">16:00</option>
<option value="18:00">18:00</option>
<option value="20:00">20:00</option>
<option value="22:00">22:00</option>
<option value="24:00">00:00</option>
<option value="26:00">晚上00:00之后</option>
</select></p>

<p id="tijiao_484377">
<a class="button ding d9d" onclick="submitBook(484377,222039)">提交订单</a>
</p>
</li><hr>    </ul>
	    <ul>
        <li><h2>清新大床房</h2></li><li>宽带：&nbsp;</li><li></li><li>门店：￥208 (天), 现订：￥<em>128</em> (天)</li><li><a class="button ding">订完</a></li>    </ul>
	</div>
	
<!--  酒店图片 -->

	<div class="list info tu">
    <span class="hTitle">♤ 酒店图片</span>
    <ul>
	    	<li><img src="http://p.zhuna.cn/Hotel_Images/109732/160x120_d19343dd-b4b1-4aed-a37b-d39fda2b64c0.jpg"></li>
        <li>（大堂）</li>
        	<li><img src="http://p.zhuna.cn/Hotel_Images/109732/160x120_51855ab5-3e08-4628-9b4d-4b0deb5958a3.jpg"></li>
        <li>（清新大床房）</li>
        	<li><img src="http://p.zhuna.cn/Hotel_Images/109732/160x120_7953432e-1724-4aba-a256-b060bd1d4a6e.jpg"></li>
        <li>（清新大床房）</li>
        	<li><img src="http://p.zhuna.cn/Hotel_Images/109732/160x120_d83840c5-572c-49d9-bfc6-4d13d17d7d13.jpg"></li>
        <li>（酒店外观）</li>
        	<li><img src="http://p.zhuna.cn/Hotel_Images/109732/160x120_3316922f-08bd-435b-a39c-e9bd049878b8.jpg"></li>
        <li>（前台）</li>
        </ul>
</div>

<div class="list info tu">
    <span class="hTitle">♀ 酒店地图</span>
    <ul>
        <li><img src="http://api.map.baidu.com/staticimage?width=200&amp;height=180&amp;center=118.16379923059,24.449410130474&amp;markers=118.16379923059,24.449410130474&amp;zoom=14"></li>
    </ul>
</div>

<div class="list info zhoubian">
    <span class="hTitle">∷ 酒店周边</span>
    <ul>
	    	<li><span>（距离 0.04 公里）</span>龙岩客家小吃（厦门国家会计学院东）<br><hr></li>
        	<li><span>（距离 0.06 公里）</span>厦门海边小村家庭旅馆<br><hr></li>
        	<li><span>（距离 0.06 公里）</span>厦门缘来客栈<br><hr></li>
        	<li><span>（距离 0.06 公里）</span>厦门榕树下咖啡旅馆<br><hr></li>
        	<li><span>（距离 0.10 公里）</span>厦门因为爱情客栈<br><hr></li>
        	<li><span>（距离 0.10 公里）</span>黄厝路<br><hr></li>
        	<li><span>（距离 0.13 公里）</span>厦门日出印象客栈<br><hr></li>
        	<li><span>（距离 0.15 公里）</span>黄厝幼儿园<br><hr></li>
        	<li><span>（距离 0.16 公里）</span>太阳湾海滨游乐场(黄厝店)<br><hr></li>
        	<li><span>（距离 0.16 公里）</span>海之恋游乐园<br><hr></li>
        	<li><span>（距离 0.16 公里）</span>佳兴旺超市<br><hr></li>
        	<li><span>（距离 0.17 公里）</span>朗纳中专<br><hr></li>
        	<li><span>（距离 0.18 公里）</span>思明区环岛路黄厝村88号<br><hr></li>
        	<li><span>（距离 0.18 公里）</span>黄厝茂后162号<br><hr></li>
        	<li><span>（距离 0.26 公里）</span>台湾土鸡城<br><hr></li>
        	<li><span>（距离 0.26 公里）</span>厦门驴友之家家庭旅馆<br><hr></li>
        	<li><span>（距离 0.32 公里）</span>好吉利餐厅<br><hr></li>
        	<li><span>（距离 0.32 公里）</span>黄厝海滨站<br><hr></li>
        	<li><span>（距离 0.34 公里）</span>厦门依山傍海客栈<br><hr></li>
        	<li><span>（距离 0.34 公里）</span>云顶庄园<br><hr></li>
        	<li><span>（距离 0.38 公里）</span>厦门市华新印刷包装有限公司<br><hr></li>
        	<li><span>（距离 0.40 公里）</span>辉峰贸易公司<br><hr></li>
        	<li><span>（距离 0.41 公里）</span>茂后村委会<br><hr></li>
        	<li><span>（距离 0.48 公里）</span>黄厝浴场<br><hr></li>
        	<li><span>（距离 0.58 公里）</span>厦门玩月坡<br><hr></li>
        	<li><span>（距离 0.59 公里）</span>优耐特塑钢公司<br><hr></li>
        	<li><span>（距离 0.63 公里）</span>欣德汽车驾驶培训公司<br><hr></li>
        	<li><span>（距离 0.72 公里）</span>海悦山庄<br><hr></li>
        </ul>
</div>
	
	
</body>
</html>