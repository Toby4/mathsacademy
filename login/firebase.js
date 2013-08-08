$.ajax({ 
    type: 'POST',
    url: 'login/firebase.php', 
    data: {assertion: assertion},
    success: function(res, status, xhr) {
        var email = res;
        var username = email.substring(0, email.indexOf("@"));
        $(document).ready(function() {                   
            $("#user").html(username);
            gravatar(email);
        });      
    },
        error: function(xhr, status, err) {
            navigator.id.logout();
            alert("Login failure: " + err);
    }
});

var url = "https://mathsacademy.firebaseio.com/";
var firebaseRef = new Firebase(url);

function fbAddUser(email) {
    firebaseRef.set({
        email: email
    });
}