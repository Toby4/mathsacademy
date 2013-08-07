$("#home-nav").on("click", function() {
    	$("#homepage-content").removeClass().addClass();
		$("#course-content").removeClass().addClass();
        console.log('Clicked');
});

$("#courses-nav").on("click", function() {
        $("#homepage-content").removeClass().addClass("animated fadeOut");
		$("#course-content").show().removeClass().addClass();
        console.log('Clicked');
});