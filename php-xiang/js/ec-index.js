define(function(require, exports, module) {
    var $ = require("jquery");

	var Index = (function() {
		var speed = 300, //滑动的速度
//			$changeLi = $("#bs-example-navbar-collapse-1 li"),
			init = function() {
				initEvent();
			},
//			_changeLi = function(id) {
//				id.on('click', function() {
//					$(this).addClass('activeBtn');
//					$(this).siblings().removeClass('activeBtn');
//				})
//			},
			initEvent = function() {
//				_changeLi($changeLi);
				$("#returnTop").click(function() {
					$('body,html').animate({
						scrollTop: 0
					}, speed);
				});
				$("#button_right").click(function() {
					$(".carousel-inner .active").addClass('flipOutX');
				});
			};
		return {
			init: init
		};
	})();
	//Index.init();
	module.exports = Index;
});