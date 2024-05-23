$(document).ready(function(){

  $("#or-sign-up").click(function(){
    $(".main-container-for-signup").show(500);
    $(".main-container-for-login").hide(500);
  });
  $("#or-login").click(function(){
    $(".main-container-for-login").show(500);
    $(".main-container-for-signup").hide(500);
  });


  $("#student-log-in").click(function(){
    $("#student-login-form").slideDown(1000);
    $("#Lecturer-login-form").hide(1000);
  });

  $("#lecturer-log-in").click(function(){
    $("#Lecturer-login-form").slideDown(1000);
    $("#student-login-form").hide(1000);
  });

  $("#sign-up-as-student").click(function(){
    $(".studnet-sign-up").slideDown(1000);
    $(".lecturer-sign-up").hide(1000);
  });

  $("#sign-up-as-lecturer").click(function(){
    $(".lecturer-sign-up").slideDown(1000);
    $(".studnet-sign-up").hide(1000);
  });
});
