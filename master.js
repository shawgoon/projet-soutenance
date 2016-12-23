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
  });

  // TRANSITION du formulaire de connexion -----------------------
  $("#login").click(function (){
    container.show();
    formLog.show();
  });
  //  formLog.submit(function(){
  //   $(formLog, container).remove();
  // });
});

// // error formulaire d'inscription
// $(function(){
//   var form = $('#signup');
//   var firstname = $('#prenom');
//   var lastname = $('#nom');
//   var mail = $('#mail');
//   var pass = $('#pass');
//
//   form.on('submit', function(e){
//     e.preventDefault();
//
//     var hasError = false;
//
//     if (firstname.val() === '') {
//       firstname.addClass('error');
//       hasError = true;
//     }
//
//     if (lastname.val() === '') {
//       lastname.addClass('error');
//       hasError = true;
//     }
//
//     if (mail.val() === '') {
//       mail.addClass('error');
//       hasError = true;
//     }
//     if (pass.val() === '') {
//       pass.addClass('error');
//       hasError = true;
//     }
//
//     if (!hasError) {
//       formSign.submit(function(){
//         $(formSign, container).remove();
//         $(this).replaceWith('<p>Ton incription est bien prise en compte</p>');
//       });
//     }
//   });
//
//   firstname.on('change',onChange);
//   lastname.on('change',onChange);
//   mail.on('change',onChange);
//   pass.on('change',onChange);
//
//   function onChange(){
//     var texte = $(this);
//
//     if (texte.val() === '') {
//       texte.addClass('error');
//     } else {
//       texte.removeClass('error');
//     }
//   }
//
// });
