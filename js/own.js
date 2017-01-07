
$(document).ready(function(){
  $( '#sb-container' ).swatchbook();

  console.log("executing");
  var count=0;
  var total=11;
  setInterval(function(){
    count++;
    $(".custom-carousel").fadeOut(700);
      setTimeout(function(){
        $(".custom-carousel").attr("src","./img/"+((count%total)+1)+".jpg");
          setTimeout(function(){
          $(".custom-carousel").fadeIn(700);
        },50);
      },650);

  }, 3000);
$("myForm").validator();

  if(typeof section==="string" ){
    if(section=="valores")
      valores();
    if(section=="ministerios")
      ministerios();
  }
})
var valores=function() {
    // Init Controlle.r
    var scrollMagicController = new ScrollMagic.Controller();
    var tween1In = TweenMax.to('#card-1', 1, {
      opacity: 1
    });
    var tween1Out=TweenMax.to('#card-1',.5,{
      opacity:0
    });
    var tween2In=TweenMax.to('#card-2',.5,{
      opacity:1
    })
    var tween3In=TweenMax.to('#card-3',.5,{
      opacity:1
    })

    var scene1In = new ScrollMagic.Scene({
      triggerElement: '#card-1',
      duration:200
    })
    .setTween(tween1In)
    .addTo(scrollMagicController);

    var scene1Out = new ScrollMagic.Scene({
    triggerElement: '#card-2',
    duration:200,
    })
    .setTween(tween1Out)
    .addTo(scrollMagicController);

    var scene2In = new ScrollMagic.Scene({
    triggerElement: '#card-2',
    duration:200
    })
    .setTween(tween2In)
    .addTo(scrollMagicController);

    var scene3In = new ScrollMagic.Scene({
    triggerElement: '#card-3',
      duration:100
  })
  .setTween(tween3In)
  .addTo(scrollMagicController);
}
var ministerios=function(){
  var controller = new ScrollMagic.Controller({
    globalSceneOptions: {
      triggerHook: 'onLeave'
    }
  });
  var slides = document.querySelectorAll(".wipe");
  for (var i=0; i<slides.length; i++) {
    new ScrollMagic.Scene({
        triggerElement: slides[i]
      })
      .setPin(slides[i])
      .addTo(controller);
  }

}
