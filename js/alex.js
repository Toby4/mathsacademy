var login = function(){
    var user = $(this).children('form').children('input[type="text"]').val();
    var pass = $(this).children('form').children('input[type="password"]').val();
    if(user.length < 1 || pass.length < 1){
        alert('Invalid!\nPlease fill all required forms');
    } else {
        alert('username: '+user+'\npassword: '+pass);
        $.fallr('hide');
    };
};