$(document).ready(function(){

    $('#signin').click(function(){
        $('.register_form').hide();
        $('.login_form').show();
        $('.error').hide();
    });

    $('#signup').click(function(){
        $('.register_form').show();
        $('.login_form').hide();
        $('.error').hide();
    });

});