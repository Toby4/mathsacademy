    $("#nav").on("click", function() {
		$("#box1").removeClass().addClass("animated fadeInRightBig");
		$("#box2").removeClass().addClass("animated fadeOutLeftBig");
		$("#box3").removeClass().addClass("animated fadeOutLeftBig");
});

	$("#nav2").on("click", function() {
		$("#box2").show().removeClass().addClass("animated fadeInRightBig");
		$("#box1").removeClass().addClass("animated fadeOutLeftBig");
		$("#box3").removeClass().addClass("animated fadeOutLeftBig");
});

	$("#nav3").on("click", function() {
		$("#box3").show().removeClass().addClass("animated fadeInRightBig");
		$("#box1").removeClass().addClass("animated fadeOutLeftBig");
		$("#box2").removeClass().addClass("animated fadeOutLeftBig");
});
