//下拉导航
(function menuInit(){
	$(".menu a").each(function(){
	if($(this).closest("ul").attr("class") == "menu")
	{
		var a = $(this);
		a.mouseover(function(){
			a.next().css("visibility","visible");
			a.css("color","white");
		});
		a.closest("li").mouseleave(function(){

			$(this).find(".submenu").css("visibility","hidden");
			a.css("color"," #aaaaaa");

		});
	}
	});	
}(jQuery));
