<?php

?>

<!DOCTYPE html >
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport"
	content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
<title>酒店预订</title>
<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css"/>
<script  src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="javascript" src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script> -->

<script src="js/book.js"></script>
</head>
<body>


	<div class="list info">
		<span class="hTitle">☞厦门千禧海景大酒楼</span>
		<ul>
			<li>星级：五星级</li>
			<li>地址：厦门思明区镇海路 12-8 号</li>
			<li style="color: #09f">简述：宽敞舒适的客房、一流的设施设备、便利的地理位置、及素有厦门最好服务酒店之称的美誉，为您营造一个以您为中心的尊贵体验，带给您一个完美无憾、难忘愉快的经历</li>
		</ul>
	</div>

	<div class="list info">
		<span class="hTitle" style="background-color: #3CF;">☎ 客房预订</span>
		<ul>
			<li><h2>商务标准房</h2></li>
			<li>早餐：&nbsp;无</li>
			<li>床型：&nbsp;双人</li>
			<li>宽带：&nbsp;免费</li>
			<li></li>
			<li>门店：￥698 (天), 现订：￥<em>650</em> (天)
			</li>
			<li id="ding_484376"><a class="button ding d9d"
				onclick="book(484376)">预订</a></li>
			<li class="book" id="book_484376" style="display: none;"><p class="h">价格明细:</p>
				<p>2013-04-24 - 650元</p>
				<p class="h">合计房费: 650元（前台支付费用）</p>
				<p>
					<label>房间数量</label><input id="fjsl_484376" type="text" value="1">
				</p>
				<p>
					<label>入住人名</label><input id="rzrm_484376" type="text">
				</p>
				<p>
					<label>手机号码</label><input id="sjhm_484376" type="text">
				</p>
				<p>
					<label>入住日期</label> <select id="rz_484376" selectedindex="0"><option
							value="2013-04-24">2013年04月24日（星期三）</option>
						<option value="2013-04-25">2013年04月25日（星期四）</option>
						<option value="2013-04-26">2013年04月26日（星期五）</option>
						<option value="2013-04-27">2013年04月27日（星期六）</option>
						<option value="2013-04-28">2013年04月28日（星期日）</option>
						<option value="2013-04-29">2013年04月29日（星期一）</option>
						<option value="2013-04-30">2013年04月30日（星期二）</option>
						<option value="2013-05-01">2013年05月01日（星期三）</option>
						<option value="2013-05-02">2013年05月02日（星期四）</option>
						<option value="2013-05-03">2013年05月03日（星期五）</option></select>
				</p>
				<p>
					<label>离开日期</label> <select id="lk_484376" selectedindex="0"><option
							value="2013-04-25">2013年04月25日（星期四）</option>
						<option value="2013-04-26">2013年04月26日（星期五）</option>
						<option value="2013-04-27">2013年04月27日（星期六）</option>
						<option value="2013-04-28">2013年04月28日（星期日）</option>
						<option value="2013-04-29">2013年04月29日（星期一）</option>
						<option value="2013-04-30">2013年04月30日（星期二）</option>
						<option value="2013-05-01">2013年05月01日（星期三）</option>
						<option value="2013-05-02">2013年05月02日（星期四）</option>
						<option value="2013-05-03">2013年05月03日（星期五）</option>
						<option value="2013-05-04">2013年05月04日（星期六）</option></select>
				</p>
				<p>
					<label>最晚到店</label> <select id="zwdd_484376" selectedindex="0">
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
					</select>
				</p>

				<p id="tijiao_484376">
					<a class="button ding d9d" onclick="submitBook(484376,222039)">提交订单</a>
					<a class="button ding d9d" onclick="cancelBook(484376)">取消</a>
				</p></li>
			<hr>
		</ul>
		<ul>
			<li><h2>行政贵宾房</h2></li>
			<li>早餐：&nbsp;有</li>
			<li>床型：&nbsp;双人(1.2米)</li>
			<li>面积：&nbsp;30平方米</li>
			<li>宽带：&nbsp;免费</li>
			<li>卫浴：&nbsp;独立卫浴</li>
			<li>楼层：&nbsp;19-22层</li>
			<li></li>
			<li>门店：￥988 (天), 现订：￥<em>900</em> (天)
			</li>
			<li id="ding_484377"><a class="button ding d9d"
				onclick="book(484377)">预订</a></li>
			<li class="book" id="book_484377" style="display: none;"><p class="h">价格明细:</p>
				<p>2013-04-24 - 900元</p>
				<p class="h">合计房费: 900元（前台支付费用）</p>
				<p>
					<label>房间数量</label><input id="fjsl_484377" type="text" value="1">
				</p>
				<p>
					<label>入住人名</label><input id="rzrm_484377" type="text">
				</p>
				<p>
					<label>手机号码</label><input id="sjhm_484377" type="text">
				</p>
				<p>
					<label>入住日期</label> <select id="rz_484377" selectedindex="0"><option
							value="2013-04-24">2013年04月24日（星期三）</option>
						<option value="2013-04-25">2013年04月25日（星期四）</option>
						<option value="2013-04-26">2013年04月26日（星期五）</option>
						<option value="2013-04-27">2013年04月27日（星期六）</option>
						<option value="2013-04-28">2013年04月28日（星期日）</option>
						<option value="2013-04-29">2013年04月29日（星期一）</option>
						<option value="2013-04-30">2013年04月30日（星期二）</option>
						<option value="2013-05-01">2013年05月01日（星期三）</option>
						<option value="2013-05-02">2013年05月02日（星期四）</option>
						<option value="2013-05-03">2013年05月03日（星期五）</option></select>
				</p>
				<p>
					<label>离开日期</label> <select id="lk_484377" selectedindex="0"><option
							value="2013-04-25">2013年04月25日（星期四）</option>
						<option value="2013-04-26">2013年04月26日（星期五）</option>
						<option value="2013-04-27">2013年04月27日（星期六）</option>
						<option value="2013-04-28">2013年04月28日（星期日）</option>
						<option value="2013-04-29">2013年04月29日（星期一）</option>
						<option value="2013-04-30">2013年04月30日（星期二）</option>
						<option value="2013-05-01">2013年05月01日（星期三）</option>
						<option value="2013-05-02">2013年05月02日（星期四）</option>
						<option value="2013-05-03">2013年05月03日（星期五）</option>
						<option value="2013-05-04">2013年05月04日（星期六）</option></select>
				</p>
				<p>
					<label>最晚到店</label> <select id="zwdd_484377" selectedindex="0">
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
					</select>
				</p>

				<p id="tijiao_484377">
					<a class="button ding d9d" onclick="submitBook(484377,222039)">提交订单</a>
					<a class="button ding d9d" onclick="cancelBook(484377)">取消</a>
				</p></li>
			<hr>
		</ul>
		<ul>
			<li><h2>豪华套房</h2></li>
			<li>早餐：&nbsp;双份</li>
			<li>床型：&nbsp;大床(2.0米)</li>
			<li>面积：&nbsp;60平方米</li>
			<li>宽带：&nbsp;免费</li>
			<li>卫浴：&nbsp;独立卫浴</li>
			<li>楼层：&nbsp;17-22层</li>
			<li></li>
			<li>门店：￥1488 (天), 现订：￥<em>1400</em> (天)
			</li>
			<li id="ding_484378"><a class="button ding d9d"
				onclick="book(484378)">预订</a></li>
			<li class="book" id="book_484378" style="display: none;"><p class="h">价格明细:</p>
				<p>2013-04-24 - 1400元</p>
				<p class="h">合计房费: 1400元（前台支付费用）</p>
				<p>
					<label>房间数量</label><input id="fjsl_484378" type="text" value="1">
				</p>
				<p>
					<label>入住人名</label><input id="rzrm_484378" type="text">
				</p>
				<p>
					<label>手机号码</label><input id="sjhm_484378" type="text">
				</p>
				<p>
					<label>入住日期</label> <select id="rz_484378" selectedindex="0"><option
							value="2013-04-24">2013年04月24日（星期三）</option>
						<option value="2013-04-25">2013年04月25日（星期四）</option>
						<option value="2013-04-26">2013年04月26日（星期五）</option>
						<option value="2013-04-27">2013年04月27日（星期六）</option>
						<option value="2013-04-28">2013年04月28日（星期日）</option>
						<option value="2013-04-29">2013年04月29日（星期一）</option>
						<option value="2013-04-30">2013年04月30日（星期二）</option>
						<option value="2013-05-01">2013年05月01日（星期三）</option>
						<option value="2013-05-02">2013年05月02日（星期四）</option>
						<option value="2013-05-03">2013年05月03日（星期五）</option></select>
				</p>
				<p>
					<label>离开日期</label> <select id="lk_484378" selectedindex="0"><option
							value="2013-04-25">2013年04月25日（星期四）</option>
						<option value="2013-04-26">2013年04月26日（星期五）</option>
						<option value="2013-04-27">2013年04月27日（星期六）</option>
						<option value="2013-04-28">2013年04月28日（星期日）</option>
						<option value="2013-04-29">2013年04月29日（星期一）</option>
						<option value="2013-04-30">2013年04月30日（星期二）</option>
						<option value="2013-05-01">2013年05月01日（星期三）</option>
						<option value="2013-05-02">2013年05月02日（星期四）</option>
						<option value="2013-05-03">2013年05月03日（星期五）</option>
						<option value="2013-05-04">2013年05月04日（星期六）</option></select>
				</p>
				<p>
					<label>最晚到店</label> <select id="zwdd_484378" selectedindex="0">
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
					</select>
				</p>

				<p id="tijiao_484377">
					<a class="button ding d9d" onclick="submitBook(484378,222039)">提交订单</a>
					<a class="button ding d9d" onclick="cancelBook(484378)">取消</a>
				</p></li>
			<hr>
		</ul>
		<ul>
			<li><h2>公寓式套房</h2></li>
			<li>宽带：&nbsp;</li>
			<li>早餐：&nbsp;双份</li>
			<li>床型：&nbsp;大床(2.0米)</li>
			<li>面积：&nbsp;60平方米</li>
			<li>宽带：&nbsp;免费</li>
			<li>卫浴：&nbsp;独立卫浴</li>
			<li>楼层：&nbsp;17-22层</li>
			<li></li>
			<li>门店：￥1288 (天), 现订：￥<em>1200</em> (天)
			</li>
			<li><a class="button ding">订完</a></li>
		</ul>
	</div>

	<!--  酒店图片 -->

	<div class="list info tu">
		<span class="hTitle">♤ 酒店图片</span>
		<ul>
			<li><img
				src="http://dingcanla-picture.stor.sinaapp.com/%E5%A4%96%E8%A7%82.jpg"></li>
			<li>(酒店外观)</li>
			<li><img
				src="http://dingcanla-picture.stor.sinaapp.com/%E5%85%AC%E5%AF%93%E5%A5%97%E6%88%BF.jpg"></li>
			<li>(公寓套房)</li>
			<li><img
				src="http://dingcanla-picture.stor.sinaapp.com/%E8%A1%8C%E6%94%BF%E8%B4%B5%E5%AE%BE%E6%88%BF.jpg"></li>
			<li>(行政贵宾房)</li>
			<li><img
				src="http://dingcanla-picture.stor.sinaapp.com/%E8%B1%AA%E5%8D%8E%E5%AE%A2%E6%88%BF.jpg"></li>
			<li>（豪华客房）</li>
			<li><img
				src="http://dingcanla-picture.stor.sinaapp.com/%E5%A4%A7%E5%A0%82.jpg"></li>
			<li>（酒店大堂）</li>
		</ul>
	</div>
	
	<div class="list info tu">
    <span class="hTitle">♀ 酒店地图</span>
    <ul>
        <li><img src="http://api.map.baidu.com/staticimage?width=220&amp;height=200&amp;center=118.089061,24.457028&amp;markers=118.089061,24.457028&amp;zoom=14"></li>
    </ul>
</div>

	<div class="list info zhoubian">
		<span class="hTitle">∷ 酒店周边</span>
		<ul>
			<li>中山路  步行约10分钟到达酒店<span>(距离 0.2公里)</span><br>
			<hr></li>
			<li>厦门国际会展中心<span>(距离 15 公里)</span><br>
			<hr></li>
			<li>厦门高崎机场<span>(距离 18 公里,乘坐出租车约25分钟到达酒店)</span><br>
			<hr></li>
		</ul>
	</div>
	
	<div class="list info">
		<span class="hTitle">☎ 联系我们</span>
		<ul>
			<li>客服电话：   <a href="tel:05922023333">0592-2023333</a><span></span> <br>
			<hr></li>
			<li> 传   真  ： +86 592 203 6666<br>
			<hr></li>
			<li> 邮箱  ：<a href="mailto:haijinme@qq.com">bc@millenniumxiamen.com</a>  <br>
			<hr></li>
		</ul>
	</div>


</body>
</html>