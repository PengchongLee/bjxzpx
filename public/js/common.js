function dozoom(size) {
    var zoom = document.all ? document.all['zoomtext'] : document.getElementById('zoomtext');
    zoom.style.fontSize = size + 'px';
}

function is_mobile() {
    var ifmobile = 0
    var regex_match = /(nokia|iphone|android|motorola|^mot-|softbank|foma|docomo|kddi|up.browser|up.link|htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte-|longcos|pantech|gionee|^sie-|portalmmm|jigs browser|hiptop|^benq|haier|^lct|operas*mobi|opera*mini|320x320|240x320|176x220)/i;
    var u = navigator.userAgent;
    if (null == u) {
        ifmobile = 1;
    }
    var result = regex_match.exec(u);

    if (null == result) {
        ifmobile = 0;
    } else {
        ifmobile = 1;

    }
    if (ifmobile == 1) document.location.href = 'index.php?m=wap';
}

function showsubmenu(sid)
{
	if(document.getElementById("submenu" + sid).style.display=='none')
	{
		document.getElementById("submenu" + sid).style.display="";
	}else{
	document.getElementById("submenu" + sid).style.display="none";
	}

}

function add_favorite(title,url) {
		if(url=='')url = location.href;
		$.getJSON('/api.php?op=add_favorite&title='+encodeURIComponent(title)+'&url='+encodeURIComponent(url)+'&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				alert('收藏成功');
			}if(data.status==2)	{
				alert('您已经收藏过了！');
			}
			else {
				alert('请先登录');
			}
		});
	}
	
function addtocart(id,flag) {
		var tc=$(".taocan").find(".selected").attr("rel");
		if(typeof(tc)=="undefined")tc=0;
		$.getJSON('/api.php?op=addtocart&id='+id+'&tc='+tc+'&t='+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				if(flag==1)
				{
					location.href='index.php?m=member&c=order&a=cart';
				}else{alert('已经放入购物车');}
			}
			else if(data.status==2)	{
				 alert('对不起，库存不足！请与管理员联系');
			}
			else if(data.status==3)	{
				 alert('对不起，套餐类型异常，请刷新页面重新选择');
			}
			else if(data.status==4)	{
				 alert('请选择一个套餐类型');
			}
			else {
				alert('请先登录');
				location.href='index.php?m=member&c=index&a=login&forward='+encodeURIComponent(window.location.href);
			}
		});
	}
	
function vote(catid,id) {
		$.getJSON('/api.php?op=vote&catid='+catid+'&id='+id+'&t='+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				alert('投票成功');
				$('#vote'+id).html(data.data);
			} else if(data.status==-1){
				alert('请先登录');
			}
			 else if(data.status==-3){
				alert('不在可投票时间范围内！');
			}
			 else if(data.status==-4){
				alert('今日已经投过票！');
			}
		});
	}
	
function get_username(id) {
		$.getJSON('/api.php?op=get_username&uid='+id+'&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				$('#toname').html('输入正确');
				$('#touid').val(data.data);
				$('#submitbtn').attr("disabled",false); 
			} else {
				$('#toname').html('');
				alert('此好友不存在，请重新输入！');
				$('#touid').val('');
				$('#submitbtn').attr("disabled",true); 
				
			}
		});
	}
	

function SwapTab(name,cls_show,cls_hide,cnt,cur){
    for(i=1;i<=cnt;i++){
		if(i==cur){
			 $('#div_'+name+'_'+i).show();
			 $('#tab_'+name+'_'+i).attr('class',cls_show);
		}else{
			 $('#div_'+name+'_'+i).hide();
			 $('#tab_'+name+'_'+i).attr('class',cls_hide);
		}
	}
}

function showdiv(str)
{
	$('#'+str).toggle();	
}

function getsmscode() {
		$.getJSON('/api.php?op=getsmscode&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				alert('请输入您手机收到的验证码');
			} else {
				alert('验证码获取失败！请检查手机号码是否正确。');
			}
		});
}

function SetHome(obj,vrl){
try{
obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);
}
catch(e){
if(window.netscape) {
try {
netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
}
catch (e) {
alert("此操作被浏览器拒绝！ 请在浏览器地址栏输入“about:config”并回车 然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
}
var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
prefs.setCharPref('browser.startup.homepage',vrl);
}else{
alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入："+vrl+"点击确定。");
}
}
}
// 加入收藏 兼容360和IE6
function shoucang(sTitle,sURL)
{
try
{
window.external.addFavorite(sURL, sTitle);
}
catch (e)
{
try
{
window.sidebar.addPanel(sTitle, sURL, "");
}
catch (e)
{
alert("您的浏览器不支持，请使用Ctrl+D进行添加");
}
}
} 

function ruselinkurl() {
        if($("#islink").attr("checked")=='checked') {
             $('#linkurl').attr('disabled',false); 
			 if($('#linkurl').val()=='')$('#linkurl').val('http://'); 
			 var oEditor = CKEDITOR.instances.content;
             oEditor.insertHtml('　');
			 return false;

        } else {
             $('#linkurl').attr('disabled','disabled');
			 $('#linkurl').val(''); 
        }
}

 function IsPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone", "iPod"];  //ipad 除外
            var flag = true;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = false;
                    break;
                }
            }
            return flag;
 }