
$(document).ready(function(){
  console.log("executing");
  var count=0;
  var total=11;
  setInterval(function(){
    count++;
    $(".custom-carousel").fadeOut(700);
      setTimeout(function(){
        $(".custom-carousel").attr("src","./img/"+((count%total)+1)+".jpg");
        $(".custom-carousel").fadeIn(700);
      },700);

  }, 3000);

})
