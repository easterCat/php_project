define(function(require, exports, module) {
	var jquery = require("jquery");

	var Face = (function() {
		var init = function() {
				openClick();
				changeYzm();
			},
			openClick = function() {
				$("#openFace").click(function() {
					$(".face").show();
				});
				$(".face-img").dblclick(function() {
					var str = $(this).attr("src");
					$("#openFace").attr("src", str);
					$(".face").hide();
				})
			},
			changeYzm = function() {
				$("#captcha").click(function() {
					console.log(this);
					this.src = 'code.php?tm=' + Math.random();
				});
			};
		return {
			init: init
		};
	})();
	module.exports = Face;
});