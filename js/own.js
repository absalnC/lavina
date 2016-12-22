
$(document).ready(function(){
  console.log(this);
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
})
