var currentUser = '';

function loginbutton() {
    $("#logout").html("LOGIN");
    $("#logout").attr("id", "login");   
}

function logoutbutton() {
    $("#login").html("LOGOUT");
    $("#login").attr("id", "logout");
}


navigator.id.watch({
  loggedInUser: currentUser,
  onlogin: function(assertion) {
    console.log(assertion);
    
    $.ajax({ 
        type: 'POST',
        url: 'login/persona.php', 
        data: {assertion: assertion},
        success: function(res, status, xhr) {
            logoutbutton();
            var email = res;
            var username = email.split("@");
            $(document).ready(function() {                   
                $("#user").html(username[0] + "<br />" + username[1]);
                gravatar(email);
            });      
        },
        error: function(xhr, status, err) {
            navigator.id.logout();
            alert("Login failure: " + err);
        }
    });
 },
  onlogout: function() {


  }
});

$("document").ready(function() {
    
    $("#login").click(function() {
        navigator.id.request();        
    });
    
    $("#logout").click(function() {
        navigator.id.logout();        
    });
    
});


