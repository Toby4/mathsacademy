var currentUser = 'bob@example.com';

navigator.id.watch({
  loggedInUser: currentUser,
  onlogin: function(assertion) {
    console.log(assertion);
    
    $.ajax({ /* <-- This example uses jQuery, but you can use whatever you'd like */
        type: 'POST',
        url: 'login/persona.php', // This is a URL on your website.
        data: {assertion: assertion},
    
        success: function(res, status, xhr) { 
            alert(res);
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
});



