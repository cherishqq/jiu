//获取元素
function $$(id) {
	return document.getElementById(id);
}

//获取选择列表的值
function get_slVal(id) {
	var sl = document.getElementById(id);
	return sl.options[sl.selectedIndex].value;
}

//请求Get数据
function GetJSON (api, fun) {
	var url = server+api+"&callback=?";
    baidu.get(encodeURI(url), function(result){
		fun(result);
    }, 'json');
}

//请求Post数据
function PostJSON(api, data, fun) {
	var url = server+api;
	baidu.post(url, data, function(result){
		fun(result);
    });
}

//取出缓存
function getLocal(id, rid, sel) {
	var d = localStorage[id];
	if ( d != null && d != "undefined" && d.length > 0 ) {
		if ( sel==0 ) {
			$$(id+"_"+rid).value = d;
		}else {
			$$(id+"_"+rid).selectedIndex = parseInt(d);
		}
	}
}

//填写订单
function book(rid) {
	$$("book_"+rid).style.display = "";
	$$("ding_"+rid).style.display = "none";

	getLocal("rzrm", rid, 0);
	getLocal("sjhm", rid, 0);

	getLocal("xykh", rid, 0);
	getLocal("cvv2", rid, 0);
	getLocal("xyk_xm", rid, 0);
	getLocal("zjhm", rid, 0);
	getLocal("xyk_zj", rid, 1);
}


function cancelBook(rid) {
	$$("book_"+rid).style.display = "none";
	$$("ding_"+rid).style.display = "";
}

//提交订单
var tijiao = "";
function submitBook(rid,pid) {
	var fjsl = $$("fjsl_"+rid).value*1;
	var rzrm = $$("rzrm_"+rid).value;
	var sjhm = $$("sjhm_"+rid).value;
	var arrive = get_slVal("zwdd_"+rid);

	if ( startDate=="" || endDate=="" ) {
		startDate = get_slVal("rz_"+rid);
		endDate = get_slVal("lk_"+rid);
	}

	if( rzrm.length <= 0 ) {
		alert('请填写入住人的姓名');
		return;
	}

	if( !(/^1[3|4|5|8][0-9]\d{4,8}$/.test(sjhm)) ) {
		alert('请输入正确的手机号');
		return;
	}

	if ( tijiao=="" ) {
		tijiao = $$("tijiao_"+rid).innerHTML;
		$$("tijiao_"+rid).innerHTML = '<div class="button ding">已提交，请稍后...<div class="loading"></div></div>';
		setTimeout("submitBook("+rid+","+pid+")", 800);
		return;
	}

	//缓存
	localStorage.rzrm = rzrm;
	localStorage.sjhm = sjhm;

	//是否担保
	var apiUrl = "ordercheck.php?hid="+hId+"&rid="+rid+"&pid="+pid+"&tm1="+startDate+"&tm2="+endDate;
	GetJSON(apiUrl, function(json){

		var iscard = 0;  //1 为担保 0为不担保
		if ( json.GaranteeRule.status==1 ) {
			if ( json.GaranteeRule.norule==1 ) {
				iscard = 1;
			}else if (  json.GaranteeRule.romms!=0 && fjsl>=json.GaranteeRule.romms ) {
				iscard = 1;
			}else if (  json.GaranteeRule.stattime!="" && json.GaranteeRule.endtime!="" ) {
				if ( json.GaranteeRule.stattime<=arrive ) {
					iscard = 1;
				}
			}
		}
		if ( iscard==0 ) {
			//无需担保，执行下单
			var result_v = {
				"hid": hId,
				"rid": rid,
				"pid": pid,
				"tm1": startDate,
				"tm2": endDate,
				"n": fjsl,
				"name": rzrm,
				"tel": sjhm,
				"arrive": arrive,
				"callback": "?",
			};
			result(result_v);
			return;
		}else {
			//需要担保
			$$("tijiao_"+rid).innerHTML = tijiao;
			tijiao = "";
			alert("此酒店需要信用卡担保，可选择早一些的【最晚到店时间】试试，如16:00之前");
			return;
		}
	});
}

//执行下单
function result(data) {
	PostJSON("result.php", data, function(result) {
		if ( result=="ok" ) {
			location.href = "orderinfo.php?book=ok";
		}else {
			alert(result);
			$$("tijiao_"+data.rid).innerHTML = tijiao;
			tijiao = "";
			return;
		}
	});
}