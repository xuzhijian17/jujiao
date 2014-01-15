/**
* ajaxPaging JavaScript framework, version 1.0.0
* (c) 2005-2009 Sam Stephenson
* @author xuzhijian17
*-----------------------------------------------*/

var CURRENT_PAGE;
var CURRENT_BLOCK;
var CURRENT_NUM;
var CURRNET_RECORDS;
var TOTAL_RECORDS;
var TOTAL_PAGES;
var TOTAL_BLOCKS;


/**
*分页ajax请求方法
*@args 参数接受私有可选参数或公有可选参数传
*私有可选参数在调用时设置
*公有可选参数在ajaxPaging.ini.js文件中的pubAjax中设置
*/
function pagingAjax(args){
    $.ajax({
        type:args.types ? args.types : pubAjax.types,
        url:args.url ? args.url : pubAjax.url,
        data:args.datas,
        dataType:args.dataType ? args.dataType : pubAjax.dataType,
        async:args.async ? args.async : pubAjax.async,
        success:function(msg){
            CURRENT_PAGE = parseInt(msg[0]); //返回当前页数
            CURRENT_BLOCK = parseInt(msg[1]); //返回当前版块数
			CURRENT_NUM = msg[2]; //返回当前分页所需要的分页数对象
			CURRNET_RECORDS = msg[3]; //返回所需要显示的记录数对象
            if (args.showPageInfo) { //因为后台只对发送请求参数是n的才返回下面的数据，所以要判断下
				TOTAL_RECORDS = parseInt(msg[4]); //返回总记录数的条数
				TOTAL_PAGES = parseInt(msg[5]); //返回总页数的条数
				TOTAL_BLOCKS = parseInt(msg[6]); //返回总版块数
            };
			if(pubAjax.dynamicCreate){ //是否动态创建html标签
				jqobj.numobj.html(dynamicCreatePageNum(CURRENT_PAGE,CURRENT_NUM));
				jqobj.dataobj.html(dynamicCreateTbody(CURRNET_RECORDS));
				jqobj.paginfo.html(showPageInfo(TOTAL_PAGES,TOTAL_RECORDS));

			}
        }
    });
}

function jumpPageNum(jn){
	var preg = /^\d+$/;
	if(preg.test(jn) && jn <= TOTAL_PAGES){
		pagingAjax({
			datas:urlArgs.num+'='+jn,
			showPageInfo:true
		});
	}else{
		alert(alertArgs.ajump);
	}
}

function pressButtonEvent(){
	/**
	*点击分页按钮事件
	*/
	$(document).on('click',NanObj.classnum,function(){
		pagingAjax({
			datas:urlArgs.num+'='+$(this).attr('id'),
			showPageInfo:false
		});
		return false;
	});
	/**
	*跳转按钮点击事件
	*/
	NanObj.jumpid.click(function(){
		var jn = jqobj.jumpobj.val();
		jumpPageNum(jn);
	});
	/**
	*跳转按钮回车事件
	*/
	jqobj.jumpobj.keyup(function(e){
		var jn = $(this).val();
		$(document.forms).submit(function(e){
			e.preventDefault(); //阻止默认的表单回车提交事件
			return false; //阻止默认的表单回车提交事件
		});
		if(e.which == 13){
			jumpPageNum(jn);
		}
	});
	NanObj.beginid.click(function(){
		if(CURRENT_PAGE != 1){
			pagingAjax({
				datas:urlArgs.num + '=1',
				async:true,
				showPageInfo:false
		    });
		}else{
			alert(alertArgs.astart);
		}
	});
	NanObj.prebid.click(function(){
		pblock = CURRENT_BLOCK - 1;
		if(pblock >= 1){
			pagingAjax({
				datas:urlArgs.preblock+'='+pblock
			});
		}else{
			alert(alertArgs.astart);
		}
	});
	NanObj.preid.click(function(){
		pre = CURRENT_PAGE - 1;
		if(pre >= 1){
			pagingAjax({
				datas:urlArgs.prepage+'='+pre+'&'+urlArgs.block+'='+CURRENT_BLOCK,
			});
		}else{
			alert(alertArgs.astart);
		}
	});
	NanObj.nextid.click(function(){
		next = CURRENT_PAGE + 1;
		if(next <= TOTAL_PAGES){
			pagingAjax({
				datas:urlArgs.nextpage+'='+next+'&'+urlArgs.block+'='+CURRENT_BLOCK,
			});
		}else{
			alert(alertArgs.aend);
		}
	});
	NanObj.nextbid.click(function(){
		nblock = CURRENT_BLOCK + 1;
		if(nblock <= TOTAL_BLOCKS){
			pagingAjax({
				datas:urlArgs.nextblock+'='+(CURRENT_BLOCK + 1)
			});
		}else{
			alert(alertArgs.aend);
		}
	});
	
	NanObj.endid.click(function(){
		if(CURRENT_PAGE != TOTAL_PAGES){
			pagingAjax({
				datas:urlArgs.num + '='+TOTAL_PAGES,
				async:true,
				showPageInfo:false
		    });
		}else{
			alert(alertArgs.aend);
		}
	});
}
var myAjaxPaging = function(){
	/**
	*初始化页面时，发送的ajax请求参数
	*/
    pagingAjax({
		datas:urlArgs.num + '=1',
		async:false,
		showPageInfo:true
    });
	pressButtonEvent();
}

