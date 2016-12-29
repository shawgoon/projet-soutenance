
$(function(){

  var container = $('#wrap');
  var formSign = $('#formSignup');
  var formLog = $('#formLogin');

// cacher le background et les formulaires --------------
  container.hide();
  formSign.hide();
  formLog.hide();

  // TRANSITION du formulaire d'inscription-----------------------
  $("#signup").click(function (){
    container.show();
    formSign.show();
    formLog.hide();
  });

  // TRANSITION du formulaire de connexion -----------------------
  $("#login").click(function (){
    container.show();
    formLog.show();
    formSign.hide();
  });
  container.click(function(){
    container.hide();
    formSign.hide();
    formLog.hide();
  });
});
