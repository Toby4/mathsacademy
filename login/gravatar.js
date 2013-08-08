function gravatar(email) {
    $.ajax({
        type: "POST",
        url: "login/gravatar.php",
        data: {email: email},
        
        success: function(res, status, xhr) {
            var gravatar = res;
            $("#gravatar").attr("src", gravatar);
        },
        error: function(xhr, status, err) {
            navigator.id.logout();
            alert("Gravatar failure: " + err);
        }
    });
}