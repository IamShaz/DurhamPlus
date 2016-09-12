	$("div#images > div > img").hover(
		function(){
			var id = $(this).data("content");
			$("div#text").children("div#" + id).fadeIn(1000);
		},
		function() {
			var id = $(this).data("content");
			$("div#text").children("div#" + id).stop(true).hide();
		}
	);

