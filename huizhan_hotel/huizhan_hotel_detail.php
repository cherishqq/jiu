<?php
?>

<!DOCTYPE html >
<html>
<head>
<title>国际会展酒店客户</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport"
	content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<!--  
 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
-->

</head>
<body>


	<div class="list info">
	<script type="text/javascript">
		function hotel_detail(rid) {
			if($('#book_' + rid).css('display') == 'none'){
				$('#book_' + rid).show("slow");
				$("#ding_" + rid).hide();
				}
			}
	
		function hotel_hidden(rid) {
			if($('#ding_' + rid).css('display') == 'none'){ 
				   $('#book_' + rid).hide();
				   $('#ding_' + rid).show(); 
				}
			}
	</script>

		<span class="hTitle" style="background: #3CF;">国际会展酒店--客房详情</span>
		<ul>
			<li><h2>海景客房</h2></li>
			<li>面积 ：&nbsp; 38m<sup>2</sup></li>
			<li>观海露台：&nbsp;  15m<sup>2</sup></li>
			<li>液晶电视： 42寸/一台</li>
			<li>浴缸：&nbsp; 独立淋浴间,独立浴缸 </li>
			<li>独立洗手间：&nbsp;  两个/干湿分离</li>
			<li>宽带：&nbsp;  有线/无线</li>
			<li></li>
			<li id="ding_484376"><a class="button ding d9d"
				onclick="hotel_detail('484376')">详情</a></li>
			<li class="book" id="book_484376" style="display: none;" onclick="hotel_hidden(484376)">
			   <div style="color: #09f">
			     详细介绍
			   </div>

			   <img style="display: block; width:90%"
				src="./images/海景客房.jpg">

				</li>
			<hr>
		</ul>
		
		<ul>
			<li><h2>豪华海景套房</h2></li>
			<li>面积 ：&nbsp; 68m<sup>2</sup> -- 92m<sup>2</sup></li>
			<li>观海露台：&nbsp;  25m<sup>2</sup></li>
			<li>液晶电视： 42寸/一台</li>
			<li>浴缸：&nbsp; 独立浴缸/独立淋浴间 </li>
			<li>独立洗手间：&nbsp;  两个/干湿分离</li>
			<li>宽带：&nbsp;  有线/无线</li>
			<li></li>
			<li id="ding_484377"><a class="button ding d9d"
				onclick="hotel_detail(484377)">详情</a></li>
			<li class="book" id="book_484377" style="display: none;" onclick="hotel_hidden(484377)">
			   <div style="color: #09f">
			     详细介绍
			   </div>
			   <img style="display: block; width:90%"
				src="./images/豪华海景套房.jpg">
				</li>
			<hr>
		</ul>
		
		
	 <ul>
			<li><h2>豪华海景双床房</h2></li>
			<li>面积 ：&nbsp; 53m<sup>2</sup></li>
			<li>观海露台：&nbsp;  25m<sup>2</sup></li>
			<li>液晶电视： 42寸/一台</li>
			<li>浴缸：&nbsp; 独立浴缸 /独立淋浴间</li>
			<li>独立洗手间：&nbsp;  两个/干湿分离</li>
			<li>宽带：&nbsp;  有线/无线</li>
			<li></li>
			<li id="ding_484378"><a class="button ding d9d"
				onclick="hotel_detail(484378)">详情</a></li>
			<li class="book" id="book_484378" style="display: none;" onclick="hotel_hidden(484378)">
			   <div style="color: #09f">
			     详细介绍
			   </div>
			   <img style="display: block; width:90%"
				src="http://dingcanla-picture.stor.sinaapp.com/huizhan/%E6%B9%BE%E6%99%AF%E5%A4%A7%E5%BA%8A%E6%88%BF.jpg">
				</li>
			<hr>
		</ul>
		
		 <ul>
			<li><h2>豪华海景双床房</h2></li>
			<li>面积 ：&nbsp; 60<sup>2</sup></li>
			<li>观海露台：&nbsp; 12m<sup>2</sup></li>
			<li>液晶电视： 42寸/两台</li>
			<li>浴缸：&nbsp; 独立冲浪按摩浴缸 </li>
			<li>独立洗手间：&nbsp;  两个/干湿分离</li>
			<li>宽带：&nbsp;  有线/无线</li>
			<li></li>
			<li id="ding_484379"><a class="button ding d9d"
				onclick="hotel_detail(484379)">详情</a></li>
			<li class="book" id="book_484379" style="display: none;" onclick="hotel_hidden(484379)">
			   <div style="color: #09f">
			     详细介绍
			   </div>
			   <img style="display: block; width:90%"
				src="./images/豪华海景双床房.jpg">
				</li>
			<hr>
		</ul>
		
		 <ul>
			<li><h2>豪华海景行政客房</h2></li>
			<li>面积 ：&nbsp; 53m<sup>2</sup></li>
			<li>观海露台：&nbsp; 25<sup>2</sup></li>
			<li>液晶电视： 42寸/台</li>
			<li>浴缸：&nbsp; 独立淋浴间/独立淋浴间 </li>
			<li>独立洗手间：&nbsp;  干湿分离</li>
			<li>宽带：&nbsp;  有线/无线</li>
			<li></li>
			<li id="ding_484381"><a class="button ding d9d"
				onclick="hotel_detail(484381)">详情</a></li>
			<li class="book" id="book_484381" style="display: none;" onclick="hotel_hidden(484381)">
			   <div style="color: #09f">
			     详细介绍
			   </div>
			   <img style="display: block; width:90%"
				src="./images/豪华海景行政客房.jpg">
				</li>
			<hr>
		</ul>
		
		 <ul>
			<li><h2>高级客房</h2></li>
			<li>面积 ：&nbsp; 38--43m<sup>2</sup></li>
			<li>观海露台：&nbsp; 3.5m<sup>2</sup></li>
			<li>液晶电视： 42寸/一台</li>
			<li>浴缸：&nbsp; 独立浴缸 </li>
			<li>独立洗手间：&nbsp;  有</li>
			<li>宽带：&nbsp;  有线/无线</li>
			<li></li>
			<li id="ding_484380"><a class="button ding d9d"
				onclick="hotel_detail(484380)">详情</a></li>
			<li class="book" id="book_484380" style="display: none;" onclick="hotel_hidden(484380)">
			   <div style="color: #09f">
			     详细介绍
			   </div>
			   <img style="display: block; width:90%"
				src="./images/高级客房.jpg">
				</li>
			<hr>
		</ul>
		
			<ul>
			<li><h2>标准客房</h2></li>
			<li>面积 ：&nbsp; 29 m<sup>2</sup></li>
			<li>观海露台：&nbsp; 3.5m<sup>2</sup></li>
			<li>液晶电视： 42寸/一台</li>
			<li>浴缸：&nbsp; 独立浴缸 </li>
			<li>独立洗手间：&nbsp;  有</li>
			<li>宽带：&nbsp;  有线/无线</li>
			<li></li>
			<li id="ding_484380"><a class="button ding d9d"
				onclick="hotel_detail(484380)">详情</a></li>
			<li class="book" id="book_484380" style="display: none;" onclick="hotel_hidden(484380)">
			   <div style="color: #09f">
			     详细介绍
			   </div>
			   <img style="display: block; width:90%"
				src="./images/标准客房.jpg">
				</li>
			<hr>
		</ul>
		
		
	</div>

</body>
</html>