$(document).on('click', '#createaccount' ,function(e){
    e.preventDefault();

    $('.tpanel-admin-login').css("display","none")
    $('.tpanel-user-login').css("display","none")
    $('.tpanel-admin-register').css("display","flex")
}) 

$(document).on('click', '#admin-login' ,function(e){
    e.preventDefault();
    $('.tpanel-admin-login').css("display","flex")
    $('.tpanel-user-login').css("display","none")
    $('.tpanel-admin-register').css("display","none")
}) 

$(document).ready(function() {
    $('#summernote').summernote();
  });