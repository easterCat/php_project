window.onload = function() {
	var img = document.getElementsByTagName('img');
	for(var i = 0; i < img.length; i++) {
		img[i].onclick = function() {
			_opener(this.alt);
		}
	}



}

function _opener(src) {
	var imgsrc = window.opener.document.getElementById("openFace");
	imgsrc.src = src;
	//form表单和父页面的巧用
	var inputFace = opener.document.getElementById('inputFace');
	inputFace.value = src;
}