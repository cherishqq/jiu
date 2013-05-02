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
<script  src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css"/>
<script  src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="javascript" src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script> -->

<script>
	function canyin_detail(rid ) {
		
//		document.getElementById("book_484376").style.display = "";
	//	document.getElementById("ding_484376").style.display = "none";
	//	$("#book_484376").css('display',''); 
	//	$("#ding_484376").css('display','none'); 

		if($('#book_' + rid).css('display') == 'none'){

			$('#book_' + rid).show("slow");
			$("#ding_" + rid).hide();
			}
		
	//		$("#book_"+rid).style.display = "";
		//	$("#ding_"+rid).style.display = "none";
		}

	function canyin_hidden(rid) {

		if($('#ding_' + rid).css('display') == 'none'){ 
			   $('#book_' + rid).hide();
			   $('#ding_' + rid).show(); 
			}
					
		}

</script>

</head>
<body>


	<div class="list info">
		<span class="hTitle" style="background-color: #3CF;"> 餐厅</span>
		<ul>
			<li><h2>海景咖啡厅</h2></li>
			<li>营业时间 ：&nbsp; 24小时</li>
			<li>预订：&nbsp;  <a href="tel:05922023333">0592-2023333</a> 分机号 6616</li>
			<li></li>
			<li id="ding_484376"><a class="button ding d9d"
				onclick="canyin_detail(484376)">详情</a></li>
			<li class="book" id="book_484376" style="display: none;" onclick="canyin_hidden(484376)">
			   <div style="color: #09f">
			   		 厦门海景咖啡厅拥有美食品种丰富的自选菜单及其精选豪华自助早餐、午餐及晚餐。 这间厦门酒店餐厅环境优雅，可为您带来愉悦的用餐体验。 
			   </div>
			   
			   
			   <img id=""
				src="http://dingcanla-picture.stor.sinaapp.com/%E5%85%AC%E5%AF%93%E5%A5%97%E6%88%BF.jpg">

				</li>
			<hr>
		</ul>
		<ul>
			<li><h2>龙苑中餐厅</h2></li>
			<li>营业时间 ：&nbsp; 周一至周日
				<p>&nbsp;&nbsp;&nbsp;午餐：中午 11:30 至下午 2:00 </p>
				<p>&nbsp;&nbsp;&nbsp;晚餐：下午 6:00 至晚上 10:00</p>
				
			</li>
			<li>预订：&nbsp;  <a href="tel:05922023333">0592-2023333</a> 分机号 6616</li>
			<li></li>
			<li id="ding_484377"><a class="button ding d9d"
				onclick="canyin_detail(484377)">详情</a></li>
			<li class="book" id="book_484377" style="display: none;" onclick="canyin_hidden(484377)">
			   
			   <div style="color: #09f">
			   		 龙苑中餐厅是您在厦门一流中餐厅畅享美食体验的理想之选。 龙苑中餐厅可为您供应品种丰富、富有创意的美味粤式菜肴，确保让您大饱口福。
			   </div>
			   <img 
				src="http://dingcanla-picture.stor.sinaapp.com/%E9%BE%99%E8%8B%91%E4%B8%AD%E9%A4%90%E5%8E%85.jpg">

				</li>
			<hr>
		</ul>
		<ul>
			<li><h2>波多菲诺意大利餐厅</h2></li>
			<li>营业时间 ：&nbsp; 中午 11:30 - 下午 2:00 以及下午 6:00 - 晚上 10:00	
			</li>
			<li>预订：&nbsp;  <a href="tel:05922023333">0592-2023333</a> 分机号 6616</li>
			<li></li>
			<li id="ding_484378"><a class="button ding d9d"
				onclick="canyin_detail(484378)">详情</a></li>
			<li class="book" id="book_484378" style="display: none;" onclick="canyin_hidden(484378)">
			   
			    <div style="color: #09f">
			   		波多菲诺意大利餐厅是一家供应意式料理的最正宗的厦门餐厅，久负盛名，可为您提供各种地道的意大利美食
			   </div>
			   <img 
				src="http://dingcanla-picture.stor.sinaapp.com/%E6%B3%A2%E5%A4%9A%E8%8F%B2%E8%AF%BA%E6%84%8F%E5%A4%A7%E5%88%A9%E9%A4%90%E5%8E%85.jpg">

				</li>
			<hr>
		</ul>
		<ul>
			<li><h2>樱花日本餐厅</h2></li>
			<li>营业时间 ：&nbsp; 下午 6:00 至晚上 10:00 </li>
			<li>预订：&nbsp;  <a href="tel:05922023333">0592-2023333</a> 分机号 6616</li>
			<li></li>
			<li id="ding_484379"><a class="button ding d9d"
				onclick="canyin_detail(484379)">详情</a></li>
			<li class="book" id="book_484379" style="display: none;" onclick="canyin_hidden(484379)">
			   
			   <div style="color: #09f">
			   		这间厦门日本餐厅可为您奉上各种现代化美味佳肴，可确保客人在舒适时尚的环境中获得愉悦的餐饮体验。
			   </div>
			   
			   <img 
				src="http://dingcanla-picture.stor.sinaapp.com/%E6%A8%B1%E8%8A%B1%E6%97%A5%E6%9C%AC%E9%A4%90%E5%8E%85.jpg">

				</li>
			<hr>
		</ul>
	</div>

</body>
</html>