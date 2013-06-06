    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
        addPolyline();//向地图中添加线
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(118.210644,24.484123);//定义一个中心点坐标
        map.centerAndZoom(point,14);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"国际会议中心酒店",content:"电话:05925958888",point:"118.195801|24.478379",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ,{title:"软件园二期",content:"我的备注",point:"118.187105|24.494361",isOpen:0,icon:{w:21,h:21,l:0,t:46,x:1,lb:10}}
		 ,{title:"万达商业广场",content:"我的备注",point:"118.18538|24.512116",isOpen:0,icon:{w:21,h:21,l:46,t:46,x:1,lb:10}}
		 ,{title:"瑞景商业广场",content:"我的备注",point:"118.168205|24.483312",isOpen:0,icon:{w:23,h:25,l:92,t:21,x:9,lb:12}}
		 ,{title:"观音山游乐场",content:"我的备注",point:"118.204784|24.503403",isOpen:0,icon:{w:21,h:21,l:92,t:0,x:6,lb:5}}
		 ,{title:"香山游艇码头",content:"我的备注",point:"118.206149|24.488771",isOpen:0,icon:{w:21,h:21,l:92,t:0,x:6,lb:5}}
		 ,{title:"奥林匹克博物馆",content:"我的备注",point:"118.200472|24.484726",isOpen:0,icon:{w:23,h:25,l:23,t:21,x:9,lb:12}}
		 ,{title:"厦门国际会展中心",content:"0592-5959999",point:"118.190159|24.474103",isOpen:0,icon:{w:23,h:25,l:23,t:21,x:9,lb:12}}
		 ,{title:"厦门火车站",content:"我的备注",point:"118.122966|24.472262",isOpen:0,icon:{w:23,h:25,l:23,t:21,x:9,lb:12}}
		 ,{title:"明发商业广场",content:"我的备注",point:"118.12911|24.483805",isOpen:0,icon:{w:21,h:21,l:115,t:46,x:1,lb:10}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
//标注线数组
    var plPoints = [{style:"solid",weight:4,color:"#f00",opacity:0.6,points:["118.218294|24.539863","118.219444|24.538811"]}
		 ,{style:"solid",weight:4,color:"#f00",opacity:0.6,points:["118.207946|24.528817","118.218582|24.538811"]}
		 ,{style:"solid",weight:4,color:"#f00",opacity:0.6,points:["118.217288|24.539074","118.220163|24.539863","118.219588|24.537759"]}
		 ];
    //向地图中添加线函数
    function addPolyline(){
		for(var i=0;i<plPoints.length;i++){
			var json = plPoints[i];
			var points = [];
			for(var j=0;j<json.points.length;j++){
				var p1 = json.points[j].split("|")[0];
				var p2 = json.points[j].split("|")[1];
				points.push(new BMap.Point(p1,p2));
			}
			var line = new BMap.Polyline(points,{strokeStyle:json.style,strokeWeight:json.weight,strokeColor:json.color,strokeOpacity:json.opacity});
			map.addOverlay(line);
		}
	}
    
    initMap();//创建和初始化地图	