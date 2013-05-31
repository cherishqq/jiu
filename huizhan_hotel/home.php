<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=yes">
    
    
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css">
 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
 <script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
 <script src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
 <link href="../style.css" rel="stylesheet" type="text/css" />
    
    <style type="text/css">
		/* Adjust the width of the left reveal menu.
		Copy all CSS from jquery.mobile.panel.css and delete the properties other than width, left, right and transform.
		Then delete the selectors/rules for display modes (reveal/push/overlay) and the position (left/right) that you don't use.
		If you don't use fixed toolbars on your page you can delete those selectors as well.
		Narrow the scope of the selectors to prevent other panels being affected by the overrides. */
		#demo-page #left-panel.ui-panel {
			width: 20em;
		}
		#demo-page #left-panel.ui-panel-closed {
			width: 0;
		}
		#demo-page .ui-panel-position-left.ui-panel-display-reveal {
			left: 0;
		}
		#demo-page .ui-panel-content-wrap-position-left.ui-panel-content-wrap-open,
		.ui-panel-dismiss-position-left.ui-panel-dismiss-open {
			left: 15em;
			right: -15em;
		}
		#demo-page .ui-panel-animate.ui-panel-content-wrap-position-left.ui-panel-content-wrap-open.ui-panel-content-wrap-display-reveal {
			left: 0;
			right: 0;
			-webkit-transform: translate3d(15em,0,0);
			-moz-transform: translate3d(15em,0,0);
			transform: translate3d(15em,0,0);
		}

		/* Combined listview collapsible menu. */
		/* Unset negative margin bottom on the listviews. */
		#left-panel .ui-panel-inner > .ui-listview { margin-bottom: 0; }
		/* Unset top and bottom margin on collapsible set. */
		#left-panel .ui-collapsible-set { margin: 0; }
		/* The first collapsible contains the collapsible set. Make it fit exactly in the collapsible content. */
		#left-panel .ui-panel-inner > .ui-collapsible > .ui-collapsible-content { padding-top: 0; padding-bottom: 0;  border-bottom: none; }
		/* Remove border top if a collapsible comes after a listview. */
		#left-panel .ui-panel-inner  > .ui-collapsible > .ui-collapsible-heading .ui-btn,
		#left-panel .ui-collapsible.ui-first-child .ui-collapsible-heading .ui-btn { border-top: none; }
		/* Give the first collapsible heading the same padding, i.e. same height, as the list items. */
		#left-panel .ui-collapsible-heading .ui-btn-inner { padding: .7em 40px .7em 15px; }
		/* Give the other collapsible headings the same padding and font-size as the list divider. */
		#left-panel .ui-collapsible-set .ui-collapsible-heading .ui-btn-inner { padding: .5em 40px .5em 15px; font-size: 14px; }

		/* Styling of the close button in both panels. */
		#demo-page .ui-panel-inner > .ui-listview .ui-first-child {
			background: #eee;
		}

		/* Reveal menu shadow on top of the list items */
		#demo-page .ui-panel-display-reveal {
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
		}
		#demo-page .ui-panel-content-wrap-position-left {
			-webkit-box-shadow: -5px 0px 5px rgba(0,0,0,.15);
			-moz-box-shadow: -5px 0px 5px rgba(0,0,0,.15);
			box-shadow: -5px 0px 5px rgba(0,0,0,.15);
		}

		/* Use the ui-body class of your page theme (ui-body-d in this demo) to set a background image.
		This class will be added to the content wrapper, while the page itself gets the same background
		as the panel before opening the panel. */
		#demo-page .ui-body-d {
			background-image: url(./img/bg-pattern.png);
			background-repeat: repeat-x;
			background-position: left bottom;
		}

		/* Styling of the page contents */
		.article p {
			margin: 0 0 1em;
			line-height: 1.5;
		}
		.article p img {
			max-width: 100%;
		}
		.article p:first-child {
			text-align: center;
		}
		.article small {
			display: block;
			font-size: 75%;
			color: #c0c0c0;
		}
		.article p:last-child {
			text-align: right;
		}
		.article a.ui-btn {
			margin-right: 2em;
			-webkit-border-radius: .4em;
			border-radius: .4em;
		}
		@media all and (min-width:769px) {
			.article {
				max-width: 994px;
				margin: 0 auto;
				padding-top: 4em;
				-webkit-column-count: 2;
				-moz-column-count: 2;
				column-count: 2;
				-webkit-column-gap: 2em;
				-moz-column-gap: 2em;
				column-gap: 2em;
			}
			/* Fix for issue with buttons and form elements
			if CSS columns are used on a page with a panel. */
			.article a.ui-btn {
				-webkit-transform: translate3d(0,0,0);
			}
		}
	</style>
	
	<script >
		$(document).ready(function(){
			
			$('#content_container').load("home_page.php");			

			$("#home_btn").bind("click",function(){
				$('#content_container').load("home_page.php");
			});
			$("#kf_btn").bind("click",function(){
				$('#content_container').load("hotel_detail.php");
			});
			
			$("#hotel_kf_btn").bind("click",function(){
				$('#content_container').load("huizhan_hotel_detail.php");
			});

			$('#cater_btn').bind('click',function(){
				$('#content_container').load("dining_room.php");
				});
			$('#hotel_cater_btn').bind('click',function(){
				$('#content_container').load("hotel_dining_room.php");
				});

			$('#meeting_room_btn').bind('click',function(){
				$('#content_container').load("metting_room.php");
				});
			$('#huizhan_meeting_room_btn').bind('click',function(){
				$('#content_container').load("huizhan_metting_room.php");
				});

			// 最新优惠
			$('#privilege_btn').bind('click',function(){
				$('#content_container').load("privilege.php");
				});
			$('#map_btn').bind('click',function(){
		//		$('#content_container').load("http://map.baidu.com");
		//		$('#content_container').load("privilege.php");

//				$.get("http://map.baidu.com");
				$('#content_container').load("map.php",function(data){		
						$.getScript("./js/baidumap.js");
		
					});
				
			    
		
				/**
				$('#content_container').get("http://map.baidu.com",function(data){
						alert("data loaded:" + data);
					});
				**/

		
	
				});
			

			function hotel_detail(rid) {
				alert("dd");
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
	    });
			
		
	
	</script>

</head>
<body >
<div data-role="page" id="demo-page" data-theme="b" style="background-color: #E0D3C9;">
 	
 	<div data-role="header" data-theme="b">
        <h1><span style="overflow: scroll;">厦门国际会议中心酒店</span></h1>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false">Menu</a>
    </div><!-- /header -->

    <div data-role="content"  id="content_container"  style="background-color: #E0D3C9" > 
    
    <!-- 	<iframe src="http://j.map.baidu.com/jPvfi"></iframe> -->
    </div><!-- /content -->
    
    <div data-role="panel" id="left-panel" data-theme="d">
     	
     	   <ul data-role="listview" data-theme="d">
     	   
                <li><a href="#left-panel" id="home_btn">主页</a></li>
                <li><a href="#left-panel" id="kf_btn">国际会议中心酒店客房</a></li>
                 <li><a href="#left-panel" id="hotel_kf_btn">国际会展酒店客房</a></li>
                <li><a href="#left-panel" id="cater_btn" data-prefetch="ture">国际会议中心酒店餐饮</a></li>
                      <li><a href="#left-panel" id="hotel_cater_btn" data-prefetch="ture">国际会展酒店餐饮</a></li>
                <li><a href="#left-panel" id="meeting_room_btn">国际会议中心酒店会议室</a></li>
                <li><a href="#left-panel" id="huizhan_meeting_room_btn">国际会展酒店会议室</a></li>
                <li><a href="#left-panel" id="privilege_btn">最新优惠</a></li>
                <li><a href="#left-panel" id="map_btn">地图名片</a></li>
         </ul> 
    

    </div><!-- /panel -->
    
        <div data-role="panel" id="right-panel" data-display="overlay" data-position="right" data-theme="c">

        <ul data-role="listview" data-theme="d" data-icon="false">
        	<li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
        	<li data-role="list-divider">Share this page</li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Google +</a></li>
            <li><a href="#">Mail</a></li>
        </ul>

    </div><!-- /panel -->
    
    </div>
    
    
   </body>
   </html>