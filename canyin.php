<?php
?>

<!DOCTYPE html >
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport"
	content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
<title>餐厅详情</title>
<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css"/>
<script  src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="javascript" src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script> -->

</head>
<body>


	<div class="list info">
		<span class="hTitle" style="background-color: #3CF;"> 餐厅</span>
		<ul>
			<li><h2>海景咖啡厅</h2></li>
			<li>营业时间 ：&nbsp; 24小时</li>
			<li>预订：&nbsp;+ 86 59 2202 3333，分机号 6616</li>
			<li></li>
			<li id="ding_484376"><a class="button ding d9d"
				onclick="book(484376)">详情</a></li>
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
				</li>
			<hr>
		</ul>
		<ul>
			<li><h2>龙苑中餐厅</h2></li>
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
				onclick="book(484377)">详情</a></li>

			<hr>
		</ul>
		<ul>
			<li><h2>波多菲诺意大利餐厅</h2></li>
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
				onclick="book(484378)">详情</a></li>
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
			<li><h2>樱花日本餐厅</h2></li>
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

</body>
</html>