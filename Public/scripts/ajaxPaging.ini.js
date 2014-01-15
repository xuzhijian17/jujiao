/**
*主要定义显式数据所需要的jquery对象
*/
var jqobj = {
	numobj:$('#num'),
    dataobj:$('#showrecords'),
    paginfo:$('#info'),
	jumpobj:$('#jump_num')
};

/**
*主要定义前后，跳转以及点击按钮所需要的jquery对象
*/
var NanObj = {
    beginid: $('#begin'),
    endid: $('#end'),
    nextid: $('#next'),
	preid: $('#pre'),
    nextbid: $('#nextblock'),
    prebid: $('#preblock'),
    jumpid: $('#jump_btn'),
    classnum: '.num'
};

/**
*ajax参数设置，这里定义的是公共的，具体设置到ajaxPaging.js中设置
*/


/**
*ajax中url的参数，注意这里要和后台接收的参数关联
*/
var urlArgs = {
	num:'n',
	block:'b',
	nextpage:'np',
	nextblock:'nb',
	prepage:'pp',
	preblock:'pb'
}
/**
*错误弹出信息
*/
var alertArgs = {
	ajump:'请输入正确的页数',
	astart:'已经是最前了',
	aend:'已经是最后了'
}

/**
*动态创建分页数的显示设置
*/
var dynamicCreatePageNum = function (current_page,pageNum) {
	var a = '';
	$.each(pageNum,function(i,item){
		if(current_page == item){
			a += '<span style="color:red">'+item+'</span>';
		}else{
			a += '<a href="javascript:void(0)" class="'+NanObj.classnum.substr(1)+'" id="'+item+'">'+item+'</a>';
		}
	});
	return a;
}

/**
*主数据的显示
*@pageData 为后台返回的json数据对象，对象后面的属性主要根据你后台代码设置而写，默认是数据库字段名
*/
var dynamicCreateTbody = function (pageData){
	var row = '';
	$.each(pageData,function(i,item){
		row += '<tr>';
		row += '<td>'+item.id+'</td>';
		row += '<td>'+item.proname+'</td>';
		row += '<td>'+item.marketprice+'</td>';
		row += '<td>'+item.saleprice+'</td>';
		row += '<td>'+item.discount+'</td>';
		row += '<td>'+item.ishot+'</td>';
		row += '<td>'+item.buymaxnum+'</td>';
		row += '</tr>';
	});
	return row;
}
/**
*总页数和总数据的显示设置
*/
var showPageInfo = function (totalpage,totalrecords){
    return '共<span>'+totalpage+'</span>页'+'/'+'<span>'+totalrecords+'</span>条数据';
}