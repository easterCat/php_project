$(function() {
	$('[data-ScreenRoll]').ScreenRoll();
	var bool = 0;
	$("#openSideBar").click(function() {
		if(bool == 0) {
			$("#sideBar").animate({
				'left': '0px'
			}, 200);
			$("#mainHeader").animate({
				'left': '200px'
			}, 200);
			return bool = 1;
		}
		if(bool == 1) {
			$("#sideBar").animate({
				'left': '-200px'
			}, 200);
			$("#mainHeader").animate({
				'left': '0px'
			}, 200);
			return bool = 0;
		}

	});
});