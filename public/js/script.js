$(document).ready(function(){
    $(".reveal").on('click',function() {
        var pass = $(".pwd");
        if (pass.attr('type') === 'password') {
        pass.attr('type', 'text');
        } 
        else {
        pass.attr('type', 'password');
    }
    });
});