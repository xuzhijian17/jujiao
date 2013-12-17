function popMenu(controlId,subMenuId){
	$("#" + subMenuId).hide();
	$("#" + controlId).hover(
		function(){
			$("#" + subMenuId).show();
			$("#" + subMenuId).hover(
				function(){
					$(this).show();
				},
				function(){
					$(this).hide();
				}
			)
		},
		function(){
			$("#" + subMenuId).hide();
		}
	);	
}