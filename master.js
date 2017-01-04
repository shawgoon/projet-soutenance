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

  // Changement de background-image en hover
$(function(){
    var body = $('.back');
    // function pour "Particuliers"
    $('.par').mouseenter(function(){
        body.fadeOut(3000).fadeIn(1000).css('background-image', 'url("images/taxi1.jpg")');
    });
      $('.par').mouseleave(function(){
          body.css('background-image', 'url("images/1.jpg")');
    });

    // function pour "Professionnels"
    $('.pro').mouseenter(function(){
        body.fadeOut(3000).fadeIn(1000).css('background-image', 'url("images/taxi5.jpg")');
    });
      $('.pro').mouseleave(function(){
          body.css('background-image', 'url("images/1.jpg")');
    });

    // function pour "Nos villes"
    $('.vil').mouseenter(function(){
        body.fadeOut(3000).fadeIn(1000).css('background-image', 'url("images/taxi4.jpg")');
    });
      $('.vil').mouseleave(function(){
          body.css('background-image', 'url("images/1.jpg")');
    });
});
